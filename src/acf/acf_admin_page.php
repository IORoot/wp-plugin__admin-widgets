<?php

/**
 * Include ACF into plugin.
 * 
 */

// Create Parent Menu
if( function_exists('acf_add_options_page') ) {
    
    $argsparent = array(
        'page_title' => 'ANDYP',
        'menu_title' => 'ANDYP',
        'menu_slug' => 'andyp',
        'capability' => 'manage_options',
        'position' => '1',
        'parent_slug' => '',
        'icon_url' => 'dashicons-screenoptions',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        'update_button'		=> __('Update', 'acf'),
        'updated_message'	=> __("Options Updated", 'acf'),
    );
	acf_add_options_page($argsparent);
	acf_add_options_sub_page(array(
        'menu_title'	=> 'AndyP Plugins',
        'parent_slug'	=> 'andyp',
        )
    );
}



// Create New Menu
if( function_exists('acf_add_options_page') ) {
    
    $args = array(

        'page_title' => 'Admin Widgets',
        'menu_title' => '🔩 Admin Widgets',
        'menu_slug' => 'adminwidgets',
        'capability' => 'manage_options',
        'position' => '1',
        'parent_slug' => 'andyp',
        'icon_url' => 'dashicons-screenoptions',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        'update_button'		=> __('Update', 'acf'),
        'updated_message'	=> __("Options Updated", 'acf'),
    );

    /**
     * Create a new options page.
     */
    acf_add_options_sub_page($args);
    
}