   <?php
/*
  Template Name: Fullwidth Page
 */
?>
<?php get_header(); ?>
   <div class="clear"></div> 
		<div class="page-content">
          <div class="fullwidth">           
            <?php if (have_posts()) : the_post(); ?>
        <h1 class="page-title"><a href="#"><?php the_title(); ?></a></h1>
        <?php the_content(); ?>	
    <?php endif; ?>	  
        </div>
        </div>
		</div>
  <div class="clear"></div> 
  <?php get_footer(); ?>