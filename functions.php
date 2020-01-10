<?php

function shapeSpace_include_custom_jquery() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

function surfing_scripts() {


	wp_enqueue_style(
	    'surfing-bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style(
	    'surfing-icomoon',
        get_template_directory_uri() . '/css/icomoon.css' );

	wp_enqueue_style(
	    'surfing-fancybox',
        get_template_directory_uri() . '/css/jquery.fancybox.min.css' );

	wp_enqueue_style(
	    'surfing-owlcarousel',
        get_template_directory_uri() . '/owlcarousel/assets/owl.carousel.min.css' );

	wp_enqueue_style(
	    'surfing-gfonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap&subset=cyrillic,cyrillic-ext,latin-ext' );

	wp_enqueue_style(
	    'surfing-style', get_stylesheet_uri() );



	wp_enqueue_script(
	    'owlcarousel', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', array('jquery'), '', true );

	wp_enqueue_script(
	    'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery','owlcarousel'), '', true );

    wp_enqueue_script(
	    'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

    wp_enqueue_script(
	    'mainJS', get_template_directory_uri() . '/js/main.min.js', array('jquery', 'bootstrap', 'fancybox', 'owlcarousel'), '', true );
}

add_action( 'wp_enqueue_scripts', 'surfing_scripts' );
