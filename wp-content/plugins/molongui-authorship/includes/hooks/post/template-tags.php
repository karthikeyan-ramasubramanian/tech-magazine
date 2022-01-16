<?php
defined( 'ABSPATH' ) or exit;
function authorship_template_tags()
{
    if ( !authorship_is_feature_enabled( 'byline_tags' ) ) return;
    function get_the_molongui_author( $pid = null, $separator = '', $last_separator = '', $before = '', $after = '' )
    {
        if ( ( is_null( $pid ) or !is_integer( $pid ) ) and !in_the_loop() ) return '';
        $settings = get_option( MOLONGUI_AUTHORSHIP_BYLINE_SETTINGS );
        $output  = '';
        $output .= apply_filters( 'molongui_byline_prefix', ( !empty( $before ) ? $before : $settings['byline_prefix'] ) );
        $output .= get_byline( $pid, $separator, $last_separator, false );
        $output .= apply_filters( 'molongui_byline_suffix', ( !empty( $after ) ? $after : $settings['byline_suffix'] ) );
        return $output;
    }
    function the_molongui_author( $pid = null, $separator = '', $last_separator = '', $before = '', $after = '' )
    {
        echo get_the_molongui_author( $pid, $separator, $last_separator, $before, $after );
    }
    function get_the_molongui_author_posts_link( $pid = null, $separator = '', $last_separator = '', $before = '', $after = '' )
    {
        if ( ( is_null( $pid ) or !is_integer( $pid ) ) and !in_the_loop() ) return '';
        $settings = get_option( MOLONGUI_AUTHORSHIP_BYLINE_SETTINGS );
        $output  = '';
        $output .= apply_filters( 'molongui_byline_prefix', ( !empty( $before ) ? $before : $settings['byline_prefix'] ) );
        $linked  = apply_filters( 'molongui_author_byline_linked', true );
        $output .= get_byline( $pid, $separator, $last_separator, $linked );
        $output .= apply_filters( 'molongui_byline_suffix', ( !empty( $after ) ? $after : $settings['byline_suffix'] ) );
        return $output;
    }
    function the_molongui_author_posts_link( $pid = null, $separator = '', $last_separator = '', $before = '', $after = '' )
    {
        echo get_the_molongui_author_posts_link( $pid, $separator, $last_separator, $before, $after );
    }
}
add_action( 'authorship/init', 'authorship_template_tags' );