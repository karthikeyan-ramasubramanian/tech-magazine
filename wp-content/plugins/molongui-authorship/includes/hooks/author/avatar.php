<?php
defined( 'ABSPATH' ) or exit;
function authorship_add_image_sizes()
{
    if ( apply_filters( 'authorship/add_image_size/skip', false ) ) return;
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'authorship-box-avatar', 150, 150, true );
    add_image_size( 'authorship-box-related', 70, 70, true );
    $settings = molongui_get_plugin_settings( MOLONGUI_AUTHORSHIP_PREFIX, array( 'box' ) );
    if ( ( !empty( $settings['avatar_width'] ) and $settings['avatar_width'] != 150 ) or ( !empty( $settings['avatar_height'] ) and $settings['avatar_height'] != 150 ) )
    {
        add_image_size( 'authorship-custom-avatar', $settings['avatar_width'], $settings['avatar_height'], true );
    }
    do_action( 'authorship/add_image_size' );
}
add_action( 'after_setup_theme', 'authorship_add_image_sizes' );
function authorship_filter_avatar( $args, $id_or_email )
{
    if ( !authorship_is_feature_enabled( 'avatar' ) ) return $args;
    $dbt = debug_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS, 10 );
    if ( empty( $dbt ) ) return $args;

    /*!
     * PRIVATE FILTER.
     *
     * For internal use only. Not intended to be used by plugin or theme developers.
     * Future compatibility NOT guaranteed.
     *
     * Please do not rely on this filter for your custom code to work. As a private filter it is meant to be
     * used only by Molongui. It may be edited, renamed or removed from future releases without prior notice
     * or deprecation phase.
     *
     * If you choose to ignore this notice and use this filter, please note that you do so at on your own risk
     * and knowing that it could cause code failure.
     */
    if ( apply_filters( 'authorship/get_avatar_data/skip', false, $args, $dbt ) ) return $args;
    $email        = false;
    $author       = new stdClass();
    $local_avatar = false;
    if ( is_object( $id_or_email ) and isset( $id_or_email->comment_ID ) )
    {
        $id_or_email = get_comment( $id_or_email );
    }
    if ( is_numeric( $id_or_email ) )
    {
        $author->user = get_user_by( 'id', absint( $id_or_email ) );
        if ( !isset( $author->user->user_email ) ) return $args;

        $email = $author->user->user_email;
        if ( isset( $author->user->guest_id ) ) $author->guest_id = $author->user->guest_id;
    }
    elseif ( is_string( $id_or_email ) )
    {
        if ( !$id_or_email )
        {
            if ( is_guest_author() )
            {
                global $wp_query;
                $author->guest_id = $wp_query->guest_author_id;
            }
            else
            {
                /*!
                 * PRIVATE FILTER.
                 *
                 * For internal use only. Not intended to be used by plugin or theme developers.
                 * Future compatibility NOT guaranteed.
                 *
                 * Please do not rely on this filter for your custom code to work. As a private filter it is meant to be
                 * used only by Molongui. It may be edited, renamed or removed from future releases without prior notice
                 * or deprecation phase.
                 *
                 * If you choose to ignore this notice and use this filter, please note that you do so at on your own risk
                 * and knowing that it could cause code failure.
                 */
                $post_id = apply_filters( '_authorship/get_avatar_data/filter/post_id', null );

                $authors = get_post_authors( $post_id, 'id' );
                if ( $authors ) $author->guest_id = $authors[0];
            }
        }
        elseif ( strpos( $id_or_email, '@md5.gravatar.com' ) )
        {
            return $args;
        }
        else
        {
            $email = $id_or_email;
        }
    }
    elseif ( $id_or_email instanceof WP_User )
    {
        $author->user = $id_or_email;
        $email        = $author->user->user_email;
    }
    elseif ( $id_or_email instanceof WP_Post )
    {
        $author->user = get_user_by( 'id', (int) $id_or_email->post_author );
        $email        = $author->user->user_email;
    }
    elseif ( $id_or_email instanceof WP_Comment )
    {
        if ( !empty( $id_or_email->comment_author_email ) )
        {
            $email = $id_or_email->comment_author_email;
        }
        elseif ( !empty( $id_or_email->user_id ) )
        {
            add_filter( '_authorship/filter/get_user_by', '__return_list_false' );
            $author->user = get_user_by( 'id', (int) $id_or_email->user_id );
            $email        = $author->user->user_email;
            remove_filter( '_authorship/filter/get_user_by', '__return_list_false' );
        }
    }
    if ( !$email and ( !empty( $author->guest_id ) or !empty( $author->user->guest_id ) ) )
    {
        $author->type  = 'guest';
        $author->guest = get_post( !empty( $author->guest_id ) ? $author->guest_id : $author->user->guest_id );
    }
    elseif ( !$email )
    {
        return $args;
    }
    elseif ( $author->user = molongui_get_author_by( 'user_email', $email, 'user' ) )
    {
        $author->type = 'user';
    }
    elseif ( $author->guest = molongui_get_author_by( '_molongui_guest_author_mail', $email, 'guest' ) )
    {
        $author->type = 'guest';
    }

    /*!
     * PRIVATE FILTER.
     *
     * For internal use only. Not intended to be used by plugin or theme developers.
     * Future compatibility NOT guaranteed.
     *
     * Please do not rely on this filter for your custom code to work. As a private filter it is meant to be
     * used only by Molongui. It may be edited, renamed or removed from future releases without prior notice
     * or deprecation phase.
     *
     * If you choose to ignore this notice and use this filter, please note that you do so at on your own risk
     * and knowing that it could cause code failure.
     */
    $author = apply_filters( '_authorship/get_avatar_data/filter/author', $author, $id_or_email, $dbt );
    if ( empty( $author->type ) ) return $args;
    switch ( $author->type )
    {
        case 'user':

            $user_local_avatar = get_user_meta( $author->user->ID, 'molongui_author_image_url', true );
            $local_avatar      = $user_local_avatar ? $user_local_avatar : '';

        break;

        case 'guest':

            $local_avatar = has_post_thumbnail( $author->guest->ID ) ? get_the_post_thumbnail_url( $author->guest->ID, $args['size'] ) : '';
            add_filter( 'authorship/get_avatar_data/skip', '__return_true' );
            if ( !$local_avatar ) $local_avatar = get_avatar_url( $email, $args );
            remove_filter( 'authorship/get_avatar_data/skip', '__return_true' );

        break;
    }
    if ( $local_avatar )
    {
        $args['found_avatar'] = true;
        $args['url'] = apply_filters( 'authorship/get_avatar_data/filter/url', $local_avatar, $id_or_email, $args );
    }
    return $args;
}
add_filter( 'pre_get_avatar_data', 'authorship_filter_avatar', 999, 2 );