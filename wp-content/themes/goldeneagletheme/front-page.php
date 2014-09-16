<?php
/**
 * The template for displaying front page pages.
 *
 */
?>
<?php get_header(); ?>  
<div class="shadow-box">
      <!--Start Slider -->
   <div class="slider-wrapper">
        <div id="container">
          <div id="example">
            <div id="slides">
              <div class="slides_container slide">
        <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring1 = inkthemes_get_option('inkthemes_slideimage1');
            $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring1)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.                            
            ?>
              <?php if ($check_img_ofset == 0 && inkthemes_get_option('inkthemes_slideimage1') != '') { ?>
                <div><?php echo inkthemes_get_option('inkthemes_slideimage1'); ?></div>
            <?php } else { ?> 
                <div>
                <?php if (inkthemes_get_option('inkthemes_slideimage1') != '') { ?>
                        <a href="<?php echo inkthemes_get_option('inkthemes_slidelink1'); ?>"><img  src="<?php echo inkthemes_get_option('inkthemes_slideimage1'); ?>" alt=""/></a>
                    <?php } else { ?>
                        <a href="#"><img  src="<?php echo get_template_directory_uri(); ?>/images/125.jpg" alt=""/></a>
                    <?php } ?></div>
                <?php } ?> 
              <?php
                //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                $mystring2 = inkthemes_get_option('inkthemes_slideimage2');
                $check_img_ofset = 0;
                foreach ($value_img as $get_value) {
                    if (preg_match("/$get_value/", $mystring2)) {
                        $check_img_ofset = 1;
                    }
                }
                // Note our use of ===.  Simply == would not work as expected
                // because the position of 'a' was the 0th (first) character.
                ?>
            <?php if ($check_img_ofset == 0 && inkthemes_get_option('inkthemes_slideimage2') != '') { ?>
                <div><?php echo inkthemes_get_option('inkthemes_slideimage2'); ?></div>
            <?php } else { ?> 
                <?php if (inkthemes_get_option('inkthemes_slideimage2') != '') { ?>
                    <div><a href="<?php echo inkthemes_get_option('inkthemes_slidelink2'); ?>"><img src="<?php echo inkthemes_get_option('inkthemes_slideimage2'); ?>" alt=""/></a></div>
                <?php }
            } ?>
        <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring3 = inkthemes_get_option('inkthemes_slideimage3');
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring3)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            ?>
            <?php if ($check_img_ofset == 0 && inkthemes_get_option('inkthemes_slideimage3') != '') { ?>
                <div><?php echo inkthemes_get_option('inkthemes_slideimage3'); ?></div>
            <?php } else { ?>
                <?php if (inkthemes_get_option('inkthemes_slideimage3') != '') { ?>
                    <div><a href="<?php echo inkthemes_get_option('inkthemes_slidelink3'); ?>"><img src="<?php echo inkthemes_get_option('inkthemes_slideimage3'); ?>" alt=""/></a></div>
                <?php }
            } ?>
      <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring4 = inkthemes_get_option('inkthemes_slideimage4');
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring4)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            ?>
            <?php if ($check_img_ofset == 0 && inkthemes_get_option('inkthemes_slideimage4') != '') { ?>
                <div><?php echo inkthemes_get_option('inkthemes_slideimage4'); ?></div>
            <?php } else { ?>
                <?php if (inkthemes_get_option('inkthemes_slideimage4') != '') { ?>
                    <div>  <a href="<?php echo inkthemes_get_option('inkthemes_slidelink4'); ?>"><img src="<?php echo inkthemes_get_option('inkthemes_slideimage4'); ?>" alt=""/></a></div>
                <?php
                }
            }
            $check_img_ofset = 0;
            ?>
      <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring5 = inkthemes_get_option('inkthemes_slideimage5');
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring5)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            ?>
            <?php if ($check_img_ofset == 0 && inkthemes_get_option('inkthemes_slideimage5') != '') { ?>
                <div><?php echo inkthemes_get_option('inkthemes_slideimage5'); ?></div>
            <?php } else { ?>
                <?php if (inkthemes_get_option('inkthemes_slideimage5') != '') { ?>
                    <div> <a href="<?php echo inkthemes_get_option('inkthemes_slidelink5'); ?>"><img src="<?php echo inkthemes_get_option('inkthemes_slideimage5'); ?>" alt=""/></a></div>
                <?php
                }
            }
            $check_img_ofset = 0;
            ?>
      <?php
            //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
            $mystring6 = inkthemes_get_option('inkthemes_slideimage6');
            $check_img_ofset = 0;
            foreach ($value_img as $get_value) {
                if (preg_match("/$get_value/", $mystring6)) {
                    $check_img_ofset = 1;
                }
            }
            // Note our use of ===.  Simply == would not work as expected
            // because the position of 'a' was the 0th (first) character.
            ?>
            <?php if ($check_img_ofset == 0 && inkthemes_get_option('inkthemes_slideimage6') != '') { ?>
                <div><?php echo inkthemes_get_option('inkthemes_slideimage6'); ?></div>
            <?php } else { ?>
                <?php if (inkthemes_get_option('inkthemes_slideimage6') != '') { ?>
                    <div> <a href="<?php echo inkthemes_get_option('inkthemes_slidelink6'); ?>"><img src="<?php echo inkthemes_get_option('inkthemes_slideimage6'); ?>" alt=""/></a></div>
                <?php
                }
            }
            $check_img_ofset = 0;
            ?>
                  </div>
              <a href="#" class="prev"></a> <a href="#" class="next"></a> </div>
          </div>
        </div>
      </div>
    <!--End Slider -->
      <div class="clear"></div>
      <!--Start Content-->
      <div class="content">  
        <h1 class="home-heading"> Welcome To Growing Minds </h1>
 <?php if (inkthemes_get_option('inkthemes_page_heading') != '') { ?>	  <h2 class="home-content"><?php echo stripslashes(inkthemes_get_option('inkthemes_page_heading')); ?></h2>
    <?php } else { ?>
        <h1>"Interior Design can be one of the most beautiful assets ever built"</h1>
		<?php } ?> 
      </div>
      <!--End Content-->
    </div>
</div>
    <script>
		
</script>
    <div class="feature-content">
      <div class="feature-box gallery">
       <div class="clear"></div>
    <div class="feature-strip">
    <div class="feature-text">
	  <?php if (inkthemes_get_option('inkthemes_tagline_text') != '') { ?>
		 <h1><?php echo stripslashes(inkthemes_get_option('inkthemes_tagline_text')); ?></h1>
		 <?php } else { ?> 
		 <h1><?php _e('WordPress Themes with Single Click Installation.','golden_eagle'); ?></h1>
	 <?php } ?> 
    </div>
   <!-- <div class="feature-buttons">
	<?php if (inkthemes_get_option('inkthemes_tagline_button') != '') { ?>
	<a class="btn-1" href="<?php echo inkthemes_get_option('inkthemes_tagline_button_link'); ?>">
	<?php echo stripslashes(inkthemes_get_option('inkthemes_tagline_button')); ?>
	</a>
	<?php } else { ?> 
     <a class="btn-1" href="#">
	 <?php _e('Signup Now ','golden_eagle'); ?></a>
	 <?php } ?>
    </div>-->
    </div>
     <div class="clear"></div>
     <div class="feature-bottom">
     <div class="five columns alpha">
     <div class="feature-bottom-left">
	 <?php if (inkthemes_get_option('inkthemes_bottomleft_heading') != '') { ?>
	 <h2><?php echo stripslashes(inkthemes_get_option('inkthemes_bottomleft_heading')); ?></h2>
	 <?php } else { ?> 
     <h2><?php _e('Who We Are','golden_eagle'); ?>
	  </h2>
	  <?php } ?>
	  <?php if (inkthemes_get_option('inkthemes_bottomleft_description') != '') { ?>
	 <p><?php echo stripslashes(inkthemes_get_option('inkthemes_bottomleft_description')); ?></p>
	 <?php } else { ?> 
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p><p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
	 <?php } ?>
     </div>
     </div>
     <div class="six columns">            
    <div class="feature-blog">
	<?php if (inkthemes_get_option('inkthemes_bottom_blog') != '') { ?>
    <h2><?php echo stripslashes(inkthemes_get_option('inkthemes_bottom_blog')); ?></h2>
	<?php } else { ?> 
	<h2><?php _e('Our Blog','golden_eagle'); ?></h2>
	<?php } ?>
	<?php query_posts( 'posts_per_page=2' ); ?>
            <?php if (have_posts()) :  while ( have_posts() ) : the_post(); ?>
    <div class="feature-blog-item">
    <div class="feature-blog-item-image">
    <a href="<?php the_permalink() ?>"><?php inkthemes_get_image(65, 60); ?> </a>   
    </div>
	<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <?php echo inkthemes_custom_trim_excerpt(8); ?>	
    </div>  
	<?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
    </div>
	
    </div>
     <div class="five columns omega">
     <div class="feature-bottom-right">
	 <?php if (inkthemes_get_option('inkthemes_testimonial') != '') { ?>
	 <h2><?php echo stripslashes(inkthemes_get_option('inkthemes_testimonial')); ?></h2>
	 <?php } else { ?> 
   	<h2><?php _e('Services','golden_eagle'); ?></h2>
	<?php } ?>
    <div class="embed-container">
	<?php if (inkthemes_get_option('inkthemes_testimonial_text') != '') { ?>	
     <p><?php echo stripslashes(inkthemes_get_option('inkthemes_testimonial_text')); ?></p> 
	 <?php } else { ?> 
     <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Finkthemes&width=250&height=210&colorscheme=light&show_faces=true&border_color&stream=false&header=true" scrolling="yes" frameborder="0" style="border:none; width:250px; height:210px;" allowTransparency="true"></iframe>	 
	  <?php } ?>
	</div>	  
     </div>
     </div>
     </div>
    </div>
<div class="feature-box-wrapper shadow-box sixteen columns">
  <div class="feature-box-inner first">
     <div class="gallery_entry1">
   <div class="item_image1">
            <li>
      <?php if (inkthemes_get_option('inkthemes_featureimg1') != '') { ?>
      <a href="<?php echo inkthemes_get_option('inkthemes_link1'); ?>"><img src="<?php echo inkthemes_get_option('inkthemes_featureimg1'); ?>" class='portfolio'/></a>
      <?php } else { ?>
      <a href="#"><span class="overlay"></span><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg"/ class='portfolio' /></a>
      <?php } ?> 
      </li>
            </div>
          </div>
  <?php if (inkthemes_get_option('inkthemes_firsthead') != '') { ?>
     <h1><a href="<?php echo inkthemes_get_option('inkthemes_link1'); ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_firsthead')); ?></a></h1>
     <?php } else { ?>
     <h1><a href="#"><?php _e('The best thing is that.','golden_eagle'); ?></a></h1>
   <?php } ?>
      <?php if (inkthemes_get_option('inkthemes_firstdesc') != '') { ?>
                    <p><?php echo stripslashes(inkthemes_get_option('inkthemes_firstdesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The ease with the help of which you can convert your Website.','golden_eagle'); ?></p>
                <?php } ?>        
      </div>
       <div class="feature-box-inner">
     <div class="gallery_entry1">
   <div class="item_image1">
            <li>
      <?php if (inkthemes_get_option('inkthemes_featureimg2') != '') { ?>
      <a href="<?php echo inkthemes_get_option('inkthemes_link2'); ?>" ><img src="<?php echo inkthemes_get_option('inkthemes_featureimg2'); ?>" class='portfolio'/></a>
      <?php } else { ?>
      <a href="#"><span class="overlay"></span><img src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg"/ class='portfolio' /></a>
      <?php } ?> 
      </li>
            </div>
          </div>
      <?php if (inkthemes_get_option('inkthemes_secondhead') != '') { ?>
     <h1><a href="<?php echo inkthemes_get_option('inkthemes_link2'); ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_secondhead')); ?></a></h1>
     <?php } else { ?>
     <h1><a href="#"><?php _e('The best thing is that.','golden_eagle'); ?></a></h1>
   <?php } ?>
      <?php if (inkthemes_get_option('inkthemes_seconddesc') != '') { ?>
                    <p><?php echo stripslashes(inkthemes_get_option('inkthemes_seconddesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The ease with the help of which you can convert your Website.','golden_eagle'); ?></p>
                <?php } ?> 
      </div>
      <div class="feature-box-inner">
      <div class="gallery_entry1">
   <div class="item_image1">
            <li>
      <?php if (inkthemes_get_option('inkthemes_featureimg3') != '') { ?>
      <a href="<?php echo inkthemes_get_option('inkthemes_link3'); ?>"><img src="<?php echo inkthemes_get_option('inkthemes_featureimg3'); ?>" class='portfolio'/></a>
      <?php } else { ?>
      <a href="#"><span class="overlay"></span><img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg"/ class='portfolio' /></a>
      <?php } ?> 
      </li>
            </div>
          </div>
       <?php if (inkthemes_get_option('inkthemes_thirdhead') != '') { ?>
     <h1><a href="<?php echo inkthemes_get_option('inkthemes_link3'); ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_thirdhead')); ?></a></h1>
     <?php } else { ?>
     <h1><a href="#"><?php _e('The best thing is that.','golden_eagle'); ?></a></h1>
   <?php } ?>
      <?php if (inkthemes_get_option('inkthemes_thirddesc') != '') { ?>
                    <p><?php echo stripslashes(inkthemes_get_option('inkthemes_thirddesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The ease with the help of which you can convert your Website.','golden_eagle'); ?></p>
                <?php } ?> 
      </div>
      <div class="feature-box-inner">
        <div class="gallery_entry1">
          <div class="item_image1">
            <li>
              <?php if (inkthemes_get_option('inkthemes_featureimg4') != '') { ?>
              <a href="<?php echo inkthemes_get_option('inkthemes_link4'); ?>"><img src="<?php echo inkthemes_get_option('inkthemes_featureimg4'); ?>" class='portfolio'/></a>
              <?php } else { ?>
              <a href="#"><span class="overlay"></span><img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg"/ class='portfolio' /></a>
              <?php } ?> 
             </li>
          </div>
      </div>
       <?php if (inkthemes_get_option('inkthemes_fourthhead') != '') { ?>
     <h1><a href="<?php echo inkthemes_get_option('inkthemes_link4'); ?>"><?php echo stripslashes(inkthemes_get_option('inkthemes_fourthhead')); ?></a></h1>
     <?php } else { ?>
     <h1><a href="#"><?php _e('The best thing is that.','golden_eagle'); ?></a></h1>
   <?php } ?>
      <?php if (inkthemes_get_option('inkthemes_fourthdesc') != '') { ?>
                    <p><?php echo stripslashes(inkthemes_get_option('inkthemes_fourthdesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The ease with the help of which you can convert your Website.','golden_eagle'); ?></p>
                <?php } ?> 
      </div>
</div>
	<?php get_footer(); ?>