<?php
// support HTML5 semantic markup
$args = array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
);
add_theme_support( 'html5', $args );

// add RSS feed links to <head> tag
add_theme_support( 'automatic-feed-links' );

//Allows featured image ability
add_theme_support( 'post-thumbnails' );

//for security, hide wp version in web pages and feeds
function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

//Creates excerps box for pages
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}



// set Media Library image link default to "none"
function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');
//Register custom menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
            'main-nav' => 'Main Nav',
            'footer1' => 'Footer1',
            'footer2' => 'Footer2',
            'footer3' => 'Footer3',
            'footer4' => 'Footer4',
						'footer5' => 'Footer5',
		)
	);
}
//Register sidebars
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {
    /* Register donation. */
    register_sidebar(
        array(
            'id' => 'donation',
            'name' => __( 'donation' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
            'description' => __( 'For Blog catagories' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
    /* Register the social sidebar for footer. */
    register_sidebar(
        array(
            'id' => 'twitter',
            'name' => __( 'twitter' ),
            'description' => __( 'For Social Media plugin in footer' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    /* Register the social sidebar for home-cta1 */
    register_sidebar(
        array(
            'id' => 'home-cta1',
            'name' => __( 'Home-cta1' ),
            'description' => __( 'For home page CTA 1' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

     /* Register the social sidebar for home-cta2 */
    register_sidebar(
        array(
            'id' => 'home-cta2',
            'name' => __( 'Home-cta2' ),
            'description' => __( 'For home page CTA 2' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

     /* Register the social sidebar for home-cta3 */
    register_sidebar(
        array(
            'id' => 'home-cta3',
            'name' => __( 'Home-cta3' ),
            'description' => __( 'For home page CTA 3' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
	/* Repeat register_sidebar() code for additional sidebars. */
}
// Remove rel attribute from the category list
function remove_category_list_rel($output)
{
  $output = str_replace(' rel="category tag"', '', $output);
  return $output;
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');

//New image size, created for CTA, So it's image is to scale.
add_image_size( 'cta-thumb', 300, 300, true ); //300 pixels wide and tall and crop.

// Get Featured Page-grabs page/post and populates into home page cta.
function get_featured_page($atts) {

	$myPostID = intval($atts['id']); // sets the id to pass

	$myPosting = get_post($myPostID); // gets the post of id passed

	$caseTitle = $myPosting->post_title; // get title
	$caseExcerpt = $myPosting->post_excerpt; // get excerpt
	$caseImage = get_the_post_thumbnail($myPostID, 'cta-thumb'); // get featured thumbnail
	$caseLink = get_permalink($myPosting->ID); // get permalink

	$myFeaturePage = '<a href="'.$caseLink.'">'.$caseImage.'</a>
                <div class="cta-content">
                    <h3><a href="'.$caseLink.'">'.substr($caseTitle,0,20).'</a></h3>
                    <p>'.substr($caseExcerpt,0,55).'&nbsp;<a href="'.$caseLink.'">Read More&nbsp;&raquo;</a></p></div>'; // write it up...

	return $myFeaturePage; // ... and return it.

}
add_shortcode('featuredPage', 'get_featured_page'); // create the shortcode for the function
//

// Add a Flexslider Gallery
function add_flexslider() {

	global $post; // don't forget to make this a global variable inside your function
	$attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order',  'post_type' => 'attachment', 'post_mime_type' => 'image',));
	if ($attachments) { // see if there are images attached to posting



		echo '<div id="slider">';

		foreach ( $attachments as $attachment ) { // create the list items for images with captions

            //echo wp_get_attachment_link($attachment->ID, 'full' );
            echo  '<a href="';
            echo  get_post_field('post_content', $attachment->ID);
            echo  '">'; // get image description field
            echo wp_get_attachment_image($attachment->ID, 'full'); // get image size large
            echo '</a>';
		}

		echo '</div>';

	} // end see if images attachmed
}

// Get Child Pages
function get_child_pages() {

	global $post;

	rewind_posts(); // stop any previous loops
	query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => publish,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages

	while (have_posts()) : the_post();

		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt
		$caseImage = get_the_post_thumbnail($myPostID, 'thumbnail'); // get featured thumbnail


		echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt postBox">';
		echo $caseImage;
		echo '<h3><a href="'.$childPermalink.'">'.$childTitle.' &raquo;</a></h3>';
		echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'">Read More&nbsp;&raquo;</a></p>';
		echo '</article>';

	endwhile;

	wp_reset_query(); // reset query

}
//
