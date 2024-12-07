<?php



add_action('acf/init', 'menu_admin_widgets');

function menu_admin_widgets(){
    
    if (!function_exists('acf_add_options_page')) { return; }

    /**
     * Create a new options page.
     */
    acf_add_options_page([
        'page_title' => 'Widgets',
        'menu_title' => 'Widgets',
        'menu_slug' => 'adminwidgets',
        'capability' => 'manage_options',
        'position' => 2,
        'icon_url' => 'data:image/svg+xml;base64,PHN2ZyBmaWxsPScjYTg1NWY3JyB2aWV3Qm94PScwIDAgMjQgMjQnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+PHBhdGggZD0nTTMsM0gxMVY3LjM0TDE2LjY2LDEuNjlMMjIuMzEsNy4zNEwxNi42NiwxM0gyMVYyMUgxM1YxM0gxNi42NkwxMSw3LjM0VjExSDNWM00zLDEzSDExVjIxSDNWMTNaJy8+PC9zdmc+',
        'redirect' => true,
        'post_id' => 'widgets',
        'autoload' => false,
        'update_button'		=> __('Update', 'acf'),
        'updated_message'	=> __("Options Updated", 'acf'),
    ]);

}