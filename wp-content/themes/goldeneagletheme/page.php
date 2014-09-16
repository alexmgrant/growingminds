<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 */
?>
<?php get_header(); ?>
  	<div class="default">
      <div class="butterflies">
        <div class="b-2"></div>
        <div class="s-6"></div>
        <div class="s-5"></div>
        <div class="b-1"></div>
      </div>
      <?php if (have_posts()) : the_post(); ?>
        <div class="wrapper">
          <h1><?php the_title(); ?></h1>
          <hr>
           <?php the_content(); ?>
        </div>  
        <?php endif; ?>   
  </div>
</div> <!-- /wrapper -->
 <?php get_footer(); ?>