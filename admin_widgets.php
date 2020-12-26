<?php
/*
Plugin Name: _ANDYP - Admin widgets
Plugin URI: https://londonparkour.com
Description: <strong>🔩Widget</strong> | Allows you to create widgets on the admin dashboard.
Version: 1.0.0
Author: Andy Pearson
Author URI: https://londonparkour.com
*/

define( 'ANDYP_WIDGET_PATH', plugins_url( '/', __FILE__ ) );

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        		 Load ACF    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/acf_admin_page.php';
require __DIR__.'/src/acf/acf_get_options.php';
require __DIR__.'/src/acf/acf_dashboard.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                             Load Widgets    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/widgets/admin_widgets.php';

	
//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';