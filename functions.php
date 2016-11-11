<?php
/*
Theme Name: lift_e_v
Theme URI: http://
Author: Advance Web Dev Fall 2016
Author URI:
Description: The lift every voice foundation
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags:
Text Domain:
*/
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'default', get_template_directory_uri() . '/css/nav.css', array(), '1.1', 'all');

    wp_enqueue_style( 'default', get_template_directory_uri() . '/css/themes/default.css', array(), '1.1', 'all');
    
    wp_enqueue_style( 'ideal-image-slider', get_template_directory_uri() . '/css/themes/ideal-image-slider.css', array(), '1.1', 'all');

    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/ideal-mage-slider.js', array ( 'jquery' ), 1.1, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
// Remove WP Version for security
function remove_wp_version() {
    return '';
}
function new_excerpt_more($more) {
    return '...';
}
//Register sidebars
 register_sidebars(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
//
//Add Thumbnails Support
add_theme_support('post-thumbnails');
//
//Register sidebars
register_sidebars(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
//Register My Menus
register_nav_menus(array(
    'main-menu' => __( 'Main' ),
));

?>







