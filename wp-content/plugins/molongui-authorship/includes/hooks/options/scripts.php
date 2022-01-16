<?php
defined( 'ABSPATH' ) or exit;
function authorship_register_options_scripts()
{
    $file = apply_filters( 'authorship/options/script', MOLONGUI_AUTHORSHIP_FOLDER . '/assets/js/options.f9d8.min.js' );

    authorship_register_script( $file, 'options' );
}
add_action( 'admin_enqueue_scripts', 'authorship_register_options_scripts' );
function authorship_enqueue_options_scripts()
{
    $file = apply_filters( 'authorship/options/script', MOLONGUI_AUTHORSHIP_FOLDER . '/assets/js/options.f9d8.min.js' );

    authorship_enqueue_script( $file, 'options', true );
}
add_action( 'authorship/options/before_footer', 'authorship_enqueue_options_scripts' );
function authorship_options_script_params()
{
    $params = array
    (
        'is_premium' => false,
        100 => wp_create_nonce( 'authorship_update_counters_nonce' ),
        101 => __( "Count Update", 'molongui-authorship' ),
        102 => __( "Forcing an update on post counters is a task that runs in the background and might take a (long) while to complete. Please confirm you want to go ahead.", 'molongui-authorship' ),
        103 => __( "Cancel", 'molongui-authorship' ),
        104 => __( "OK", 'molongui-authorship' ),
        105 => __( "Running...", 'molongui-authorship' ),
        106 => __( "Post count update is running in the background. A notice will let you know the update status. You can close this window now.", 'molongui-authorship' ),
        107 => __( "Error", 'molongui-authorship' ),
        108 => __( "Something went wrong and counters update failed. Please refresh this page and try again.", 'molongui-authorship' ),
        109 => __( "Something went wrong and couldn't connect to the server. Please, try again.", 'molongui-authorship' ),
        200 => wp_create_nonce( 'authorship_clear_cache_nonce' ),
        201 => __( "Clear Cache", 'molongui-authorship' ),
        202 => __( "WordPress object cache is used to speed things up. Please confirm you want to go ahead and clear it.", 'molongui-authorship' ),
        203 => __( "Cancel", 'molongui-authorship' ),
        204 => __( "OK", 'molongui-authorship' ),
        205 => __( "Cleared!", 'molongui-authorship' ),
        206 => __( "Object cache used by Molongui Authorship has been cleared successfully", 'molongui-authorship' ),
        207 => __( "Error", 'molongui-authorship' ),
        208 => __( "Something went wrong and cache clean up failed. Please refresh this page and try again.", 'molongui-authorship' ),
        209 => __( "Something went wrong and couldn't connect to the server. Please, try again.", 'molongui-authorship' ),
    );
    return apply_filters( 'authorship/options/script_params', $params );
}