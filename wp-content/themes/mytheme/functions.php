<?php
/**
 * My Theme Nineteen functions and definitions
 *
 */

//  adding stylesheet and js 
function mytheme_script_enque(){
    wp_enqueue_style( 'mytheme-style', get_template_directory_uri().'/css/mytheme.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_script( 'mytheme-js', get_template_directory_uri() . '/js/mytheme.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_script_enque' );

// adding menu support
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'mytheme' ),
            'footer_menu'  => __( 'Footer Menu', 'mytheme' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

