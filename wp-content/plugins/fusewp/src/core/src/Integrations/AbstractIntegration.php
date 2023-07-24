<?php

namespace FuseWP\Core\Integrations;

use soulseekah\WP_Lock\WP_Lock;
use soulseekah\WP_Lock\WP_Lock_Backend_wpdb;

abstract class AbstractIntegration implements IntegrationInterface
{
    public $id;

    public $title;

    public $logo_url;

    const SYNC_SUPPORT = 'sync_support';

    public function __construct()
    {
        add_filter('fusewp_registered_integrations', [$this, 'register_integration']);
    }

    abstract public static function features_support();

    abstract public function is_connected();

    abstract public function connection_settings();

    /**
     * @return mixed
     */
    abstract public function get_email_list();

    /**
     * @param $list_id
     *
     * @return ContactFieldEntity[]
     */
    abstract public function get_contact_fields($list_id = '');

    /**
     * @return false|SyncActionInterface
     */
    abstract public function get_sync_action();

    public function register_integration($integrations)
    {
        $integrations[$this->id] = $this;

        return $integrations;
    }

    public function get_connect_url()
    {
        $redirect_url = FUSEWP_SETTINGS_GENERAL_SETTINGS_PAGE;

        return add_query_arg([
            'fwpnonce'     => wp_create_nonce(sprintf('fusewp_%s_auth', $this->id)),
            'redirect_url' => urlencode($redirect_url),
        ],
            FUSEWP_OAUTH_URL . '/' . $this->id
        );
    }

    public function get_disconnect_url()
    {
        return add_query_arg(
            array(
                'fusewp-integration-disconnect' => $this->id,
                'fwpnonce'                      => wp_create_nonce('fusewp_' . $this->id . '_disconnect')
            ),
            FUSEWP_SETTINGS_GENERAL_SETTINGS_PAGE
        );
    }

    public function get_settings()
    {
        return fusewp_cache_transform('fwp_get_settings_' . $this->id, function () {

            $data = get_option(FUSEWP_SETTINGS_DB_OPTION_NAME, []);

            return fusewpVar($data, $this->id, []);
        });
    }

    /**
     * Subtracting 5 minute to account for any lag and to ensure token is refreshed before it expires.
     *
     * @param $expires_at
     *
     * @return float|int
     */
    public function oauth_expires_at_transform($expires_at)
    {
        return absint($expires_at) - (5 * MINUTE_IN_SECONDS);
    }

    protected function increment_oauth_refresh_error_count()
    {
        $refresh_count_lock = new WP_Lock("fusewp:{$this->id}:oauth:refresh", new WP_Lock_Backend_wpdb());

        $refresh_count_lock->acquire(WP_Lock::WRITE);

        $refresh_count_option_key = "fusewp_oauth_refresh_count_" . $this->id;
        $refresh_time_option_key  = "fusewp_oauth_refresh_time_" . $this->id;

        $count = (int)get_option($refresh_count_option_key, 0);

        \update_option($refresh_count_option_key, $count + 1);
        \update_option($refresh_time_option_key, time());

        $refresh_count_lock->release();
    }

    protected function delete_oauth_refresh_error_count()
    {
        \delete_option("fusewp_oauth_refresh_count_" . $this->id);
        \delete_option("fusewp_oauth_refresh_time_" . $this->id);
    }

    /**
     * @throws \Exception
     */
    protected function is_rate_limit_exceeded()
    {
        $count     = (int)\get_option("fusewp_oauth_refresh_count_" . $this->id, 0);
        $timestamp = (int)\get_option("fusewp_oauth_refresh_time_" . $this->id, 0);

        $error_message = sprintf('%s: %s', $this->id, esc_html__('rate limit exceeded', 'fusewp'));

        if ($count > 3 && time() < ($timestamp + (6 * HOUR_IN_SECONDS))) {
            throw new \Exception($error_message);
        }

        if ($count > 6 && time() < ($timestamp + (12 * HOUR_IN_SECONDS))) {
            throw new \Exception($error_message);
        }

        if ($count > 12 && time() < ($timestamp + (HOUR_IN_SECONDS))) {
            throw new \Exception($error_message);
        }

        if ($count > 24 && time() < ($timestamp + (DAY_IN_SECONDS))) {
            throw new \Exception($error_message);
        }
    }

    /**
     * @param $refresh_token
     * @param array $args
     *
     * @return mixed
     *
     * @throws \Exception
     */
    protected function oauth_token_refresh($refresh_token, $args = [])
    {
        $this->is_rate_limit_exceeded();

        try {

            $url = sprintf(FUSEWP_OAUTH_URL . '/%s?refresh_token=%s', $this->id, $refresh_token);

            if ( ! empty($args)) $url = add_query_arg($args, $url);

            $response = wp_remote_get($url, ['sslverify' => ! defined('W3GUY_LOCAL')]);

            if (is_wp_error($response)) {
                throw new \Exception($response->get_error_message());
            }

            $response_body = wp_remote_retrieve_body($response);

            $result = \json_decode($response_body, true);

            if ( ! isset($result['success']) || $result['success'] !== true) {
                throw new \Exception('Error failed to refresh ' . $response_body);
            }

            $this->delete_oauth_refresh_error_count();

            return $result;

        } catch (\Exception $e) {

            $this->increment_oauth_refresh_error_count();

            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    public static function get_instance()
    {
        return new static();
    }
}