<?php

show_admin_bar(false);

function theme_name_scripts() 
{
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css?family=PT+Serif+Caption&subset=latin,latin-ext' );
	wp_enqueue_script('jquery-2.1.0.min', get_template_directory_uri() . '/js/jquery-2.1.0.min.js');
	wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('blocs.min', get_template_directory_uri() . '/js/blocs.min.js');
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
