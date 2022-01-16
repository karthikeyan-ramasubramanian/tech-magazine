<?php
defined( 'ABSPATH' ) or exit;

$fw_options = array();
if ( apply_filters( 'authorship/options/add_common_main', true ) )
{
    $fw_options[] = array
    (
        'display' => true,
        'type'    => 'section',
        'id'      => MOLONGUI_AUTHORSHIP_PREFIX . '_main',
        'name'    => __( "Main", 'molongui-authorship' ),
    );
    $fw_options[] = array
    (
        'display' => true,
        'type'    => 'header',
        'label'   => __( "Uninstall", 'molongui-authorship' ),
        'button'  => array(),
    );
    $fw_options[] = array
    (
        'display' => true,
        'type'    => 'toggle',
        'class'   => '',
        'default' => true,
        'id'      => 'keep_config',
        'title'   => '',
        'desc'    => '',
        'help'    => sprintf( __( "%sKeep this setting enabled to prevent config loss when removing the plugin from your site.%s %sKeeping plugin config might be useful on plugin reinstall or site migration.%s %sIf you want to completely remove all plugin config, uncheck this setting and then remove the plugin.%s", 'molongui-authorship' ), '<p>', '</p>', '<p>', '</p>', '<p>', '</p>' ),
        'label'   => __( "Keep plugin configuration for future use upon plugin uninstall.", 'molongui-authorship' ),
    );
    $fw_options[] = array
    (
        'display' => true,
        'type'    => 'toggle',
        'class'   => '',
        'default' => true,
        'id'      => 'keep_data',
        'title'   => '',
        'desc'    => '',
        'help'    => sprintf( __( "%sKeep this setting enabled to prevent data loss when removing the plugin from your site.%s %sKeeping plugin data might be useful on plugin reinstall or site migration.%s %sIf you want to completely remove any data added by the plugin since it was installed, uncheck this setting and then remove the plugin.%s", 'molongui-authorship' ), '<p>', '</p>', '<p>', '</p>', '<p>', '</p>' ),
        'label'   => __( "Keep plugin data for future use upon plugin uninstall.", 'molongui-authorship' ),
    );
}
if ( apply_filters( 'authorship/options/add_common_tools', true ) )
{
    $fw_options[] = array
    (
        'display' => true,
        'type'    => 'section',
        'id'      => MOLONGUI_AUTHORSHIP_PREFIX . '_tools',
        'name'    => __( 'Tools' ),
    );
    $fw_options[] = array
    (
        'display' => true,
        'type'    => 'header',
        'label'   => __( "Plugin Settings", 'molongui-authorship' ),
        'button'  => array(),
    );
    $fw_options[] = array
    (
        'display' => true,
        'type'    => 'export',
        'class'   => 'is-compact',
        'label'   => __( "Export plugin configuration to have a backup or restore it on another installation", 'molongui-authorship' ),
        'button'  => array
        (
            'display'  => true,
            'id'       => 'export_options',
            'label'    => __( "Backup", 'molongui-authorship' ),
            'title'    => __( "Backup Plugin Configuration", 'molongui-authorship' ),
            'class'    => 'm-export-options same-width',
            'disabled' => false,
        ),
    );
    $plugin_tools   = array();
    $plugin_tools[] = array
    (
        'display' => apply_filters( 'authorship/options/display/banners', true ),
        'type'    => 'banner',
        'class'   => '',
        'default' => '',
        'id'      => 'import_options',
        'title'   => __( "Easily import previously saved plugin configuration with just 1 click", 'molongui-authorship' ),
        'desc'    => '',
        'button'  => array
        (
            'label'  => __( "Upgrade", 'molongui-authorship' ),
            'title'  => __( "Upgrade", 'molongui-authorship' ),
            'class'  => 'm-upgrade same-width',
            'href'   => MOLONGUI_AUTHORSHIP_WEB,
            'target' => '_blank',
        ),
    );
    $plugin_tools[] = array
    (
        'display' => apply_filters( 'authorship/options/display/banners', true ),
        'type'    => 'banner',
        'class'   => '',
        'default' => '',
        'id'      => 'import_options',
        'title'   => __( "Reset plugin settings to their defaults", 'molongui-authorship' ),
        'desc'    => '',
        'button'  => array
        (
            'label'  => __( "Upgrade", 'molongui-authorship' ),
            'title'  => __( "Upgrade", 'molongui-authorship' ),
            'class'  => 'm-upgrade same-width',
            'href'   => MOLONGUI_AUTHORSHIP_WEB,
            'target' => '_blank',
        ),
    );
    $fw_options = array_merge( $fw_options, apply_filters( 'authorship/options/common_tools', $plugin_tools ) );
}
$fw_options = apply_filters( 'authorship/common/options', $fw_options );