<?php
defined( 'ABSPATH' ) or exit;
function authorship_get_settings()
{
    $settings = array();
    $keys     = authorship_get_settings_keys();
    foreach ( $keys as $key ) $settings = array_merge( $settings, (array) get_option( $key, array() ) );

    if ( empty( $settings ) ) $settings = authorship_get_defaults();

    return $settings;
}
function authorship_get_settings_keys()
{
    return array
    (
        MOLONGUI_AUTHORSHIP_MAIN_SETTINGS,
        MOLONGUI_AUTHORSHIP_BOX_SETTINGS,
        MOLONGUI_AUTHORSHIP_BYLINE_SETTINGS,
        MOLONGUI_AUTHORSHIP_ARCHIVES_SETTINGS,
        MOLONGUI_AUTHORSHIP_SEO_SETTINGS,
        MOLONGUI_AUTHORSHIP_COMPAT_SETTINGS,
    );
}
function authorship_get_defaults()
{
    return array
    (
        'main' => array
        (
            'enable_multi_authors'    => true,
            'enable_guest_authors'    => true,
            'enable_author_boxes'     => true,
            'enable_local_avatars'    => true,
            'enable_user_profiles'    => true,
            'enable_search_by_author' => false,
            'enable_guests_in_search' => false,
            'post_types' => "post", // Data stored as a string with comma-separated items. No array!
            'user_roles' => "administrator,editor,author,contributor", // Data stored as a string with comma-separated items. No array!
            'social_networks' => "facebook,twitter,youtube,pinterest,tumblr,instagram,soundcloud,spotify,skype,medium,whatsapp", // Data stored as a string with comma-separated items. No array!
            'encode_email' => false,
            'encode_phone' => false,
            'author_name_action'    => 'filter',
            'guest_menu_item_level' => 'top',
            'enable_cache' => true,
            'keep_config' => true,
            'keep_data'   => true,
        ),
        'box' => array
        (
            'box_class'                => '',
            'enable_author_box_styles' => true,
            'display'        => 'posts',
            'hide_if_no_bio' => false,
            'order'          => 11,
            'position' => 'below',
            'layout'                 => 'slim',
            'multiauthor_box_layout' => 'default',
            'about_the_author'       => __( "About the author", 'molongui-authorship' ),
            'related_posts'          => __( "Related Posts", 'molongui-authorship' ),
            'profile_title'          => __( "Author Profile", 'molongui-authorship' ),
            'related_title'          => __( "Related Entries", 'molongui-authorship' ),
            'show_headline' => false,
            'headline'      => __( "About the author", 'molongui-authorship' ),
            'name_link_to_archive' => true,
            'show_meta'            => true,
            'bio_field'            => 'full',
            'at'                   => __( "at", 'molongui-authorship' ),
            'web'                  => __( "Website", 'molongui-authorship' ),
            'more_posts'           => __( "+ posts", 'molongui-authorship' ),
            'bio'                  => __( "Bio", 'molongui-authorship' ),
            'show_icons'         => true,
            'social_link_target' => '_blank',
            'show_related'       => true,
            'related_orderby'    => 'date',
            'related_order'      => 'desc',
            'related_items'      => 4,
            'related_post_types' => "post", // Data stored as a string with comma-separated items. No array!
            'show_empty_related' => true,
            'no_related_posts'   => __( "This author does not have any more posts.", 'molongui-authorship' ),
            'box_margin'       => '20',
            'box_width'        => '100',
            'box_border'       => 'all',
            'box_border_style' => 'solid',
            'box_border_width' => '3',
            'box_border_color' => '#adadad',
            'box_background'   => '#efefef',
            'box_shadow'       => 'right',
            'headline_text_size'  => '18',
            'headline_text_style' => '',
            'headline_text_case'  => 'none',
            'headline_text_align' => 'left',
            'headline_text_color' => 'inherit',
            'tabs_position'     => 'top-full',
            'tabs_background'   => 'transparent',
            'tabs_color'        => '#f4f4f4',
            'tabs_active_color' => '#efefef',
            'tabs_border'       => 'top',
            'tabs_border_style' => 'solid',
            'tabs_border_width' => '4',
            'tabs_border_color' => 'orange',
            'tabs_text_color'   => 'inherit',
            'profile_layout'          => 'layout-1',
            'profile_valign'          => 'center',
            'bottom_background_color' => '#e0e0e0',
            'bottom_border_style'     => 'solid',
            'bottom_border_width'     => '1',
            'bottom_border_color'     => '#b6b6b6',
            'show_avatar'             => true,
            'avatar_src'              => 'local',
            'avatar_local_fallback'   => 'gravatar',
            'avatar_default_gravatar' => 'mp',
            'avatar_width'            => 150,
            'avatar_height'           => 150,
            'avatar_style'            => 'none',
            'avatar_border_style'     => 'solid',
            'avatar_border_width'     => '2',
            'avatar_border_color'     => '#bfbfbf',
            'avatar_text_color'       => '#dd9933',
            'avatar_bg_color'         => '#000000',
            'avatar_link_to_archive'  => true,
            'name_text_size'           => '22',
            'name_text_style'          => '',
            'name_text_case'           => 'none',
            'name_text_color'          => 'inherit',
            'name_text_align'          => 'left',
            'name_inherited_underline' => 'keep',
            'meta_text_size'  => '12',
            'meta_text_style' => '',
            'meta_text_case'  => 'none',
            'meta_text_color' => 'inherit',
            'meta_text_align' => 'left',
            'meta_separator'  => '|',
            'bio_text_size'   => '14',
            'bio_line_height' => '1',
            'bio_text_style'  => '',
            'bio_text_case'   => 'normal',
            'bio_text_align'  => 'justify',
            'bio_text_color'  => 'inherit',
            'icons_style' => 'default',
            'icons_size'  => '20',
            'icons_color' => '#999999',
            'related_layout' => 'layout-1',
            'related_text_size'  => '14',
            'related_text_style' => '',
            'related_text_case'  => 'none',
            'related_text_color' => 'inherit',
        ),
        'byline' => array
        (
            'byline_multiauthor_display'        => 'all',
            'byline_multiauthor_separator'      => '',
            'byline_multiauthor_last_separator' => '',
            'byline_name_link'                  => true,
            'byline_multiauthor_link'           => true,
            'byline_prefix'                     => '',
            'byline_suffix'                     => '',
            'enable_byline_template_tags'       => false,
        ),
        'archives' => array
        (
            'guest_archive_enabled'       => false,
            'guest_archive_include_pages' => false,
            'guest_archive_include_cpts'  => false,
            'guest_archive_permalink'     => '',
            'guest_archive_base'          => 'author',
            'guest_archive_tmpl'          => '',
            'user_archive_enabled'        => true,
            'user_archive_include_pages'  => false,
            'user_archive_include_cpts'   => false,
            'user_archive_tmpl'           => '',
            'user_archive_base'           => 'author',
            'user_archive_slug'           => false,
        ),
        'seo' => array
        (
            'add_html_meta'            => true,
            'add_opengraph_meta'       => true,
            'add_facebook_meta'        => true,
            'add_twitter_meta'         => true,
            'multi_author_meta'        => 'many',
            'enable_author_box_schema' => true,
            'add_nofollow'             => false,
            'box_headline_tag'         => 'h3',
            'box_author_name_tag'      => 'h5',
        ),
        'compat' => array
        (
            'enable_theme_compat'   => true,
            'enable_plugin_compat'  => true,
            'enable_cdn_compat'     => false,
            'enable_guests_in_api'  => false,
            'hide_elements'         => '',
            'enable_sc_text_widget' => false,
        ),
    );
}
function authorship_add_defaults()
{
    $keys     = authorship_get_settings_keys();
    $defaults = authorship_get_defaults();

    foreach ( $keys as $key )
    {
        $saved = (array) get_option( $key, array() );
        $tab   = str_replace( MOLONGUI_AUTHORSHIP_PREFIX.'_', '', $key );

        if ( isset( $defaults[$tab] ) )
        {
            update_option( $key, array_merge( $defaults[$tab], $saved ) );
        }
    }
}
function authorship_get_post_types()
{
    $options    = array();
    $post_types = molongui_get_post_types( 'all', 'objects', false );

    foreach( $post_types as $post_type )
    {
        $options[] = array
        (
            'id'       => $post_type->name,
            'label'    => $post_type->labels->name,
            'disabled' => apply_filters( '_authorship/options/post_type/disabled', in_array( $post_type->name, array( 'post', 'page' ) ) ? false : true, $post_type ),
        );
    }

    return $options;
}