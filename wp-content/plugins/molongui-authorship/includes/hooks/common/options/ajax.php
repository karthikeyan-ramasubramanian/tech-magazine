<?php
defined( 'ABSPATH' ) or exit;
function authorship_save_options()
{
    if ( !isset( $_POST['nonce'] ) ) return;
    if ( !wp_verify_nonce( $_POST['nonce'], 'mfw_save_options_nonce' ) ) return;
    $options = $_POST['data'];

    if ( isset( $options ) and is_array( $options ) )
    {
        if ( isset( $options[MOLONGUI_AUTHORSHIP_PREFIX.'_'.'pro_license'] ) ) unset( $options[MOLONGUI_AUTHORSHIP_PREFIX.'_'.'pro_license'] );

        foreach ( $options as $option => $settings )
        {
            $tab = str_replace( MOLONGUI_AUTHORSHIP_PREFIX.'_', '', $option );
            $settings['plugin_version'] = MOLONGUI_AUTHORSHIP_VERSION;
            $current = (array) get_option( $option, array() );
            $settings = apply_filters( "authorship/validate_{$tab}_options", $settings, $current, $option );
            do_action( "authorship/{$tab}_options", $settings, $current, $option );
            update_option( $option, $settings );
        }
        do_action( 'authorship/options', $options );
    }
    wp_die();
}
add_action( 'wp_ajax_'.MOLONGUI_AUTHORSHIP_PREFIX.'_save_options', 'authorship_save_options' );
function authorship_export_options()
{
    $options = authorship_get_options();
    $options['plugin_id']      = MOLONGUI_AUTHORSHIP_PREFIX;
    $options['plugin_version'] = MOLONGUI_AUTHORSHIP_VERSION;
    $options = apply_filters( 'authorship/export_options', $options );
    echo json_encode( $options );
    wp_die();
}
add_action( 'wp_ajax_'.MOLONGUI_AUTHORSHIP_PREFIX.'_export_options', 'authorship_export_options' );