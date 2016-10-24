<?php get_header(); ?>
<!------#------>

<div class="columnsContainer">

    <!------#------>
    <div class="leftColumn">

        <h2>Left Column (fluid)</h2>

        <?php if (have_posts()) : while (have_posts()) : the_post();?>

            <article class="post-excerpt">

                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h4>Posted In: <?php the_category( ' &bull; ' ); ?></h4>
                <h5>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> </h5>
                <a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                <?php the_excerpt(); ?>
            </article>

        <?php endwhile;?>
        <?php endif; ?>
    </div><!--end #-->
    <!-------end #------>
    <div class="rightColumn">
    </div>

</div>


<?php get_sidebar(); ?>


<?php get_footer(); ?>
