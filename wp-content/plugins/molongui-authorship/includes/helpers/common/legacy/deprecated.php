<?php
defined( 'ABSPATH' ) or exit;
if ( !function_exists( 'molongui_is_active' ) )
{
    function molongui_is_active( $plugin_dir )
    {
        return authorship_pro_is_active();
    }
}