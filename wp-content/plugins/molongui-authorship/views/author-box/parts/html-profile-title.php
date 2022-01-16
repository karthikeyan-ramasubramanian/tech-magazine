<?php
if ( empty( $settings['profile_title'] ) ) return;
?>

<div class="m-a-box-profile-title">
    <?php echo apply_filters( 'authorship/box/profile/title', $settings['profile_title'], $author ); ?>
</div>