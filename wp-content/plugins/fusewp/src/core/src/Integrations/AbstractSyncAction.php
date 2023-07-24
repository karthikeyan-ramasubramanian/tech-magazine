<?php

namespace FuseWP\Core\Integrations;

abstract class AbstractSyncAction implements SyncActionInterface
{
    const EMAIL_LIST_FIELD_ID = 'email_list';
    const TAGS_FIELD_ID = 'tags';
    const CUSTOM_FIELDS_FIELD_ID = 'custom_fields';

    public function get_field_name($index)
    {
        return function ($field_id) use ($index) {
            return sprintf('fusewp_sync_destinations[%s][%s]', $index, $field_id);
        };
    }

    public function get_mappable_data()
    {
        return apply_filters('fusewp_sync_mappable_data', [
            esc_html__('User Data', 'fusewp') => [
                'first_name'      => esc_html__('First Name', 'fusewp'),
                'last_name'       => esc_html__('Last Name', 'fusewp'),
                'description'     => esc_html__('Biography', 'fusewp'),
                'user_url'        => esc_html__('Website URL', 'fusewp'),
                'user_login'      => esc_html__('Username', 'fusewp'),
                'display_name'    => esc_html__('Display Name', 'fusewp'),
                'nickname'        => esc_html__('Nickname', 'fusewp'),
                'user_nicename'   => esc_html__('URL-friendly user name', 'fusewp'),
                'user_id'         => esc_html__('User ID', 'fusewp'),
                'locale'          => esc_html__('Language', 'fusewp'),
                'role'            => esc_html__('User Role', 'fusewp'),
                'user_registered' => esc_html__('Registration Date', 'fusewp'),
                'ip_address'      => esc_html__('IP Address', 'fusewp'),
            ]
        ]);
    }

    public function get_list_fields($integration, $index = 0)
    {
        return [];
    }

    public function get_list_fields_default_data()
    {
        return [];
    }
}