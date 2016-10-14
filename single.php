<?php get_header(); ?>

<!------#------>
        <div id="">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <h2><?php the_category( ' &bull; ' ); ?></h2>
             <h5>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> </h5>
            
            <?php the_post_thumbnail('large'); ?>
            <?php the_content(); ?>
            
        <?php endwhile;?>
        <?php endif; ?>
            </div>
<!-------end #------>


<?php get_sidebar(); ?>

<small>single.php</small>
<!--------------#-------------->


 <!------#------>
    <div id="">
       <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?><!--start loop one -->
        <?php the_content(''); ?><!--get the home page content -->
        <?php endwhile; endif; ?><!--end loop one-->
    </div><!--end #-->

<!-------#------->
 <div id="">
     
     <h2>Latest Posts:</h2>
        <?php rewind_posts(); ?><!--stops loop one-->
        <?php query_posts('showposts=5'); ?><!--loop two, do something-->
        <?php while (have_posts()) : the_post(); ?><!--start loop 2-->
     <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
     
     <?php endwhile; ?><!--end loop 2-->
     
</div>
<!-----end #----->
    
 <!------#------>
 <div id="">
     <a href="#">
        <ul class="test">
         <li><img class="icon" src="<?php bloginfo('template_directory') ?>/images/leaf.png"></li>
        </ul>
     </a>
</div><!--end #cta4-->

<!--------------end #CTAs-------------->

<?php get_footer(); ?>