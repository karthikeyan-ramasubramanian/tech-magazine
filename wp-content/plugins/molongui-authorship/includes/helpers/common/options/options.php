<?php
defined( 'ABSPATH' ) or exit;
function authorship_get_options()
{
    global $wpdb;
    $entries = $wpdb->get_results
    (
        $wpdb->prepare( "SELECT option_name,option_value FROM {$wpdb->options} WHERE option_name LIKE %s", MOLONGUI_AUTHORSHIP_PREFIX.'_%' ),
        ARRAY_A
    );

    if ( !empty( $entries ) )
    {
        $options = array();
        foreach ( $entries as $entry ) $options[$entry['option_name']] = maybe_unserialize( $entry['option_value'] );
    }
    return ( empty( $options ) ) ? false : $options;
}
function authorship_merge_options( $array )
{
    $merged = array();
    foreach ( $array as $key => $value )
    {
        $defaults = call_user_func( MOLONGUI_AUTHORSHIP_PREFIX.'_get_default_settings' );

        $default_key = str_replace( MOLONGUI_AUTHORSHIP_PREFIX.'_', '', $key );
        if ( is_array( $value ) and !empty( $defaults[$default_key] ) )
        {
            $merged[$key] = array_merge( $defaults[$default_key], $array[$key] );
        }
        else
        {
            $merged[$key] = $value;
        }
        unset( $defaults[$default_key] );
    }
    foreach ( $defaults as $key => $value )
    {
        $merged[MOLONGUI_AUTHORSHIP_PREFIX.'_'.$key] = $value;
    }
    return $merged;
}