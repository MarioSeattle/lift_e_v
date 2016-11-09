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
// Remove WP Version for security
function remove_wp_version() {
    return '';
}
//
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
//
add_filter('the_generator', 'remove_wp_version');
//Register My Menus
register_nav_menus(array(
    'main-menu' => __( 'Main' ),
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
//
//get_my_title_tag function for SEO
function get_my_title_tag() {
    global $post;
    if(is_front_page()) {//if its the front page get the description/tagline
        bloginfo('description');
    }elseif(is_page || is_single){//if its a page or single get the title
        the_title();
    }else{//everything else, get the description/tagline
        
        bloginfo('description');
    }
    if($post->post_parent){//for parent page
        echo ' | ';
        echo get_the_title($post->post_parent);//get the title for that page
    }
    echo ' | '; //echo fun stuff for more google fun
    bloginfo('name');
    echo ' | ';
    echo 'Seattle, WA ';  
}
// Changing excerpt length
function new_excerpt_length($length) {
    return 1000;
}
add_filter('excerpt_length', 'new_excerpt_length');
// Changing excerpt more
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
//
//Background
function shape_register_custom_background() {
    $args = array(
        'default-color' => 'e9e0d1',
    );

    $args = apply_filters( 'shape_custom_background_args', $args );

    if ( function_exists( 'wp_get_theme' ) ) {
        add_theme_support( 'custom-background', $args );
    } else {
        define( 'BACKGROUND_COLOR', $args['default-color'] );
        define( 'BACKGROUND_IMAGE', $args['default-image'] );
        add_custom_background();
    }
}
add_action( 'after_setup_theme', 'shape_register_custom_background' );
//
//style and js
function themeslug_enqueue_style() {
    wp_enqueue_style( 'core', 'style.css', false );
}

function themeslug_enqueue_script() {
    wp_enqueue_script( 'my-js', 'ideal-image-slider.js', false );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );
?>







