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
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/themes/default.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/themes/ideal-image-slider.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/nav.css" />
    <!--js-->
    <script type="text/javascript" src="/js/ideal-image-slider.js"></script>
    <!-- Remy Sharp Shim -->
    <script src="js/html5.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>
<!--Header starts here-->
<header>
    <h1>
        <a href="index.php">
            <span>Lift every Voice foundation</span> <!-- for SEO -->
            <img src="images/site-logo.jpg" id="logo-main" alt="Lift Every Voice Foundation Logo" >
        </a>
    </h1>
    <img src="images/donate-btn.jpg" id="dnt-btn" alt="Donate button" >
    <div id="search-bx">
        <input type="text" name="search" value="">
        <input type="button" value="search">
    </div><!-- wordpress search box -->

    <nav>
        <label for="drop" class="toggle"><svg class="inline-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="40px" viewBox="0 0 32 22.5" enable-background="new 0 0 32 22.5" xml:space="preserve">
					<title>Mobile Menu</title>
                <g class="svg-menu-toggle">

                    <path class="bar" d="M20.945,8.75c0,0.69-0.5,1.25-1.117,1.25H3.141c-0.617,0-1.118-0.56-1.118-1.25l0,0
						c0-0.69,0.5-1.25,1.118-1.25h16.688C20.445,7.5,20.945,8.06,20.945,8.75L20.945,8.75z">
                    </path>
                    <path class="bar" d="M20.923,15c0,0.689-0.501,1.25-1.118,1.25H3.118C2.5,16.25,2,15.689,2,15l0,0c0-0.689,0.5-1.25,1.118-1.25 h16.687C20.422,13.75,20.923,14.311,20.923,15L20.923,15z">
                    </path>
                    <path class="bar" d="M20.969,21.25c0,0.689-0.5,1.25-1.117,1.25H3.164c-0.617,0-1.118-0.561-1.118-1.25l0,0
						c0-0.689,0.5-1.25,1.118-1.25h16.688C20.469,20,20.969,20.561,20.969,21.25L20.969,21.25z">
                    </path>
                    <!-- needs to be here as a 'hit area' -->
                    <rect width="270" height="220" fill="none">

                    </rect>
                </g>

		</svg></label>
        <input type="checkbox" id="drop" />
        <ul class="menu">
            <li><a href="#">About</a></li>
            <li>
                <!-- First Tier Drop Down -->
                <label for="drop-1" class="toggle">Projects</label>
                <a href="#">Projects</a>
                <input type="checkbox" id="drop-1"/>
                <ul>
                    <li><a href="#">info</a></li>
                    <li><a href="#">info</a></li>
                    <li><a href="#">info</a></li>
                </ul>
            </li>
            <li>
                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">info +</label>
                <a href="#">Get Involved</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li>
                        <!-- Second Tier Drop Down -->
                        <label for="drop-3" class="toggle">Tutorials +</label>
                        <a href="#">Tutorials</a>
                        <input type="checkbox" id="drop-3"/>
                    </li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Links</a></li>
                </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
<!--Header Ends here-->
</header>