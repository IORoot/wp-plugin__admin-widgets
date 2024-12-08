<?php

namespace widgets\acf;

/**
 * This will generate the parent page for postplanpro with 
 * and icon as well as all of the sub-pages underneath.
 */
class acf_options_page
{

    public $parent;
    public $title = 'Widgets';
    public $slug = 'widgets';
    public $b64_icon = 'data:image/svg+xml;base64,PHN2ZyBmaWxsPScjYTg1NWY3JyB2aWV3Qm94PScwIDAgMjQgMjQnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+PHBhdGggZD0nTTMsM0gxMVY3LjM0TDE2LjY2LDEuNjlMMjIuMzEsNy4zNEwxNi42NiwxM0gyMVYyMUgxM1YxM0gxNi42NkwxMSw3LjM0VjExSDNWM00zLDEzSDExVjIxSDNWMTNaJy8+PC9zdmc+';



    public function __construct(){
        add_action('acf/init', [$this,'initialise']);
    }



    public function initialise() {
        $this->add_page();
    }



    public function add_page()
    {    
        if (!function_exists('acf_add_options_page')) { return; }

        $this->parent = acf_add_options_page(array(
            'page_title'    => __($this->title),
            'menu_slug'     => strtolower($slug),
            'icon_url'      => $this->b64_icon,
            'capability'    => 'manage_options',
            'redirect'      => false,
        ));
        
    }


}




