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
        <a href="front-page.php">
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
       <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 

		) ); ?>
       
       <!-- <label for="drop" class="toggle"><img src="images/hamburger-menu.png"></label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <li>
               
                <label for="drop-1" class="toggle">About</label>
                <a href="#">About</a>
                <input type="checkbox" id="drop-1"/>
                <ul>
                    <li><a href="#">Our Mission</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Our Partners</a></li>
                    <li><a href="#">Our Contact Us</a></li>
                </ul> 
            </li>
            <li>
                
                <label for="drop-2" class="toggle">Projects</label>
                <a href="#">Projects</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="#">info</a></li>
                    <li><a href="#">info</a></li>
                    <li><a href="#">info</a></li>
                </ul>
            </li>
            <li>
                
                <label for="drop-3" class="toggle">Get Involved</label>
                <a href="#">Get Involved</a>
                <input type="checkbox" id="drop-3"/>
                <ul>
                    <li><a href="#">I am a non-profit</a></li>
                    <li><a href="#">I am a school</a></li>
                    <li><a href="#">I am a parent/student</a></li>
                    <li><a href="#">I would like to donate</a></li>
                </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul> -->
    </nav>
<!--Header Ends here-->
</header>