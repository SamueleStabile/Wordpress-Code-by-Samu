<?php
/**
* Plugin Name: Considera Year Shortcode
* Plugin URI: https://considera.it/
* Description: Makes available a shortcode [year] that can be used to display the current year - "[year] is the shortcode available"
* Version: 0.1
* Author: Considera Team
* Author URI: https://github.com/SamueleStabile/Wordpress-Code-by-Samu/tree/main/Current%20Year%20Shortcode%20by%20Considera
**/

function auto_date(){
    return date('Y');
}

add_shortcode('year', 'auto_date'); 