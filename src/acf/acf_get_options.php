<?php

namespace dw;

class option
{
    public $result_parameter;
    
    public function __construct()
    {
        return $this;
    }


    public function get_all($field)
    {
        $this->get_repeater_options($field, 'result_parameter');   
        return $this->result_parameter;
    }


    public function get_specific($field, $slug_field, $slug)
    {
        $this->get_repeater_options($field, 'result_parameter', $slug_field, $slug);  
        return $this->result_parameter[0];
    }



    public function get_repeater_options($repeater_field_name, $result_parameter, $slug_field = null, $slug = null)
    {
        // If field exists as an option
        if (have_rows($repeater_field_name, 'option')) {

            // Go through all rows of 'repeater' genimage_filters
            while (have_rows($repeater_field_name, 'option')): $row = the_row(true);

            if ($slug_field && $slug && $row[$slug_field] != $slug)
            {
                continue;
            }

            $this->get_repeater_row($row, $result_parameter);

            endwhile;
        } else {
            $this->$result_parameter = get_field($repeater_field_name);
        }

        return;
    }

    public function get_repeater_row($row, $result_parameter)
    {
        $this->$result_parameter[] = $row;
        return $this;
    }
    
}
