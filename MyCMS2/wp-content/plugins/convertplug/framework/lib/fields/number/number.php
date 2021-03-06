<?php
// Add new input type "number"
if ( function_exists('smile_add_input_type'))
{
	smile_add_input_type('number' , 'cp_number_settings_field' );
}

/**
* Function to handle new input type "number"
*
* @param $settings		- settings provided when using the input type "number"
* @param $value			- holds the default / updated value
* @return string/html 	- html output generated by the function
*/
function cp_number_settings_field($name, $settings, $value)
{
	$input_name = $name;
	$type = isset($settings['type']) ? $settings['type'] : '';
	$min = isset($settings['min']) ? $settings['min'] : '';
	$max = isset($settings['max']) ? $settings['max'] : '';
	$suffix = isset($settings['suffix']) ? $settings['suffix'] : '';
	$prefix = isset($settings['prefix']) ? $settings['prefix'] : '';
	$class = isset($settings['class']) ? $settings['class'] : '';
	$output = '<p>'.$prefix.'<input type="number" min="'.$min.'" max="'.$max.'" id="smile_'.$input_name.'" class="form-control smile-input smile-'.$type.' ' . $input_name . ' ' . $type . ' ' . $class . '" name="' . $input_name . '" value="'.$value.'" />'.$suffix.'</p>';
	return $output;
}