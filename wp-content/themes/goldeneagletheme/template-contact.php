  <?php
/*
  Template Name: Contact
 */
?>
<?php get_header(); ?>
   <div id="contact">
     	<!-- Map -->
     	<iframe width="940" height="352" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?ie=UTF8&amp;q=growing+minds&amp;fb=1&amp;gl=ca&amp;hq=growing+minds&amp;hnear=0x89d4cb90d7c63ba5:0x323555502ab4c477,Toronto,+ON&amp;cid=0,0,17005298782838654017&amp;t=m&amp;ll=43.652224,-79.495096&amp;spn=0.01093,0.040298&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.ca/maps?ie=UTF8&amp;q=growing+minds&amp;fb=1&amp;gl=ca&amp;hq=growing+minds&amp;hnear=0x89d4cb90d7c63ba5:0x323555502ab4c477,Toronto,+ON&amp;cid=0,0,17005298782838654017&amp;t=m&amp;ll=43.652224,-79.495096&amp;spn=0.01093,0.040298&amp;z=15&amp;iwloc=A&amp;source=embed">View Larger Map</a></small>
  
    <div class="con-wrapper">
      <div class="s-4"></div>
      <div class="b-1"></div>
      <!-- Get post Content -->
        <?php if (have_posts()) : the_post(); ?>
       <!-- Show Content -->
        <?php the_content(); ?>
        <?php endif; ?>	
    </div>
  </div>
  <?php get_footer(); ?>