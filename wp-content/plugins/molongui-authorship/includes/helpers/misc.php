<?php
defined( 'ABSPATH' ) or exit;
function authorship_is_feature_enabled( $feature = null )
{
    if ( empty( $feature ) ) return false;
    $settings = molongui_get_plugin_settings( MOLONGUI_AUTHORSHIP_PREFIX, array( 'main', 'box', 'byline', 'seo', 'compat' ) );

    $features = array
    (
        'multi'         => 'enable_multi_authors',
        'guest'         => 'enable_guest_authors',
        'box'           => 'enable_author_boxes',
        'avatar'        => 'enable_local_avatars',
        'user_profile'  => 'enable_user_profiles',
        'author_search' => 'enable_search_by_author',
        'guest_search'  => 'enable_guests_in_search',
        'cache'         => 'enable_cache',
        'box_styles'    => 'enable_author_box_styles',
        'microdata'     => 'enable_author_box_schema',
        'byline_tags'   => 'enable_byline_template_tags',
        'theme_compat'  => 'enable_theme_compat',
        'plugin_compat' => 'enable_plugin_compat',
        'author_in_api' => 'enable_authors_in_api',
        'guest_in_api'  => 'enable_guests_in_api',
    );

    return !empty( $settings[$features[$feature]] );
}
function authorship_byline_takeover()
{
    return ( authorship_is_feature_enabled( 'guest' ) or authorship_is_feature_enabled( 'multi' ) );
}
function authorship_get_social_networks( $query = 'all', $networks = array() )
{
    $sn = array();
    if ( empty( $networks ) ) $networks = include MOLONGUI_AUTHORSHIP_DIR . 'config/social.php';
    if ( empty( $networks ) ) return $sn;
    if ( 'all' !== $query )
    {
        $options = get_option( MOLONGUI_AUTHORSHIP_MAIN_SETTINGS );
        if ( empty( $options ) or !isset( $options['social_networks'] ) ) return $sn;
        $config = explode( ",", $options['social_networks'] );
    }
    else
    {
        $config = array();
    }
    $mod = ( $query == 'all' ? 'true or ' : ( $query == 'disabled' ? '!' : '' ) );
    foreach ( $networks as $id => $network )
    {
        if ( $mod.in_array( $id, (array)$config ) )
        {
            $sn[$id]             = $network;
            $sn[$id]['id']       = $id;
            $sn[$id]['icon']     = 'm-a-icon-'.$id;
            $sn[$id]['label']    = $network['name'];
            $sn[$id]['disabled'] = authorship_has_pro() ? false : $network['premium'];
        }
    }
    $order = apply_filters( 'authorship/social_networks/order', array(), array_keys( $sn ) );
    $order = array_intersect( array_unique( $order ), array_keys( $networks ) );
    if ( empty( $order ) )
    {
        $sn = molongui_sort_array( $sn, 'ASC', 'name' );
    }
    else
    {
        foreach ( $order as $o )
        {
            $tmp[$sn[$o]['id']] = $sn[$o];
        }
        $sn = $tmp;
    }
    return $sn;
}
function authorship_get_customizer()
{
    $customizer_panel = MOLONGUI_AUTHORSHIP_NAME;
    $latest_post_url  = wp_get_recent_posts( array( 'numberposts' => 1, 'meta_key' => '_molongui_author_box_display', 'meta_value' =>'show', ) );
    if ( empty( $latest_post_url ) )
    {
        $latest_post_url = wp_get_recent_posts( array( 'numberposts' => 1 ) );
    }
    if ( empty( $latest_post_url ) ) return admin_url( 'customize.php?autofocus[panel]='.$customizer_panel );
    return admin_url( 'customize.php?autofocus[panel]='.$customizer_panel.'&url='.get_permalink( $latest_post_url[0]['ID'] ) );
}
function authorship_clear_cache( $key = 'all' )
{
    $known = array( 'posts', 'users', 'guests' );
    if ( 'all' === $key )
    {
        foreach ( $known as $key )
        {
            molongui_cache_clear( $key );
        }
    }
    if ( !in_array( $key, $known ) ) return;
    molongui_cache_clear( $key );
}