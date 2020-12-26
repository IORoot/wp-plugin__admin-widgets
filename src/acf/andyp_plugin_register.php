<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Admin - Dashboard Widgets',
        'icon'      => 'widgets-outline',
        'color'     => '#b71c1c',
        'path'      => __FILE__,
    ]);
} );