<?php include "header.php" ?>    
<div id='wrapper'>
<main id="page">
    <!-- START CONTENT -->
<div id="content" class="page">
    <h2 class="page-id"><?php the_title(); ?></h2>  
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="postBox" id="post-<?php the_ID(); ?>">   
		<?php the_content(); ?>
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
	</div>
   
	<?php endwhile; endif; ?>  
</div>
<!-- END CONTENT -->

</main>

<sidebar id="primary">
<!-- START SIDEBAR -->
<?php get_sidebar(primary); ?>
<!-- END SIDEBAR --> 
</sidebar>

</div>
<?php include "footer.php" ?>