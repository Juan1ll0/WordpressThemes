<?php
/**
 * Theme Name: PhotoPicture
 * Author: juanillo
 * Date: 25/1/15
 * Time: 19:45
 * Text Domain: my-plugin
 */

/*
 * Plugin Name: My Plugin
 * Author: Otto
 *
 */

/*
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
*/

// Create a function for register_nav_menus()
function add_wp3menu_support() {

register_nav_menus(
        array(
            'main-menu' => __( 'Main Navigation' ),
            'another-menu' => __( 'Another Navigation' )
        )
     );

}

//Add the above function to init hook.
add_action( 'init', 'add_wp3menu_support' );

// Soporte del tema
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
