<?php


// Create New Menu
if( function_exists('acf_add_options_page') ) {
    
    $args = array(

        'page_title' => 'Admin Widgets',
        'menu_title' => '🔩 Admin Widgets',
        'menu_slug' => 'adminwidgets',
        'capability' => 'manage_options',
        'position' => '2',
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