<?php

namespace FuseWP\Core\Sync\Sources;

use FuseWP\Core\Integrations\IntegrationInterface;

class WPUserRoles extends AbstractSyncSource
{
    public function __construct()
    {
        $this->title = esc_html__('User Roles', 'fusewp');

        $this->id = 'wp_user_roles';

        parent::__construct();

        add_action('user_register', function ($user_id) {
            $this->sync_user($user_id, self::SUBSCRIBE_ACTION);
        }, 9999); // priority 99 so user meta by other plugins must have been saved

        add_action('profile_update', function ($user_id, $old_user_data) {
            $this->sync_user($user_id, self::SUBSCRIBE_ACTION, $old_user_data->user_email);
        }, 10, 2);

        add_action('delete_user', function ($user_id) {
            $this->sync_user($user_id, self::UNSUBSCRIBE_ACTION);
        }, 20);
    }

    public function get_source_items()
    {
        return [];
    }

    public function get_destination_items()
    {
        $roles = get_editable_roles();

        $bucket = ['any' => esc_html__('Any Roles', 'fusewp')];
        foreach ($roles as $role_id => $role) {
            $bucket[$role_id] = $role['name'];
        }

        return $bucket;
    }

    public function get_destination_item_label()
    {
        return esc_html__('User Role', 'fusewp');
    }

    public function get_rule_information()
    {
        return '<p>' . sprintf(
                esc_html__('Sync WordPress users with your email marketing software based on their registered user roles. Changes to user profile information are automatically synced as well. And if a user is deleted, they are automatically unsubscribed. %sLearn more%s', 'fusewp'),
                '<a href="https://fusewp.com/article/sync-woocommerce-memberships-email-marketing/">', '</a>'
            ) . '</p>';
    }

    public function sync_user($user_id, $action = self::SUBSCRIBE_ACTION, $old_email_address = '')
    {
        if (empty($user_id)) return;

        static $cache_bucket = [];

        $cache_key = implode(':', func_get_args());

        if (isset($cache_bucket[$cache_key])) return;

        $cache_bucket[$cache_key] = true;

        $user = get_userdata($user_id);

        $user_data = $this->get_mapping_user_data($user);

        $user_roles   = $user->roles;
        $user_roles[] = 'any';

        $rule = fusewp_sync_get_rule_by_source($this->id);

        $destinations = fusewpVar($rule, 'destinations', [], true);

        if ( ! empty($destinations) && is_string($destinations)) {
            $destinations = json_decode($destinations, true);
        }

        if (is_array($destinations) && ! empty($destinations)) {

            foreach ($destinations as $destination) {

                if (empty($destination['destination_item']) || ! in_array($destination['destination_item'], $user_roles)) continue;

                $integration = fusewpVar($destination, 'integration', '', true);

                if ( ! empty($integration)) {

                    $integration = fusewp_get_registered_sync_integrations($integration);

                    $sync_action = $integration->get_sync_action();

                    if ($integration instanceof IntegrationInterface) {

                        $list_id = fusewpVar($destination, $sync_action::EMAIL_LIST_FIELD_ID, '');

                        $email_address = $user_data->get('user_email');

                        $GLOBALS['fusewp_sync_destination'][$list_id] = $destination;

                        if ($action == self::UNSUBSCRIBE_ACTION) {

                            $sync_action->unsubscribe_user(
                                $list_id,
                                $email_address
                            );

                        } else {

                            if ($destination['destination_item'] == 'any') {

                                $sync_action->subscribe_user(
                                    $list_id,
                                    $email_address,
                                    $user_data,
                                    fusewpVar($destination, $sync_action::CUSTOM_FIELDS_FIELD_ID, []),
                                    fusewpVar($destination, $sync_action::TAGS_FIELD_ID, ''),
                                    $old_email_address
                                );

                                continue;
                            }

                            $sync_action->subscribe_user(
                                $list_id,
                                $email_address,
                                $user_data,
                                fusewpVar($destination, $sync_action::CUSTOM_FIELDS_FIELD_ID, []),
                                fusewpVar($destination, $sync_action::TAGS_FIELD_ID, ''),
                                $old_email_address
                            );
                        }
                    }
                }
            }
        }
    }
}