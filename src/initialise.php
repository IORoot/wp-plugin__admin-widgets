<?php

namespace widgets;

class initialise
{

    private $config;

    public function run()
    {
        $this->acf_init();
    }

    public function acf_init()
    {
        
        # Create the options page on admin
        new acf\acf_options_page();

        # Generate posts on update
        new acf\admin_widgets();


    }


}