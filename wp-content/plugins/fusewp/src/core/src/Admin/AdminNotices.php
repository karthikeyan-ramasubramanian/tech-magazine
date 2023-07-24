<?php

namespace FuseWP\Core\Admin;

use PAnD as PAnD;

class AdminNotices
{
    public function __construct()
    {
        add_action('admin_init', function () {
            if (fusewp_is_admin_page()) {
                remove_all_actions('admin_notices');
            }

            add_action('admin_notices', [$this, 'admin_notices_bucket']);

            add_filter('removable_query_args', array($this, 'removable_query_args'));
        });

        add_action('admin_init', array('PAnD', 'init'));
        add_action('admin_init', array($this, 'dismiss_leave_review_notice_forever'));
    }

    public function admin_notices_bucket()
    {
        do_action('fusewp_admin_notices');

        $this->review_plugin_notice();

        $this->integrations_upsell();
    }

    public function is_admin_notice_show()
    {
        return apply_filters('fusewp_ads_admin_notices_display', true);
    }

    public function removable_query_args($args)
    {
        $args[] = 'settings-updated';
        $args[] = 'license-settings-updated';
        $args[] = 'oauth-error';
        $args[] = 'oauth-provider';

        return $args;
    }

    public function dismiss_leave_review_notice_forever()
    {
        if ( ! empty($_GET['fusewp_admin_action']) && $_GET['fusewp_admin_action'] == 'dismiss_leave_review_forever') {
            update_option('fusewp_dismiss_leave_review_forever', true);

            wp_safe_redirect(esc_url_raw(remove_query_arg('fusewp_admin_action')));
            exit;
        }
    }

    /**
     * Display one-time admin notice to review plugin at least 7 days after installation
     */
    public function review_plugin_notice()
    {
        if ( ! current_user_can('manage_options')) return;

        if ( ! PAnD::is_admin_notice_active('fusewp-review-plugin-notice-forever')) return;

        if (get_option('fusewp_dismiss_leave_review_forever', false)) return;

        $install_date = get_option('fusewp_install_date', '');

        if (empty($install_date)) return;

        $diff = round((time() - strtotime($install_date)) / 24 / 60 / 60);

        if ($diff < 7) return;

        $review_url = 'https://wordpress.org/support/plugin/fusewp/reviews/?filter=5#new-post';

        $dismiss_url = esc_url_raw(add_query_arg('fusewp_admin_action', 'dismiss_leave_review_forever'));

        $notice = sprintf(
            __('Hey, I noticed you have been using FuseWP for at least 7 days now - that\'s awesome! Could you please do me a BIG favor and give it a %1$s5-star rating on WordPress?%2$s This will help us spread the word and boost our motivation - thanks!', 'fusewp'),
            '<a href="' . $review_url . '" target="_blank">',
            '</a>'
        );
        $label  = __('Sure! I\'d love to give a review', 'fusewp');

        $dismiss_label = __('Dismiss Forever', 'fusewp');

        $notice .= "<div style=\"margin:10px 0 0;\"><a href=\"$review_url\" target='_blank' class=\"button-primary\">$label</a></div>";
        $notice .= "<div style=\"margin:10px 0 0;\"><a href=\"$dismiss_url\">$dismiss_label</a></div>";

        echo '<div data-dismissible="fusewp-review-plugin-notice-forever" class="update-nag notice notice-warning is-dismissible">';
        echo "<p>$notice</p>";
        echo '</div>';
    }

    public function integrations_upsell()
    {
        if ( ! $this->is_admin_notice_show()) return;

        $upsells = [
            [
                'id'        => 'memberpress',
                'is_active' => class_exists('\MeprAppCtrl'),
                'url'       => 'https://fusewp.com/article/sync-memberpress-email-marketing/?utm_source=wp_dashboard&utm_medium=upgrade&utm_campaign=memberpress_admin_notice',
                'message'   => esc_html__('Did you know you can sync your MemberPress members to your CRM and email list based on their memberships and subscription status? %sLearn more%s', 'fusewp')
            ],
            [
                'id'        => 'woocommerce_memberships',
                'is_active' => class_exists('\WC_Memberships'),
                'url'       => 'https://fusewp.com/article/sync-woocommerce-memberships-email-marketing/?utm_source=wp_dashboard&utm_medium=upgrade&utm_campaign=woocommerce_memberships_admin_notice',
                'message'   => esc_html__('Did you know you can sync your members in WooCommerce Memberships to your CRM and email list based on their subscribed plan and membership status? %sLearn more%s', 'fusewp')
            ],
            [
                'id'        => 'woocommerce_subscriptions',
                'is_active' => class_exists('\WC_Subscriptions'),
                'url'       => 'https://fusewp.com/article/sync-woocommerce-subscriptions-email-marketing/?utm_source=wp_dashboard&utm_medium=upgrade&utm_campaign=woocommerce_subscriptions_admin_notice',
                'message'   => esc_html__('Did you know you can sync your customers in WooCommerce Subscriptions to your CRM and email list based on their subscribed product and subscription status? %sLearn more%s', 'fusewp')
            ]
        ];

        foreach ($upsells as $upsell) {

            $notice_id = sprintf('fusewp_show_%s_features-forever', $upsell['id']);

            if ( ! PAnD::is_admin_notice_active($notice_id)) {
                continue;
            }

            if ( ! $upsell['is_active']) continue;

            $notice = sprintf($upsell['message'], '<a href="' . esc_url($upsell['url']) . '" target="_blank">', '</a>');
            echo '<div data-dismissible="' . esc_attr($notice_id) . '" class="notice notice-info is-dismissible">';
            echo "<p>$notice</p>";
            echo '</div>';
        }
    }

    /**
     * @return self
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