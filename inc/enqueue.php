<?php

function helloifte_scripts() {

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('all', get_template_directory_uri() . '/css/all.min.css', array("bootstrap"));
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array("all"));
    wp_enqueue_style('simple-line-icons', get_template_directory_uri() . '/css/simple-line-icons.css', array("slick"));
    wp_enqueue_style('theme_style', get_template_directory_uri() . '/css/style.css');


    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'));
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'));
    wp_enqueue_script( 'sticky-sidebar', get_template_directory_uri() . '/js/jquery.sticky-sidebar.min.js', array('jquery'));
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action('wp_enqueue_scripts', 'helloifte_scripts');


function helloifte_admin_enqueue( $hook ) {

	wp_enqueue_script( 'media-upload' );

	wp_enqueue_media();

	// wp_enqueue_style( 'helloifte-admin-style', get_template_directory_uri() . '/css/admin-style.css' );

}