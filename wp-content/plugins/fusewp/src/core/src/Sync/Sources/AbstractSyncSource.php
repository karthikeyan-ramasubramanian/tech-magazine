<?php

namespace FuseWP\Core\Sync\Sources;

abstract class AbstractSyncSource
{
    const SUBSCRIBE_ACTION = 'subscribe_action';

    const UNSUBSCRIBE_ACTION = 'unsubscribe_action';

    public $id;

    public $title;

    public function __construct()
    {
        add_filter('fusewp_registered_sync_sources', [$this, 'register_source']);
        add_filter('fusewp_sync_mappable_data', [$this, 'get_custom_profile_fields']);
        add_filter('fusewp_get_mapping_user_data_entity', [$this, 'get_mapping_custom_user_data'], 10, 3);
    }

    public function get_mapping_user_data($wp_user_or_id): MappingUserDataEntity
    {
        $user = $wp_user_or_id;

        if ( ! is_a($wp_user_or_id, '\WP_user')) {
            $user = get_userdata($wp_user_or_id);
        }

        $loadable_data = [];

        if (is_a($user, '\WP_user')) {

            $loadable_data = apply_filters('fusewp_sync_user_values', [
                'user_email'      => $user->user_email,
                'first_name'      => $user->first_name,
                'last_name'       => $user->last_name,
                'description'     => $user->description,
                'user_url'        => $user->user_url,
                'user_login'      => $user->user_login,
                'display_name'    => $user->display_name,
                'nickname'        => $user->nickname,
                'user_nicename'   => $user->user_nicename,
                'user_id'         => $user->ID,
                'locale'          => $user->locale,
                'role'            => is_array($user->roles) ? reset($user->roles) : '',
                'user_registered' => $user->user_registered,
                'ip_address'      => fusewp_get_ip_address()
            ], $wp_user_or_id);
        }

        return new MappingUserDataEntity($user->ID, $loadable_data);
    }

    public function get_custom_profile_fields($fields)
    {
        return $fields;
    }

    public function get_mapping_custom_user_data($value, $field_id, $wp_user_id)
    {
        return $value;
    }

    public function register_source($sources)
    {
        $sources[$this->id] = self::get_instance();

        return $sources;
    }

    abstract function get_source_items();

    abstract function get_destination_items();

    abstract function get_destination_item_label();

    abstract function get_rule_information();

    public static function get_instance()
    {
        return new static();
    }
}