<?php

function custom_scripts() {
wp_enqueue_style( 'bootstrap-style' , 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
wp_enqueue_script( 'custom-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ), false, true );
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
wp_enqueue_style('load_fonts', "https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900|Roboto:400,400italic,700,700italic");
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );