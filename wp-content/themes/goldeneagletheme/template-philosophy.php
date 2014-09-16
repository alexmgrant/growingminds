   <?php
/*
  Template Name: Philosophy
 */
?>
<?php get_header(); ?>
	<div id="phil">
		<div class="s-1"></div>
		<div class="s-6"></div>
		<?php if (have_posts()) : the_post(); ?>
			 <div class="desc shadow-box">
				<?php the_post_thumbnail('large'); ?>
				<div class="wrapper">
					<h1><?php the_title(); ?></h1>
					<hr>
				 	<?php the_content(); ?>
				</div>
			</div>	
    	<?php endif; ?>	  
	</div>
</div>
 <?php get_footer(); ?>