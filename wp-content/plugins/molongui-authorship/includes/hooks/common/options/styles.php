<?php
defined( 'ABSPATH' ) or exit;
function authorship_enqueue_common_options_styles()
{
    if ( !authorship_is_options_page() ) return;
    if ( apply_filters( 'authorship/options/enqueue_colorpicker', false ) ) wp_enqueue_style( 'wp-color-picker' );
    $file = '/assets/css/common/options.c300.min.css';
    if ( is_rtl() ) $file = '/assets/css/common/options-rtl.0122.min.css';

    if ( file_exists( MOLONGUI_AUTHORSHIP_DIR . $file ) )
    {
        wp_enqueue_style( MOLONGUI_AUTHORSHIP_NAME.'-common-options', MOLONGUI_AUTHORSHIP_URL.$file, array(), MOLONGUI_AUTHORSHIP_VERSION, 'screen' );
        wp_add_inline_style( MOLONGUI_AUTHORSHIP_NAME.'-common-options', molongui_get_admin_color() );
    }
}
add_action( 'admin_enqueue_scripts', 'authorship_enqueue_common_options_styles' );