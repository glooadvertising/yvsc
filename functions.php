<?php

function add_theme_scripts_and_stylesheets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts_and_stylesheets' );

add_theme_support( 'post-thumbnails' ); 
add_post_type_support( 'page', 'excerpt' );
