<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <!--css starts here-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/image-slider/default.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/image-slider/ideal-image-slider.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/nav.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--js-->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ideal-image-slider.js"></script>
    <!-- Remy Sharp Shim -->
    <script src="<?php bloginfo('template_directory'); ?>/js/html5.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <![endif]-->
    
    <?php wp_head(); ?>
</head>
<body>
<!--Header starts here-->
<header>
    <h1>
        <a href="<?php bloginfo('url'); ?>">
            <span>Lift every Voice foundation</span> <!-- for SEO -->
            
            <img src="<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_option('page_on_front')), "Full");
            echo $imgsrc[0]; ?>" id="logo-main"
                 alt="Lift Every Voice Foundation Logo" >
        </a>
    </h1>
    <!-- START SIDEBAR -->
    <sidebar id="donation">
        <?php if ( !dynamic_sidebar('donation') ) : ?>
        <?php endif; ?>
    </sidebar>
   <nav>
        <label for="drop" class="toggle"><img src="<?php echo get_template_directory_uri(); ?>/images/hamburger-menu.png"></label>
        <input type="checkbox" id="drop" />
       <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul',
		) ); ?>
    </nav>
<!--Header Ends here-->
</header>