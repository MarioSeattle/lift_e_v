<?php
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
function new_excerpt_more($more) {
    return '...';
}

//Register sidebars
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
            'description' => __( 'For blog categories, and twitter' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);
		
	/* Repeat register_sidebar() code for additional sidebars. */
}
//Add Thumbnails Support
add_theme_support('post-thumbnails');
//

//Register My Menus
register_nav_menus(array(
    'main-menu' => __( 'Main' ),
));

?>







