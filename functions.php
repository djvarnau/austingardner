<?php

//add_theme_support('menus');
//
//function register_theme_menus() {
//  register_nav_menus(
//    array(
//      'primary-menu' => __('Main Nav')
//    )
//    
//  );
//  
//}
//
//add_action('init', 'register_theme_menus');

function ag_theme_styles() { 
  wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css'); 
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'ag_theme_styles');

function ag_theme_js() {
  wp_enqueue_script('jquery_ui', 'http://code.jquery.com/ui/1.11.4/jquery-ui.js', array('jquery'), '', false);  
  wp_enqueue_script('froogaloop', 'https://f.vimeocdn.com/js/froogaloop2.min.js', '', '', true);
  wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js', array('jquery_ui'), '', true);
  wp_enqueue_script('overlayPlay', get_template_directory_uri() . '/js/overlayPlay.js', array('jquery'), '', true);  
}
add_action('wp_enqueue_scripts', 'ag_theme_js');3



?>