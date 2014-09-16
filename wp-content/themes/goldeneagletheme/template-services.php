<?php
/*
  Template Name: Services
 */
?>
<?php get_header(); ?>
<?php
// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array( 'order' => 'ASC', 'post_type' => 'page'));

// Get the page as an Object
$services =  get_page_by_title('Services');

// Filter through all pages and find Portfolio's children
$services_children = get_page_children( $services->ID, $all_wp_pages );

?>
<div id="services">
		<div class="butterflies">
			<div class="b-2"></div>
			<div class="s-6"></div>
			<div class="s-5"></div>
			<div class="b-1"></div>
		</div>
		<?php if (have_posts()) : the_post(); ?>
		<div class="serv-link">
			<?php foreach ($services_children as $services_child) { ?>
			<div class="serv-anime">
				<a href="<?php echo get_permalink($services_child->ID); ?>">
				<?php echo '<p>' . $services_child->post_title . '</p>'; ?></a>	
				<hr>
			</div>
			<?php } ?>
		</div>
			<div id="phil" class="wrapper">
				<h1><?php the_title(); ?></h1>
				<hr>
				 <?php the_content(); ?>
			</div>	
    	<?php endif; ?>	  
</div>
</div>
 <?php get_footer(); ?>