<?php

namespace FuseWP\Core;

use FuseWP\Core\Admin\AdminNotices;
use FuseWP\Core\Admin\SettingsPage\LicenseUpgrader;
use FuseWP\Core\Admin\SettingsPage\ProUpgrade;
use FuseWP\Core\Admin\SettingsPage\SyncLogPage;
use FuseWP\Core\Admin\SettingsPage\SyncPage;
use FuseWP\Core\Integrations\CampaignMonitor;
use FuseWP\Core\Integrations\ConstantContact;
use FuseWP\Core\Integrations\Mailchimp;
use FuseWP\Core\Integrations\ActiveCampaign;
use FuseWP\Core\Sync\Sources\WPUserRoles;

if ( ! defined('ABSPATH')) {
    exit;
}

define('FUSEWP_OAUTH_URL', ! defined('W3GUY_LOCAL') ? 'https://auth.fusewp.com' : 'https://auth.fusewp.test');

define('FUSEWP_ROOT', wp_normalize_path(plugin_dir_path(FUSEWP_SYSTEM_FILE_PATH)));
/** internally uses wp_normalize_path */
define('FUSEWP_URL', plugin_dir_url(FUSEWP_SYSTEM_FILE_PATH));
define('FUSEWP_ASSETS_DIR', wp_normalize_path(dirname(__FILE__) . '/assets/'));

if (strpos(__FILE__, 'fusewp' . DIRECTORY_SEPARATOR . 'src') !== false) {
    // production url path to assets folder.
    define('FUSEWP_ASSETS_URL', FUSEWP_URL . 'src/core/src/assets/');
} else {
    // dev url path to assets folder.
    define('FUSEWP_ASSETS_URL', dirname(FUSEWP_URL) . wp_normalize_path('/' . dirname(substr(__FILE__, strpos(__FILE__, 'fusewp'))) . '/assets/'));
}

define('FUSEWP_SRC', wp_normalize_path(dirname(__FILE__) . '/'));
define('FUSEWP_SETTINGS_PAGE_FOLDER', wp_normalize_path(dirname(__FILE__) . '/Admin/SettingsPage/'));

define('FUSEWP_SETTINGS_SETTINGS_SLUG', 'fusewp-settings');
define('FUSEWP_SYNC_SETTINGS_SLUG', 'fusewp-sync');

define('FUSEWP_SETTINGS_SETTINGS_PAGE', admin_url('admin.php?page=' . FUSEWP_SETTINGS_SETTINGS_SLUG));
define('FUSEWP_LICENSE_SETTINGS_PAGE', add_query_arg('view', 'license', FUSEWP_SETTINGS_SETTINGS_PAGE));

define('FUSEWP_SETTINGS_GENERAL_SETTINGS_PAGE', add_query_arg(['view' => 'general'], admin_url('admin.php?page=' . FUSEWP_SETTINGS_SETTINGS_SLUG)));
define('FUSEWP_SYNC_SETTINGS_PAGE', admin_url('admin.php?page=' . FUSEWP_SYNC_SETTINGS_SLUG));
define('FUSEWP_SYNC_LOGS_SETTINGS_PAGE', add_query_arg(['view' => 'sync-logs'], FUSEWP_SYNC_SETTINGS_PAGE));


define('FUSEWP_SETTINGS_DB_OPTION_NAME', 'fusewp_settings');

class Base
{
    public function __construct()
    {
        register_activation_hook(FUSEWP_SYSTEM_FILE_PATH, ['FuseWP\Core\RegisterActivation\Base', 'run_install']);

        if (version_compare(get_bloginfo('version'), '5.1', '<')) {
            add_action('wpmu_new_blog', ['FuseWP\Core\RegisterActivation\Base', 'multisite_new_blog_install']);
        } else {
            add_action('wp_initialize_site', function (\WP_Site $new_site) {
                RegisterActivation\Base::multisite_new_blog_install($new_site->blog_id);
            });
        }

        add_action('activate_blog', ['FuseWP\Core\RegisterActivation\Base', 'multisite_new_blog_install']);

        add_filter('wpmu_drop_tables', [$this, 'wpmu_drop_tables']);

        // handles edge case where register activation isn't triggered especially after upgrader
        add_action('admin_init', function () {
            if (get_option('fusewp_plugin_activated') != 'true') {
                RegisterActivation\Base::run_install();
            }

            if (get_option('fusewp_upgrader_success_flag') == 'true') {
                delete_option('fusewp_upgrader_success_flag');
                if (class_exists('\FuseWP\Libsodium\Licensing\Licensing')) {
                    \FuseWP\Libsodium\Licensing\Licensing::get_instance()->activate_license(get_option('fusewp_license_key', ''), true);
                }
            }
        });

        AjaxHandler::get_instance();
        RegisterScripts::get_instance();

        // Integrations
        Mailchimp\Mailchimp::get_instance();
        ConstantContact\ConstantContact::get_instance();
        CampaignMonitor\CampaignMonitor::get_instance();
        ActiveCampaign\ActiveCampaign::get_instance();

        // Sources
        WPUserRoles::get_instance();

        $this->admin_hooks();

        add_action('plugins_loaded', [$this, 'db_updates']);
    }

    public function db_updates()
    {
        if ( ! is_admin()) {
            return;
        }

        DBUpdates::get_instance()->maybe_update();
    }

    public function admin_hooks()
    {
        if ( ! is_admin()) return;

        Admin\SettingsPage\Settings::get_instance();
        SyncPage::get_instance();
        SyncLogPage::get_instance();
        AdminNotices::get_instance();
        ProUpgrade::get_instance();
        LicenseUpgrader::get_instance();

        do_action('fusewp_admin_hooks');
    }

    public function wpmu_drop_tables($tables)
    {
        global $wpdb;

        $db_prefix = $wpdb->prefix;

        $tables[] = $db_prefix . Core::sync_table_name;

        $tables = apply_filters('fusewp_drop_mu_database_tables', $tables, $db_prefix);

        return $tables;
    }

    /**
     * Singleton.
     *
     * @return Base
     */
    public static function get_instance()
    {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}