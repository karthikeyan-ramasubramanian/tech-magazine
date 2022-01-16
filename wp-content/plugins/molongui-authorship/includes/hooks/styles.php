<?php
defined( 'ABSPATH' ) or exit;
function authorship_register_admin_styles()
{
    $file = apply_filters( 'authorship/admin/styles', MOLONGUI_AUTHORSHIP_FOLDER . ( is_rtl() ? '/assets/css/admin-rtl.77ae.min.css' : '/assets/css/admin.02ae.min.css' ) );
    $deps = array( 'wp-color-picker' );

    authorship_register_style( $file, 'admin', $deps );
}
add_action( 'admin_enqueue_scripts', 'authorship_register_admin_styles' );
function authorship_enqueue_admin_styles()
{
    $screen  = get_current_screen();
    $screens = array_merge
    (
        molongui_enabled_post_screens( MOLONGUI_AUTHORSHIP_PREFIX, 'all' ),
        array
        (
            'profile', 'users', 'user', 'user-edit',
            MOLONGUI_AUTHORSHIP_CPT, 'edit-'.MOLONGUI_AUTHORSHIP_CPT,
            'molongui_page_molongui-authorship'
        )
    );
    if ( !in_array( $screen->id, $screens ) ) return;
    wp_enqueue_style( 'wp-color-picker' );
    $file = apply_filters( 'authorship/admin/styles', MOLONGUI_AUTHORSHIP_FOLDER . ( is_rtl() ? '/assets/css/admin-rtl.77ae.min.css' : '/assets/css/admin.02ae.min.css' ) );

    authorship_enqueue_style( $file, 'admin', true );
}
add_action( 'admin_enqueue_scripts', 'authorship_enqueue_admin_styles' );
function authorship_admin_extra_styles()
{
    $css = '';
    $css .= "";
    return apply_filters( 'authorship/admin/extra_styles', $css );
}