<?php

add_action('wp_enqueue_scripts', function() {
    
    
    
    wp_enqueue_style('cssLibsMin', get_stylesheet_directory_uri().'/css/libs.min.css', [], time());
    wp_enqueue_style('cssMain', get_stylesheet_directory_uri().'/css/main.css', [], time());
    wp_enqueue_style('cssMedia', get_stylesheet_directory_uri().'/css/media.css', [], time());
    
    
    // wp_enqueue_script('jquery');
    wp_enqueue_script('jquery224', 'https://code.jquery.com/jquery-2.2.4.min.js', [], '2.2.4');
    wp_enqueue_script('jsMain', get_stylesheet_directory_uri().'/js/main.js', ['jquery224'], time());
    
});