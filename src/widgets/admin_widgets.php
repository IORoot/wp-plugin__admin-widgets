<?php

add_action('wp_dashboard_setup', 'dw_dashboard_widgets');

function dw_dashboard_widgets()
{
    new dw_widgets;

}


class dw_widgets
{

    public $options;

    public $current_widget;


    public function __construct()
    {
        global $wp_meta_boxes;

        $this->get_options();
        $this->create_dw_widgets();

    }
    
    
    public function create_dw_widgets()
    {

        if (!$this->options)
        {
            return;
        }


        foreach($this->options as $widget)
        {
            if ($widget['dw_header_group']['enabled'] == false)
            {
                continue;
            }

            $this->current_widget = $widget;
            $this->add_widget();
        }
    
    }
    
    public function add_widget()
    {
        $widget_slug = $this->current_widget['slug'];
        $widget_name = $this->current_widget['dw_header_group']['dw_title'];
        $content = $this->current_widget['dw_code'];
        $callback = array($this, 'dw_content_callback');

        wp_add_dashboard_widget($widget_slug, $widget_name, $callback, null, $widget_slug);

        return;
    }
    

    public function dw_content_callback($var, $args)
    {
        $options = new dw\option;
        $widget = $options->get_specific('dw_repeater','slug', $args['args']);

        echo $widget['dw_code'];
    }





    public function get_options()
    {
        $options = new dw\option;
        $this->options = $options->get_all('dw_repeater');
    }

}

