<?php
defined( 'ABSPATH' ) or exit;
?>

<div class="molongui-metabox">

    <div class="m-field">

        <?php if ( empty( $options['show_avatar'] ) ) : ?>

            <label class="m-title"><strong><?php _e( "Avatar Display Disabled", 'molongui-authorship' ); ?></strong></label>
            <p class="m-description">
                <?php _e( "Avatar display is disabled", 'molongui-authorship' ); echo ". "; printf( __( "You can enable author avatars at the WordPress %sCustomizer%s. There you can select whether to display custom local images, gravatars or acronyms.", 'molongui-authorship' ), '<a href="'.$customizer_link.'">', '</a>' ) ; ?>
            </p>
            <a class="button button-large" href="<?php echo $customizer_link; ?>"><?php _e( "Open Customizer", 'molongui-authorship' ); ?></a>

        <?php else : ?>

            <?php if ( 'local' == $options['avatar_src'] ) : ?>
                <label class="m-title"><strong><?php _e( "Local Avatar Disabled", 'molongui-authorship' ); ?></strong></label>
                <p class="m-description">
                    <?php
                        switch ( $options['avatar_local_fallback'] )
                        {
                            case 'gravatar':
                                _e( "Local Avatar feature is disabled", 'molongui-authorship' ); echo ". "; _e( "As configured, author avatar will be taken from Gravatar using author's email address and if none associated, a default image will be shown.", 'molongui-authorship' );
                            break;

                            case 'acronym':
                                _e( "Local Avatar feature is disabled", 'molongui-authorship' ); echo ". "; _e( "As configured, author acronym will be displayed as author profile image.", 'molongui-authorship' );
                            break;

                            case 'none':
                                _e( "Local Avatar feature is disabled", 'molongui-authorship' ); echo ". "; _e( "And as there is no fallback configured, no image will be shown as author avatar.", 'molongui-authorship' );
                            break;
                        }
                    ?>
                </p>
            <?php else : ?>
                <p class="m-description">
                    <?php
                        switch ( $options['avatar_src'] )
                        {
                            case 'gravatar':
                                _e( "As configured, author avatar will be taken from Gravatar using author's email address and if none associated, a default image will be shown.", 'molongui-authorship' );
                            break;

                            case 'acronym':
                                _e( "As configured, author acronym will be displayed as author profile image.", 'molongui-authorship' );
                            break;
                        }
                    ?>
                </p>
            <?php endif; ?>

            <p class="m-description">
                <?php printf( __( "If you want to upload a custom image for this guest author, enable local avatars for both, users and guests, on the plugin settings page (click %shere%s).", 'molongui-authorship' ), '<a href="'.$settings_link.'">', '</a>' ); ?>
            </p>
            <a class="button button-large" href="<?php echo $settings_link; ?>"><?php _e( "Settings Page", 'molongui-authorship' ); ?></a>

        <?php endif; ?>
    </div>

</div>