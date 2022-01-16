<?php
if ( empty( $settings['related_title'] ) ) return;
?>

<div class="m-a-box-related-title">
    <?php echo apply_filters( 'authorship/box/related/title', $settings['related_title'], $author ); ?>
</div>