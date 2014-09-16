<?php
/*
  Template Name: Our Team
 */
?>
<?php get_header(); ?>
<div class="team-member">
	<section>
		<?php
			$args = array( 'post_type' => 'team_member', 'posts_per_page' => 10, 'order' => 'ASC', 'orderby' => 'menu_order' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>
		<article>
			<?php the_post_thumbnail('400,300'); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</article>
		<?php endwhile; ?>
	</section>
</div>
</div> 
 <?php get_footer(); ?>