<?php
defined( 'ABSPATH' ) or exit;
add_filter( 'molongui_edit_main_query_only', function( $default, &$query )
{
    if ( !$query->is_author ) return $default;
    $dbt = debug_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS, 11 );
    if ( empty( $dbt ) ) return $default;
    $fn = 'post_grid_posts_loop';
    if ( $key = array_search( $fn, array_column( $dbt, 'function' ) ) ) return false;
    return $default;
}, 10, 2 );