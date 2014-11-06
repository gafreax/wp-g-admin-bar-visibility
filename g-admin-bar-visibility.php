<?php 
/*
   Plugin Name: G-Admin Bar Visibility
   Plugin URI: github.com/gafreax/wp-g-admin-bar-visibility
   Description: Plugin that allow user to hide admin bar for all user except admin user on the be
   Author: Gabriele Fontana <gafreax@gmail.com>
   Version: 1.0
 */
/**
 * Function that remove admin bar, now for all user except for admin in be section
 * TODO add option for role that can view admin bar, and if can view also on fe admin bar
 */
function  remove_admin_bar() {
    if(!current_user_can('administratror') && !is_admin()) {
         show_admin_bar(false);
    }
}

add_action('after_theme_setup','remove_admin_bar');
