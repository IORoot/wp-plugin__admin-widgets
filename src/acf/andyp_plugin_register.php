<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Dashboard Widgets',
        'icon'      => 'widgets-outline',
        'color'     => '#5D4037',
        'path'      => __FILE__,
    ]);
} );