<?php
defined( 'ABSPATH' ) or exit;
if ( !authorship_is_feature_enabled( 'multi' ) ) return;
function authorship_filter_user_posts( $wp_query )
{
    if ( isset( $wp_query->is_guest_author )
         or ( molongui_is_request( 'admin' ) and !$wp_query->is_author() )
         or ( !$wp_query->is_main_query() and apply_filters_ref_array( 'molongui_edit_main_query_only', array( true, &$wp_query ) ) )
    ) return;
    if ( $wp_query->is_author() )
    {
        $meta_query = $wp_query->get( 'meta_query' );
        if ( !is_array( $meta_query ) and empty( $meta_query ) ) $meta_query = array();
        if ( molongui_is_request( 'admin' ) and $wp_query->is_author() )
        {
            $author_id = $wp_query->query_vars['author'];
        }
        else
        {
            $author = get_users( array( 'nicename' => $wp_query->query_vars['author_name'] ) );
            if ( !$author ) return;

            $author_id = $author[0]->ID;
        }
        $meta_query[] = array
        (
            'relation' => 'OR',
            array
            (
                'key'     => '_molongui_author',
                'compare' => 'NOT EXISTS',
            ),
            array
            (
                'relation' => 'AND',
                array
                (
                    'key'     => '_molongui_author',
                    'compare' => 'EXISTS',
                ),
                array
                (
                    'key'     => '_molongui_author',
                    'value'   => 'user-'.$author_id,
                    'compare' => '==',
                ),
            ),
        );
        $wp_query->set( 'meta_query', $meta_query );
    }
}
add_action( 'pre_get_posts', 'authorship_filter_user_posts', 999 );
function authorship_remove_author_from_where_clause( $where, $wp_query )
{
    if ( isset( $wp_query->is_guest_author )
        or ( molongui_is_request( 'admin' ) and !$wp_query->is_author() )
        or ( !$wp_query->is_main_query() and apply_filters_ref_array( 'molongui_edit_main_query_only', array( true, &$wp_query ) ) )
    ) return $where;
    if ( $wp_query->is_author() )
    {
        if ( !empty( $wp_query->query_vars['author'] ) )
        {
            $alias = 'molongui_meta';

            global $wpdb;
            $where = str_replace( ' AND '.$wpdb->posts.'.post_author IN ('.$wp_query->query_vars['author'].')', '', $where );
            $where = str_replace( ' AND ('.$wpdb->posts.'.post_author = '.$wp_query->query_vars['author'].')' , '', $where );
            $where = str_replace( $wpdb->postmeta.'.post_id IS NULL ', '( '.$wpdb->postmeta.'.post_id IS NULL AND '.$wpdb->posts.'.post_author = '.$wp_query->query_vars['author'].' )', $where );
        }
    }
    return $where;
}
add_filter( 'posts_where', 'authorship_remove_author_from_where_clause', 10, 2 );
function authorship_add_user_posts_join( $join, $query )
{
    if ( is_admin() or !is_author() or is_guest_author() or !$query->is_main_query() ) return $join;
    $alias = 'molongui_meta';
    global $wpdb;
    $join .= ' LEFT JOIN '.$wpdb->postmeta.' AS '.$alias.'_1 ON '.$wpdb->posts.'.ID = '.$alias.'_1.post_id ';
    $join .= ' LEFT JOIN '.$wpdb->postmeta.' AS '.$alias.'_2 ON '.$wpdb->posts.'.ID = '.$alias.'_2.post_id ';

    return $join;
}
function authorship_modify_alias( $alias, $clause, $parent_query, $meta_query )
{
    if ( is_admin() or !is_author() or is_guest_author() or !is_main_query() or apply_filters( 'authorship/skip/query/alias', false ) ) return $alias;

    if ( '_molongui_author' === $clause['key'] and 'NOT EXISTS' === $clause['compare'] )
    {
        return 'molongui_meta_1';
    }
    elseif ( '_molongui_author' === $clause['key'] and 'NOT EXISTS' !== $clause['compare'] )
    {
        return 'molongui_meta_2';
    }

    return $alias;
}
//add_filter( 'meta_query_find_compatible_table_alias', 'authorship_modify_alias', 10, 4 );