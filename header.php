<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lift Every Voice Foundation</title>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="initial-scale=1"/>
    <link href="style.css" rel="stylesheet"/>
    <!--for img slider start-->
    <link href="css/ideal-image-slider.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
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
        <?php wp_nav_menu() ?>
    </nav>
<!--Header Ends here-->
<nav>
    </nav>
</header>