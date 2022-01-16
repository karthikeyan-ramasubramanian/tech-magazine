<?php
defined( 'ABSPATH' ) or exit;
if ( !authorship_is_feature_enabled( 'guest' ) ) return;
function authorship_guest_register_post_type()
{
    $settings = get_option( MOLONGUI_AUTHORSHIP_MAIN_SETTINGS );
    $labels = array
    (
        'name'					=> _x( "Guest Authors", 'post type general name', 'molongui-authorship' ),
        'singular_name'			=> _x( "Guest Author", 'post type singular name', 'molongui-authorship' ),
        'menu_name'				=> __( "Guest Authors", 'molongui-authorship' ),
        'name_admin_bar'		=> __( "Guest Author", 'molongui-authorship' ),
        'all_items'				=> ( ( !empty( $settings['guest_menu_item_level'] ) and $settings['guest_menu_item_level'] != 'top' ) ? __( "Guest Authors", 'molongui-authorship' ) : __( "All Guest Authors", 'molongui-authorship' ) ),
        'add_new'				=> _x( "Add New", MOLONGUI_AUTHORSHIP_CPT, 'molongui-authorship' ),
        'add_new_item'			=> __( "Add New Guest Author", 'molongui-authorship' ),
        'edit_item'				=> __( "Edit Guest Author", 'molongui-authorship' ),
        'new_item'				=> __( "New Guest Author", 'molongui-authorship' ),
        'view_item'				=> __( "View Guest Author", 'molongui-authorship' ),
        'search_items'			=> __( "Search Guest Authors", 'molongui-authorship' ),
        'not_found'				=> __( "No Guest Authors Found", 'molongui-authorship' ),
        'not_found_in_trash'	=> __( "No Guest Authors Found in the Trash", 'molongui-authorship' ),
        'parent_item_colon'		=> '',
        'featured_image'        => __( "Profile Image", 'molongui-authorship' ),
        'set_featured_image'    => __( "Set Profile Image", 'molongui-authorship' ),
        'remove_featured_image' => __( "Remove Profile Image", 'molongui-authorship' ),
        'use_featured_image'    => __( "Use as Profile Image", 'molongui-authorship' ),
    );
    $args = array
    (
        'labels'				=> $labels,
        'description'			=> __( "Guest author custom post type by Molongui", 'molongui-authorship' ),
        'public'				=> false,
        'exclude_from_search'	=> true,
        'publicly_queryable'	=> false,
        'show_ui'				=> true,
        'show_in_menu'          => ( ( !empty( $settings['guest_menu_item_level'] ) and $settings['guest_menu_item_level'] != 'top' ) ? $settings['guest_menu_item_level'] : true ),
        'show_in_nav_menus'		=> true,
        'show_in_admin_bar '	=> true,
        'menu_position'			=> 5,
        'menu_icon'				=> 'dashicons-id',
        'supports'		 		=> authorship_is_feature_enabled( 'avatar' ) ? array( 'thumbnail' ) : array( '' ),
        'register_meta_box_cb'	=> '',
        'has_archive'			=> false,//true,
        'rewrite'				=> false,//array( 'slug' => 'guest-author' ),
        'can_export'            => false,
        'capability_type'       => 'post',  // https://developer.wordpress.org/reference/functions/register_post_type/#capability_type
        'map_meta_cap'          => true,    // https://developer.wordpress.org/reference/functions/register_post_type/#map_meta_cap
    );
    register_post_type( MOLONGUI_AUTHORSHIP_CPT, $args );
}
add_action( 'init', 'authorship_guest_register_post_type' );
function authorship_guest_post_updated_messages( $msg )
{
    $msg[MOLONGUI_AUTHORSHIP_CPT] = array
    (
        0  => '',                                                   // Unused. Messages start at index 1.
        1  => __( "Guest author updated.", 'molongui-authorship' ),
        2  => "Custom field updated.",                              // Probably better do not touch
        3  => "Custom field deleted.",                              // Probably better do not touch
        4  => __( "Guest author updated.", 'molongui-authorship' ),
        5  => __( "Guest author restored to revision", 'molongui-authorship' ),
        6  => __( "Guest author published.", 'molongui-authorship' ),
        7  => __( "Guest author saved.", 'molongui-authorship' ),
        8  => __( "Guest author submitted.", 'molongui-authorship' ),
        9  => __( "Guest author scheduled.", 'molongui-authorship' ),
        10 => __( "Guest author draft updated.", 'molongui-authorship' ),
    );

    return $msg;
}
add_filter( 'post_updated_messages', 'authorship_guest_post_updated_messages' );
function authorship_guest_remove_menu_item()
{
    $settings = get_option( MOLONGUI_AUTHORSHIP_MAIN_SETTINGS );

    $slug = 'edit.php?post_type='.MOLONGUI_AUTHORSHIP_CPT;

    if ( !current_user_can( 'edit_others_pages' ) and !current_user_can( 'edit_others_posts' ) )
    {
        if ( isset( $settings['guest_menu_item_level'] ) and $settings['guest_menu_item_level'] != 'top' )
        {
            if ( $settings['guest_menu_item_level'] == 'users.php' ) $settings['guest_menu_item_level'] = 'profile.php';

            remove_submenu_page( $settings['guest_menu_item_level'], $slug );
        }
        else
        {
            remove_menu_page( $slug );
        }
    }
}
add_action( 'admin_menu', 'authorship_guest_remove_menu_item' );