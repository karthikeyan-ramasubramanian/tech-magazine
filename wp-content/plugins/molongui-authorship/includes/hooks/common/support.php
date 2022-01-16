<?php
defined( 'ABSPATH' ) or exit;
if ( did_action( '_molongui/support/loaded' ) ) return;

$file     = MOLONGUI_AUTHORSHIP_FOLDER . ( is_rtl() ? '/assets/css/common/support-rtl.0287.min.css' : '/assets/css/common/support.0e53.min.css' );
$filepath = trailingslashit( WP_PLUGIN_DIR ) . $file;
if ( file_exists( $filepath ) )
{
    add_filter( '_molongui/support/stylesheet', function() use ( $file ){ return $file; }, 10 );

    $filesize = filesize( $filepath );
    if ( $filesize > 4096 )
    {
        add_filter( 'molongui/support/inline/stylesheet', '__return_false', 0 );
        add_action( 'admin_enqueue_scripts', 'authorship_load_support_styles' );
    }
    elseif ( $filesize )
    {
        add_filter( 'molongui/support/inline/stylesheet', '__return_true', 0 );
        add_action( 'admin_head', 'authorship_load_support_styles' );
    }
}
function authorship_load_support_styles()
{
    $screen = get_current_screen();

    if ( 'molongui_page_molongui-support' === $screen->id )
    {
        if ( $file = apply_filters( '_molongui/support/stylesheet', false ) )
        {
            $inline = apply_filters( 'molongui/support/inline/stylesheet', true );
            if ( $inline )
            {
                echo '<style>' . molongui_get_admin_color() . '</style>';

                $styles = file_get_contents( trailingslashit( WP_PLUGIN_DIR ) . $file );
                echo '<style id="' . MOLONGUI_AUTHORSHIP_NAME . '-support-inline-css" type="text/css" data-file="'.basename( $file ).'">' . $styles . '</style>';
            }
            else
            {
                wp_register_style( MOLONGUI_AUTHORSHIP_NAME, plugins_url( '/' ).$file, array(), MOLONGUI_AUTHORSHIP_VERSION, 'screen' );
                wp_add_inline_style( MOLONGUI_AUTHORSHIP_NAME, molongui_get_admin_color() );
                wp_enqueue_style( MOLONGUI_AUTHORSHIP_NAME );
            }
        }
    }
}
$file     = MOLONGUI_AUTHORSHIP_FOLDER . '/assets/js/common/support.3f45.min.js';
$filepath = trailingslashit( WP_PLUGIN_DIR ) . $file;

if ( file_exists( $filepath ) )
{
    add_filter( '_molongui/support/scripts', function() use ( $file ){ return $file; }, 10 );

    $filesize = filesize( $filepath );
    if ( $filesize > 4096 )
    {
        add_filter( 'molongui/support/inline/scripts', '__return_false', 0 );
        add_action( 'admin_enqueue_scripts', 'authorship_load_support_scripts', 99 );
    }
    elseif ( $filesize )
    {
        add_filter( 'molongui/support/inline/scripts', '__return_true', 0 );
        add_action( 'admin_enqueue_scripts', 'authorship_load_support_scripts_deps', 99 );
        add_action( 'admin_footer-molongui_page_molongui-support', 'authorship_load_support_scripts' );
    }
}
function authorship_load_support_scripts_deps()
{
    $screen = get_current_screen();

    if ( 'molongui_page_molongui-support' !== $screen->id ) return;

    molongui_enqueue_sweetalert();
}
function authorship_load_support_scripts()
{
    if ( $file = apply_filters( '_molongui/support/scripts', false ) )
    {
        $inline = apply_filters( 'molongui/support/inline/scripts', true );
        if ( $inline )
        {
            $scripts = file_get_contents( trailingslashit( WP_PLUGIN_DIR ) . $file );
            echo '<script id="' . MOLONGUI_AUTHORSHIP_NAME . '-support-inline-js" type="text/javascript" data-file="'.basename( $file ).'">' . $scripts . '</script>';
        }
        else
        {
            molongui_enqueue_sweetalert();
            wp_register_script( MOLONGUI_AUTHORSHIP_NAME, plugins_url( '/' ).$file, array( 'jquery' ), MOLONGUI_AUTHORSHIP_VERSION, true );
            wp_enqueue_script( MOLONGUI_AUTHORSHIP_NAME );
        }
    }
}
function authorship_send_mail()
{
    if ( !is_admin() and !isset( $_POST['form'] ) and $_POST['type'] == 'ticket' )
    {
        echo 'error';
        wp_die();
    }
    check_ajax_referer( 'molongui-support-nonce', 'security', true );
    switch( $_POST['type'] )
    {
        case 'ticket':
            $params = array();
            parse_str( $_POST['form'], $params );
            $subject = sprintf( __( "Support Ticket %s: %s", 'molongui-authorship' ), sanitize_text_field( $params['ticket-id'] ), sanitize_text_field( $params['your-subject'] ) );
            $message = esc_html( sanitize_textarea_field( $params['your-message'] ) );
            $headers = array
            (
                'From: '         . $params['your-name'] . ' <' . $params['your-email'] . '>',
                'Reply-To: '     . $params['your-name'] . ' <' . $params['your-email'] . '>',
                'Content-Type: ' . 'text/html; charset=UTF-8',
            );
            $message .= '<br><br>---<br><br>';
            $message .= '<small>'.sprintf( __( "This support ticket was sent using the form on the Support Page (%s)", 'molongui-authorship' ), $_POST['domain'] ).'</small>';
            $message .= '<br><br><hr><br><br>';

            $user = array( 'name' => $params['your-name'], 'mail' => $params['your-email'] );

        break;

        case 'report':
            $current_user = wp_get_current_user();
            $subject = sprintf( __( "Support Report for %s", 'molongui-authorship' ), sanitize_text_field( $_POST['domain'] ) );
            $message = '';
            $headers = array
            (
                'From: ' . $current_user->display_name . ' <' . 'noreply@' . sanitize_text_field( $_POST['domain'] ) . '>',
                'Reply-To: ' . $current_user->display_name . ' <' . $current_user->user_email . '>',
                'Content-Type: ' . 'text/html; charset=UTF-8',
            );

            $user = array( 'name' => $current_user->user_firstname, 'mail' => $current_user->user_email );

        break;
    }
    if ( apply_filters( 'molongui/support/add_debug_data', true ) )
    {
        $message .= authorship_get_mail_appendix();
    }
    $sent = wp_mail( 'support@molongui.com', $subject, $message, $headers );
    if ( $sent and !empty( $user ) ) authorship_autorespond( $user );
    echo( $sent ? 'sent' : 'error' );
    wp_die();
}
add_action( 'wp_ajax_molongui_send_mail', 'authorship_send_mail' );
function authorship_enqueue_tidio()
{
    if ( apply_filters( 'molongui/support/load_tidio', true ) )
    {
        echo '<script src="//code.tidio.co/foioudbu7xqepgvwseufnvhcz6wkp7am.js" async></script>';
    }
}
add_action( 'admin_footer-molongui_page_molongui-support', 'authorship_enqueue_tidio' );

/*!
 * PRIVATE ACTION HOOK.
 *
 * For internal use only. Not intended to be used by plugin or theme developers.
 * Future compatibility NOT guaranteed.
 *
 * Please do not rely on this hook for your custom code to work. As a private hook it is meant to be used only by
 * Molongui. It may be edited, renamed or removed from future releases without prior notice or deprecation phase.
 *
 * If you choose to ignore this notice and use this filter, please note that you do so at on your own risk and knowing
 * that it could cause code failure.
 */
do_action( '_molongui/support/loaded' );