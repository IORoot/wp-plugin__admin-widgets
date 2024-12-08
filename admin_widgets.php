<?php
/*
Plugin Name: _ANDYP - Admin - Dashboard widgets
Plugin URI: https://londonparkour.com
Description: <strong>🔩Widget</strong> | Allows you to create widgets on the admin dashboard.
Version: 1.0.0
Author: Andy Pearson
Author URI: https://londonparkour.com
*/

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                           Register CONSTANTS                            │
//  └─────────────────────────────────────────────────────────────────────────┘
define( 'WIDGET_PATH', __DIR__ );
define( 'WIDGET_URL', plugins_url( '/', __FILE__ ) );
define( 'WIDGET_FILE',  __FILE__ );

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	   Initialise    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
$widget = new widgets\initialise;
$widget->run();


//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │         Load everything else ONLY on specific pages                     │
//  └─────────────────────────────────────────────────────────────────────────┘
// add_action( 'current_screen', function () {
//     $current_screen = \get_current_screen();
//     if ($current_screen->id == "toplevel_page_adminwidgets" || $current_screen->id == 'dashboard') {
//         require __DIR__.'/src/acf/acf_get_options.php';
//         require __DIR__.'/src/acf/acf_dashboard.php';
        
//     }
// });

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                             Load Widgets    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
// require __DIR__.'/src/widgets/admin_widgets.php';