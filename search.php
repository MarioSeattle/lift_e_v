<?php get_header(); ?>



<!-- START CONTENT -->
<div id="wrapper">
<main id="content" class="search">

 <?php if (have_posts()) : ?>

   <h2>Search Results for &#8216;<?php the_search_query(); ?>&#8217;</h2>
   <?php while (have_posts()) : the_post(); ?>
     <div class="postBox">
     <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
       <p class="postmetadata">
           <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in
           <span class="cat"><?php the_category(', ') ?></span>
   <span class="author">by <?php the_author_posts_link(); ?></span>
       </p>
   <?php the_excerpt(); ?>
           <p class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">More...</a></p>
       </div><!-- /.post -->
   <?php endwhile; ?>
   <nav class="post-nav">
           <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
           <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
   </nav>
 <?php else : ?>
   <h2>Sorry, we didn't find anything matching &#8216;<?php the_search_query(); ?>&#8217;<br> Maybe try something else?</h2>
     <?php get_search_form(); ?>

 <?php endif; ?>

</main>
<!-- END CONTENT -->
<!-- START SIDEBAR -->
<sidebar id="primary">
<?php get_sidebar(primary); ?>
</sidebar>
<!-- END SIDEBAR -->

</div>
<?php get_footer(); ?>
