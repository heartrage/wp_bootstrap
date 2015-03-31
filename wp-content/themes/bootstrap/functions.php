<?php
/***************************
Загружаемые стили и скрипты
 ****************************/
function load_style_script() {
    wp_enqueue_style('style.css', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('menu.css', get_template_directory_uri() . '/css/menu.css');
    wp_enqueue_style('bootstrap.css', get_template_directory_uri(). '/css/bootstrap.css');
    wp_enqueue_script('jquery.min.js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
    wp_enqueue_script('menu.js', get_template_directory_uri() . '/js/menu.js');
}

add_action('wp_enqueue_scripts', 'load_style_script');
/***********************************************************
*/


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
