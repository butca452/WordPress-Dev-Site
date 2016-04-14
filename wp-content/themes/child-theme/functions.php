<?php
function theme_enqueue_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-css-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js'   , array(), '3.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_bootstrap');
?>