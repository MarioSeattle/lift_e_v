<?php get_header(); ?>

<div id="wrapper">
    <main class="page">

        <?php while ( have_posts() ) : the_post(); ?>

            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-content">

                <?php the_content(); ?>

                /* Custom Archives Functions Go Below this line */



                /* Custom Archives Functions Go Above this line */

            </div><!-- .entry-content -->

        <?php endwhile; // end of the loop. ?>

    </div><!-- #page-->
</div><!-- #wraper-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


