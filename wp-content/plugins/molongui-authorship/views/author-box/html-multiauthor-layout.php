<?php
?>

<!-- MOLONGUI AUTHORSHIP PLUGIN <?php echo MOLONGUI_AUTHORSHIP_VERSION; ?> -->
<!-- <?php echo MOLONGUI_AUTHORSHIP_WEB; ?> -->
<div class="molongui-clearfix"></div>
<div id="mab-<?php echo $random_id; ?>"
     class="m-a-box <?php echo ( !empty( $options['author_box_custom_css_class'] ) ? $options['author_box_custom_css_class'] : '' ); ?>"
    <?php echo ( apply_filters( '_authorship/doing_shortcode/author_box', false ) ? 'data-is-shortcode="yes"' : '' ); ?>
     data-plugin-release="<?php echo MOLONGUI_AUTHORSHIP_VERSION; ?>"
     data-plugin-version="<?php echo authorship_has_pro() ? 'pro' : 'lite'; ?>"
     data-box-layout="<?php echo ( isset( $options['author_box_layout'] ) ? $options['author_box_layout'] : '' ); ?>"
     data-box-position="<?php echo ( isset( $options['box_position'] ) ? $options['box_position'] : '' ); ?>"
     data-multiauthor="<?php echo ( $is_multiauthor ? 'true' : 'false' ); ?>"
     data-authors-count="<?php echo count( $authors ); ?>">

	<?php
	if ( $show_headline and !empty( $options['show_headline'] ) and $options['show_headline'] == 1  )
	{
		include( MOLONGUI_AUTHORSHIP_DIR . 'views/author-box/parts/html-header.php' );
	}
	if ( $show_tabs = ( !empty( $options['author_box_layout'] ) and $options['author_box_layout'] == 'tabbed' ) )
	{
		echo '<div class="m-a-box-tabs">';
		include( MOLONGUI_AUTHORSHIP_DIR . 'views/author-box/parts/html-tabs.php' );
	}

	?>

    <div class="m-a-box-container">

        <div class="m-a-box-tab m-a-box-content m-a-box-profile"
             data-profile-layout="<?php echo $options['author_box_profile_layout']; ?>">

            <?php foreach ( $authors as $author ) : ?>

                <?php if ( isset( $author['hide'] ) and $author['hide'] ) continue; ?>

                <div class="m-a-box-profile-multiauthor <?php echo ( !empty( $author['archived'] ) ? 'm-a-archived-author' : '' ); ?>" data-author-id="<?php echo $author['id']; ?>" data-author-type="<?php echo $author['type']; ?>" data-author-ref="<?php echo $author['type'].'-'.$author['id']; ?>"
                     <?php echo ( $add_microdata ? 'itemscope itemid="'.$author['archive'].'" itemtype="https://schema.org/Person"' : '' ); ?>
                >
                    <?php

                    ob_start();
                    include MOLONGUI_AUTHORSHIP_DIR . 'views/author-box/profile/html-layout-1.php';
                    $profile_layout = ob_get_clean();
                    echo apply_filters( 'authorship/author_box/profile_layout', $profile_layout, $options, $author, $random_id );

                    ?>
                </div>

            <?php endforeach; ?>

        </div><!-- End of .m-a-box-profile -->

        <?php if ( $options['author_box_layout'] != 'slim' and !empty( $options['author_box_related_show'] ) ) : ?>

            <?php $author['posts'] = get_coauthored_posts( $post_authors, false, array(), 'selected' ); ?>

            <div class="m-a-box-tab m-a-box-content m-a-box-related" data-related-layout="<?php echo $options['author_box_related_layout']; ?>">

                <div class="m-a-box-content-top">

			        <?php if ( $options['author_box_layout'] == 'stacked' ) include MOLONGUI_AUTHORSHIP_DIR . 'views/author-box/parts/html-related-title.php'; ?>

                </div><!-- End of .m-a-box-content-top -->

                <div class="m-a-box-content-middle">

                    <!-- Related entries -->
                    <div class="m-a-box-item m-a-box-related-entries" <?php echo ( $options['author_box_layout'] == 'slim' ? 'style="display: none;"' : '' ); ?>>

				        <?php
				        $related_text_style = '';
				        if ( !empty( $options['author_box_related_font_style'] ) )
				        {
					        foreach ( explode(',', $options['author_box_related_font_style'] ) as $style ) $related_text_style .= ' molongui-text-style-'.$style;
				        }
				        ?>
                        <ul>
                            <?php
                            if ( !empty( $author['posts'] ) )
                            {
                                if ( file_exists( $file = MOLONGUI_AUTHORSHIP_DIR . 'views/author-box/related/html-'.$options['author_box_related_layout'].'.php' ) )
                                {
                                    ob_start();
                                    include $file;
                                    $related_layout = ob_get_clean();
                                }
                                else
                                {
                                    $related_layout = '';
                                }
                                echo apply_filters( 'authorship/author_box/related_layout', $related_layout, $options, $author );
                            }
                            else
                            {
                                echo ' <span class="m-a-box-string-no-related-posts">'. ( $options['author_box_related_none'] ? $options['author_box_related_none'] : __( "This author does not have any more posts.", 'molongui-authorship' ) ).'</span>';
                            }
                            ?>
                        </ul>

                    </div><!-- End of .m-a-box-related-entries -->

                </div><!-- End of .m-a-box-content-middle -->

                <div class="m-a-box-content-bottom"></div><!-- End of .m-a-box-content-bottom -->

            </div><!-- End of .m-a-box-related -->

        <?php endif; ?>

    </div><!-- End of .m-a-box-container -->

	<?php if ( $show_tabs ) echo '</div><!-- End of .m-a-box-tabs -->'; ?>

</div><!-- End of .m-a-box -->