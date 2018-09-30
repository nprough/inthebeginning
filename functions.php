<?php

// Register Custom Navigation Walker - if using bootstrap
require_once get_template_directory() . '/import/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
	'primary' => __( 'Primary', 'InTheBeginning' ), //<-- Change to your theme name
) );
function add_stylesheet() {
    wp_register_style('stylesheet',get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'stylesheet' );
    wp_register_style('bootstrap.min',get_template_directory_uri() . '/import/bootstrap-4.1.2-dist/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

function register_myscripts_scripts(){
    wp_enqueue_script('jquery', get_template_directory_uri() . '/import/jquery.min.js'); 
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/import/bootstrap-4.1.2-dist/js/bootstrap.min.js', array( 'jquery' ), '3.1.1', true );
}
add_action('wp_enqueue_scripts', 'register_myscripts_scripts');
?>