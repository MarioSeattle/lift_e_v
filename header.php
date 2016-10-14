<!DOCTYPE html>
<html>
<head>
    <!-- Begin Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="<?php echo get_the_excerpt(); ?>" />
<!-- End Meta -->
<title><?php get_my_title_tag(); ?></title>
    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

    
<!---begin WP Head Function--->
    <?php wp_head(); ?>
<!---end WP Head Function--->
     
</head>
<body <?php body_class();?>>
        
        
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'nav', )); ?>
       
<div id="middle">