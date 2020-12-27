<?php



add_action('acf/init', 'menu_admin_widgets');

function menu_admin_widgets(){
    
    if (function_exists('acf_add_options_page')) {
        $args = array(
            'page_title' => '<svg viewBox="0 0 24 24" style="height:1.3em; vertical-align:text-bottom; fill:#b71c1c;" xmlns="http://www.w3.org/2000/svg"><path d="M16.7 4.5L19.5 7.3L16.7 10.1L13.9 7.3L16.7 4.5M9 5V9H5V5H9M19 15V19H15V15H19M16.7 1.7L11 7.3L16.7 13H13V21H21V13H16.7L22.3 7.3L16.7 1.7M11 3H3V11H11V3M9 15V19H5V15H9M11 13H3V21H11V13Z"/></svg> Admin Widgets',
            'menu_title' => '<svg viewBox="0 0 24 24" style="height:1.3em; vertical-align:text-bottom; fill:#b71c1c;" xmlns="http://www.w3.org/2000/svg"><path d="M16.7 4.5L19.5 7.3L16.7 10.1L13.9 7.3L16.7 4.5M9 5V9H5V5H9M19 15V19H15V15H19M16.7 1.7L11 7.3L16.7 13H13V21H21V13H16.7L22.3 7.3L16.7 1.7M11 3H3V11H11V3M9 15V19H5V15H9M11 13H3V21H11V13Z"/></svg> Admin Widgets',
            'menu_slug' => 'adminwidgets',
            'capability' => 'manage_options',
            'position' => 2,
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
}