<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
		 <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                         <?php inkthemes_get_thumbnail(250, 170); ?>
                    <?php } else { ?>
                        <?php inkthemes_get_image(250, 170); ?> 
                        <?php
                    }
                    ?>	                      
            <div class="post_content">
			<h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>  
                <?php the_excerpt(); ?>
                <div class="clear"></div>
                <?php if (has_tag()) { ?>
                    <div class="tag">
                        <?php the_tags('Post Tagged with ', ', ', ''); ?>
                    </div>
                <?php } ?>
                <a class="read_more" href="<?php the_permalink() ?>">Read More</a>
				<ul class="post_meta">
                <li class="posted_by"><span>By&nbsp;<?php the_author_posts_link(); ?></span></li>
                <li class="post_date"><span>On&nbsp;<?php echo get_the_time('M, d, Y') ?></span></li>
				<li class="post_category"><span></span>&nbsp;<?php the_category(', '); ?></li>
                <li class="postc_comment"><span>&nbsp;<?php comments_popup_link('No Comments.', '1 Comment.', '% Comments.'); ?></span></li>
            </ul>
				</div>
        </div>
        <!--End post-->
    <?php endwhile;
else: ?>
    <div class="post">
        <p>
            <?php _e('Sorry, no posts matched your criteria.', 'golden_eagle'); ?>
        </p>
    </div>
<?php endif; ?>
<!--End Loop-->