<?php
/**
* Plugin Name: Considera Year Shortcode
* Plugin URI: https://considera.it/
* Description: Makes available a shortcode that can be used to display the current year - "[year] is the shortcode to use"
* Version: 0.1
* Author: Samuele Stabile
* Author URI: https://considera.it/
**/

function auto_date(){
    return date('Y');
}

add_shortcode('year', 'auto_date'); 