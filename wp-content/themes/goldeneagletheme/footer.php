<div class="clear"></div>
    <!--Start Footer-->
   <div class="footer">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>
    <div class="footer-bottom">
      <?php if (inkthemes_get_option('inkthemes_footertext') != '') { ?>
                            <p class="copyright"><?php echo inkthemes_get_option('inkthemes_footertext'); ?></p> 
                        <?php } else { ?>
                            <p class="copyright">Growing Minds &copy; 2013</a></p>
                        <?php } ?>
    </div>
    <!--End Footer-->
  </div>
</div>
<!-- container -->
<?php wp_footer(); ?>
</body>
</html>
