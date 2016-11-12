<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <!--css starts here-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/image-slider/default.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/image-slider/ideal-image-slider.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/nav.css" />
    <!--js-->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ideal-image-slider.js"></script>
    <!-- Remy Sharp Shim -->
    <script src="<?php bloginfo('template_directory'); ?>/js/html5.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>
<!--Header starts here-->
<header>
    <h1>
        <a href="<?php bloginfo('url'); ?>">
            <span>Lift every Voice foundation</span> <!-- for SEO -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/site-logo.jpg" id="logo-main"
                 alt="Lift Every Voice Foundation Logo" >
        </a>
    </h1>
    <img src="<?php echo get_template_directory_uri(); ?>/images/donate-btn.jpg" id="dnt-btn" alt="Donate button" >
    <div id="search-bx">
        <input type="text" name="search" value="">
        <input type="button" value="search">
    </div><!-- wordpress search box -->

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