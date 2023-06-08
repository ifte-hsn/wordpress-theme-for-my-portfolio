<?php
/**
 * HelloIftekhar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HelloIftekhar
 */

 $helloifte_theme_path = get_template_directory() . '/inc/';

 // Theme version.
 $helloifte_theme = wp_get_theme();
 
 define( 'HELLOIFTE_THEME_VERSION', $helloifte_theme->get( 'Version' ) );
 define ( 'HELLOIFTE_THEME_NAME', $helloifte_theme->get( 'Name' ) );


 /*-----------------------------------------------------------------------------------*/
 /*	Enqueue scripts and styles.
 /*-----------------------------------------------------------------------------------*/

 require( $helloifte_theme_path .'/enqueue.php');