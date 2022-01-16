<?php
defined( 'ABSPATH' ) or exit;
if ( authorship_is_feature_enabled( 'box' ) )
{
    $settings = get_option( MOLONGUI_AUTHORSHIP_BOX_SETTINGS );
    if ( empty( $settings['order'] ) ) $settings['order'] = 11;
    if ( $settings['order'] <= 10 )
    {
        remove_filter( 'the_content', 'wpautop' );
        add_filter( 'the_content', 'wpautop', $settings['order'] - 1 );
    }
    add_filter( 'the_content', 'authorship_render_author_box', $settings['order'], 1 );
}