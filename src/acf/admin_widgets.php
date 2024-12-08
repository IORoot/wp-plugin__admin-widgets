<?php

namespace widgets\acf;


class admin_widgets
{

    public $options;

    public $current_widget;


    public function __construct()
    {
        add_action('wp_dashboard_setup', [$this,'run'], 50);
    }


    public function run()
    {

        $screen = get_current_screen();
        $id = $screen->id;
        if ($id !== 'dashboard') { return; }

        global $wp_meta_boxes;
        $this->options = get_field('dw_repeater', 'option');
        $this->create_dw_widgets();

    }
    
    
    public function create_dw_widgets()
    {
        if (!$this->options) { return; }

        foreach($this->options as $widget)
        {
            if ($widget['dw_header_group']['enabled'] == false) { continue; }

            $this->current_widget = $widget;
            $this->add_widget();
        }
    
    }
    
    public function add_widget()
    {
        $widget_slug = $this->current_widget['dw_slug'];
        $widget_name = $this->current_widget['dw_header_group']['dw_title'];
        $content = $this->current_widget['dw_code'];
        $callback = array($this, 'dw_content_callback');

        wp_add_dashboard_widget($widget_slug, $widget_name, $callback, null, $widget_slug);

        return;
    }
    

    public function dw_content_callback($var, $args)
    {
        $code = "";
        foreach ($this->options as $index => $option)
        {
            if ($option['dw_slug'] == $args['args']){
                $code = $option['dw_code'];
            }
        }

        echo $code;
    }

}

