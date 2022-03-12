<?php
defined( 'ABSPATH' ) or exit;
function authorship_set_defaults()
{
    return array
    (
        'author_box' => true,
        'box_post_types_auto'    => "post", // Data stored as a string with comma-separated items. No array!
        'box_post_types_manual'  => '',     // Data stored as a string with comma-separated items. No array!
        'box_hook_priority'      => 11,
        'box_position'           => 'below',
        'hide_if_no_bio'         => false,
        'box_layout_multiauthor' => 'default',
        'box_layout'               => 'slim',
        'box_class'                => '',
        'enable_author_box_styles' => true,
        'show_headline'    => false,
        'headline'         => __( "About the author", 'molongui-authorship' ),
        'box_headline_tag' => 'h3',
        'name_link_to_archive' => true,
        'box_author_name_tag'  => 'h5',
        'show_meta'            => true,
        'at'                   => __( "at", 'molongui-authorship' ),
        'web'                  => __( "Website", 'molongui-authorship' ),
        'more_posts'           => __( "+ posts", 'molongui-authorship' ),
        'bio'                  => __( "Bio", 'molongui-authorship' ),
        'bio_field'            => 'full',
        'show_avatar'             => true,
        'avatar_link_to_archive'  => true,
        'avatar_src'              => 'local',
        'avatar_local_fallback'   => 'gravatar',
        'avatar_default_gravatar' => 'mp',
        'avatar_width'            => 150,
        'avatar_height'           => 150,
        'show_icons'         => true,
        'social_link_target' => '_blank',
        'show_related'       => true,
        'related_orderby'    => 'date',
        'related_order'      => 'desc',
        'related_items'      => 4,
        'related_post_types' => "post", // Data stored as a string with comma-separated items. No array!
        'show_empty_related' => true,
        'no_related_posts'   => __( "This author does not have any more posts.", 'molongui-authorship' ),
        'encode_email' => false,
        'encode_phone' => false,
        'box_schema' => true,
        'enable_cdn_compat' => false,
        'hide_elements' => '',
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
            'about_the_author'       => __( "About the author", 'molongui-authorship' ),
            'related_posts'          => __( "Related Posts", 'molongui-authorship' ),
            'profile_title'          => __( "Author Profile", 'molongui-authorship' ),
            'related_title'          => __( "Related Entries", 'molongui-authorship' ),
        'avatar_style'            => 'none',
        'avatar_border_style'     => 'solid',
        'avatar_border_width'     => '2',
        'avatar_border_color'     => '#bfbfbf',
        'avatar_text_color'       => '#dd9933',
        'avatar_bg_color'         => '#000000',
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

        'guest_authors'               => true,

        'guest_pages'                 => false,
        'guest_archive_include_pages' => false,
        'guest_archive_include_cpts'  => false,
        'guest_archive_permalink'     => '',
        'guest_archive_base'          => 'author',
        'guest_archive_tmpl'          => '',

        'enable_guests_in_search' => false,
        'enable_guests_in_api'    => false,
        'guests_menu_level' => 'top',

        'enable_multi_authors' => true,

        'byline_multiauthor_display'        => 'all',
        'byline_multiauthor_separator'      => '',
        'byline_multiauthor_last_separator' => '',
        'byline_multiauthor_link'           => true,

        'enable_authors_in_api' => false,
        'user_roles' => "administrator,editor,author,contributor", // Data stored as a string with comma-separated items. No array!

        'enable_local_avatars'    => true,
        'enable_user_profiles'    => true,
        'enable_search_by_author' => false,

        'user_archive_enabled'       => true,
        'user_archive_include_pages' => false,
        'user_archive_include_cpts'  => false,
        'user_archive_tmpl'          => '',
        'user_archive_base'          => 'author',
        'user_archive_slug'          => false,
        'post_types' => "post", // Data stored as a string with comma-separated items. No array!
        'social_networks' => "facebook,twitter,youtube,pinterest,tumblr,instagram,soundcloud,spotify,skype,medium,whatsapp", // Data stored as a string with comma-separated items. No array!
        'add_nofollow'    => false,
        'byline_name_link' => true,
        'byline_prefix'    => '',
        'byline_suffix'    => '',
        'keep_config' => true,
        'keep_data'   => true,
        'add_html_meta'      => true,
        'add_opengraph_meta' => true,
        'add_facebook_meta'  => true,
        'add_twitter_meta'   => true,
        'multi_author_meta'  => 'many',

        'enable_byline_template_tags' => false,
        'enable_theme_compat'         => true,
        'enable_plugin_compat'        => true,
        'enable_sc_text_widget'       => false,
        'authors_menu'       => true,
        'guests_menu'        => false,
        'molongui_menu'      => false,
        'posts_submenu'      => true,
        'appearance_submenu' => true,
        'settings_submenu'   => true,
        'author_name_action' => 'filter',
        'enable_cache' => true,
    );
}
add_filter( 'authorship/default_options', 'authorship_set_defaults' );