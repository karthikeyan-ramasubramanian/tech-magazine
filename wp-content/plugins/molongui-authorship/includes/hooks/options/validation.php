<?php
defined( 'ABSPATH' ) or exit;
function authorship_validate_main_options( $settings, $current, $option )
{
    $post_types = explode( ",", $settings['post_types'] );
    $settings['post_types'] = "";
    if ( in_array( 'post', $post_types ) ) $settings['post_types'] .= "post,";
    if ( in_array( 'page', $post_types ) ) $settings['post_types'] .= "page,";
    $settings['post_types'] = rtrim( $settings['post_types'], ',' );

    return $settings;
}
add_filter( 'authorship/validate_main_options', 'authorship_validate_main_options', 10, 3 );
function authorship_validate_box_options( $settings, $current, $option )
{
    $customizer_settings = array
    (
        'box_margin',
        'box_width',
        'box_border',
        'box_border_style',
        'box_border_width',
        'box_border_color',
        'box_background',
        'box_shadow',
        'headline_text_size',
        'headline_text_style',
        'headline_text_case',
        'headline_text_align',
        'headline_text_color',
        'tabs_position',
        'tabs_background',
        'tabs_color',
        'tabs_active_color',
        'tabs_border',
        'tabs_border_style',
        'tabs_border_width',
        'tabs_border_color',
        'tabs_text_color',
        'profile_layout',
        'profile_valign',
        'profile_title',
        'bottom_background_color',
        'bottom_border_style',
        'bottom_border_width',
        'bottom_border_color',
        'avatar_style',
        'avatar_border_style',
        'avatar_border_width',
        'avatar_border_color',
        'avatar_text_color',
        'avatar_bg_color',
        'name_text_size',
        'name_text_style',
        'name_text_case',
        'name_text_align',
        'name_inherited_underline',
        'name_text_color',
        'meta_text_size',
        'meta_text_style',
        'meta_text_case',
        'meta_text_align',
        'meta_text_color',
        'meta_separator',
        'bio_text_size',
        'bio_line_height',
        'bio_text_style',
        'bio_text_align',
        'bio_text_color',
        'icons_style',
        'icons_size',
        'icons_color',
        'related_layout',
        'related_title',
        'related_text_size',
        'related_text_style',
        'related_text_case',
        'related_text_color',
    );
    foreach ( $customizer_settings as $customizer_setting )
    {
        if ( !isset( $settings[$customizer_setting] ) and isset( $current[$customizer_setting] ) )
        {
            $settings[$customizer_setting] = $current[$customizer_setting];
        }
    }

    return $settings;
}
add_filter( 'authorship/validate_box_options', 'authorship_validate_box_options', 10, 3 );
function authorship_validate_byline_options( $settings, $current, $option )
{
    if ( isset( $settings['byline_multiauthor_separator']      ) ) $settings['byline_multiauthor_separator']      = str_replace( array( "*", "?", "/" ), "", trim( $settings['byline_multiauthor_separator'] ) );
    if ( isset( $settings['byline_multiauthor_last_separator'] ) ) $settings['byline_multiauthor_last_separator'] = str_replace( array( "*", "?", "/" ), "", trim( $settings['byline_multiauthor_last_separator'] ) );

    return $settings;
}
add_filter( 'authorship/validate_byline_options', 'authorship_validate_byline_options', 10, 3 );
add_action( 'authorship/options', 'authorship_add_defaults' );
function authorship_validate_refresh_settings( $value, $old_value, $option )
{
    $refresh_premium_settings = array
    (
        'profile_layout' => array
        (
            'accepted' => array( 'layout-1' ),
            'default'  => 'layout-1',
        ),
        'related_layout' => array
        (
            'accepted' => array( 'layout-1', 'layout-2' ),
            'default'  => 'layout-1',
        ),
        'avatar_default_gravatar' => array
        (
            'accepted' => array( 'mp', 'identicon', 'monsterid', 'wavatar', 'retro', 'robohash', 'blank' ),
            'default'  => 'mp',
        ),
        'bio_field' => array
        (
            'accepted' => array( 'full' ),
            'default'  => 'full',
        ),
    );
    foreach ( $refresh_premium_settings as $setting => $params )
    {
        if ( !isset( $value[$setting] ) )
        {
            $value[$setting] = $params['default'];
        }
        elseif ( !in_array( $value[$setting], $params['accepted'] ) )
        {
            if ( !empty( $old_value[$setting] ) and in_array( $old_value[$setting], $params['accepted'] ) ) $value[$setting] = $old_value[$setting];
            else $value[$setting] = $params['default'];
        }
    }

    return $value;
}
add_filter( "pre_update_option_molongui_authorship_box", 'authorship_validate_refresh_settings', 10, 3 );
function authorship_validate_customize_changeset( $data, $filter_context )
{
    if ( 'publish' !== $filter_context['status'] ) return $data;
    $refresh_premium_settings = array
    (
        'profile_layout' => array
        (
            'accepted' => array( 'layout-1' ),
            'default'  => 'layout-1',
        ),
        'related_layout' => array
        (
            'accepted' => array( 'layout-1', 'layout-2' ),
            'default'  => 'layout-1',
        ),
        'avatar_default_gravatar' => array
        (
            'accepted' => array( 'mp', 'identicon', 'monsterid', 'wavatar', 'retro', 'robohash', 'blank' ),
            'default'  => 'mp',
        ),
        'bio_field' => array
        (
            'accepted' => array( 'full' ),
            'default'  => 'full',
        ),
    );
    $current = (array) get_option( MOLONGUI_AUTHORSHIP_BOX_SETTINGS );

    foreach ( $data as $changed_option => $item )
    {
        $option = strtr( $changed_option, array( 'molongui_authorship_box[' => '', ']' => '' ) );
        if ( !in_array( $option, array_keys( $refresh_premium_settings ) ) ) continue;
        if ( !in_array( $item['value'], $refresh_premium_settings[$option]['accepted'] ) )
        {
            if ( !empty( $current[$option] ) and in_array( $current[$option], $refresh_premium_settings[$option]['accepted'] ) ) $data[$changed_option]['value'] = $current[$option];
            else $data[$changed_option]['value'] = $refresh_premium_settings[$option]['default'];
        }
    }

    return $data;
}
add_filter( 'customize_changeset_save_data', 'authorship_validate_customize_changeset', 10, 2 );