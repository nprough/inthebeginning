<?php
// This page holds all of your functions for the WordPress Theme.

// Enable Auto Updates for ALL Plugins
add_filter( 'auto_update_plugin', '__return_true' );

// Functions to help the Customizer API process

// Return paragraphs of text area input from the customizer
function explode_textarea( $textarea ){
  $lines = explode("\n", $textarea);
  foreach( $lines as $line ){
    echo '<p>'.$line.'</p>';
  }
}

// Return list items of text area input from the customizer
function explode_textarea_to_list( $textarea ){
  $lines = explode("\n", $textarea);
  foreach( $lines as $line ){
    echo '<li>'.$line.'</li>';
  }
}
// End Functions

// Customizer API Setup
add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {
	// Section Example
	/*$wp_customize->add_section( 'cd_page_customizer_navbar' , array(
	    'title'      => 'Navigation Bar',
	    'priority'   => 30,
	) );*/

	// Image Example
	/*$wp_customize->add_setting( 'navbar_logo' , array(
	    'default'     => ''
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo',
			array(
			  'label'      => __( 'Upload a logo', '[ThemeNameHere]' ),
				'section'    => 'cd_page_customizer_navbar',
				'settings'   => 'navbar_logo',
				'context'    => ''
			)
		)
	);*/

	// Choice Example (Radio Buttons)
	/*$wp_customize->add_setting( 'home_container_choice', array(
    'default' => 'right'
  ) );
  $wp_customize->add_control( 'home_container_choice', array(
    'type' => 'radio',
    'section' => 'cd_page_customizer_home',
    'label' => __( 'Header Container Position' ),
    'choices' => array(
      'right' => __( 'Right' ),
      'left' => __( 'Left' )
    ),
  ) );*/

	// Text Example
	/*$wp_customize->add_setting( 'header_subtitle_text_home' , array(
	    'default'     => '[Default Text Here]'
	) );
	$wp_customize->add_control('header_subtitle_text_home', array(
		'label' => 'Header Subtitle Text',
		'section' => 'cd_page_customizer_home',
		'type' => 'text'
	));*/

	// Text Area Example
/*$wp_customize->add_setting( 'why_section_body_home' , array(
		'default'     => '[default multiple line text Here
multiple line here]'
) );
	$wp_customize->add_control('why_section_body_home', array(
		'label' => 'Why Section Body',
		'section' => 'cd_page_customizer_home',
		'type' => 'textarea'
	));*/

}
// End Customizer API Setup

// Register Custom Navigation Walker - if using bootstrap
require_once get_template_directory() . '/import/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
	'primary' => __( 'Primary', 'InTheBeginning' ), //<-- Change to your theme name
) );

// Import Our Styling & Bootstrap CSS
function add_stylesheet() {
  wp_register_style('stylesheet',get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'stylesheet' );
  wp_register_style('bootstrap.min',get_template_directory_uri() . '/import/bootstrap-4.1.2-dist/css/bootstrap.min.css');
  wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

// Import JQuery & Bootstrap JS
function register_myscripts_scripts(){
  wp_enqueue_script('jquery', get_template_directory_uri() . '/import/jquery.min.js');
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/import/bootstrap-4.1.2-dist/js/bootstrap.min.js', array( 'jquery' ), '3.1.1', true );
}
add_action('wp_enqueue_scripts', 'register_myscripts_scripts');

// Registering Custom Post Types
/*function create_post_type() {
  register_post_type( 'new_post',
    array(
      'labels' => array(
        'name' => __( 'New Posts' ),
        'singular_name' => __( 'New Post' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'custom-fields')
    )
  );
}
add_action( 'init', 'create_post_type' );*/

// Theme Plugin Dependencies
/*function my_theme_dependencies() {
  if( ! function_exists('get_field') )
    echo '<div class="error"><p>' . __( 'Warning: The theme needs Advanced Custom Fields to function', '[ThemeNameHere]' ) . '</p></div>';
}
add_action( 'admin_notices', 'my_theme_dependencies' );*/
?>
