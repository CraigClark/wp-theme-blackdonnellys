<?php get_header(); ?>
        <div class="wrapper">
	        <div class="content-box">
	            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
	            <div class="post">
	                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	
	                <h6>Posted <?php the_date(); ?></h6>
	
	                <div class="entry">
		                <div class="post-image">
			                <?php
						the_post_thumbnail('large');
						?>
		                </div>
		                <div class="post-content">
	                   <?php
		                   //this code strips iline images from the posts on the front page
							$content = get_the_excerpt();
							$content = preg_replace("/<img[^>]+\>/i", " ", $content);
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							echo $content;
						?>
		                </div>
	                    
	
	                </div><!-- /entry-->
	            </div><!-- /post -->
	            <?php endwhile; else: ?>
	
	            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	        </div><!-- /content-box -->
        </div>
    </section><!-- GET FOOTER --><?php get_footer(); ?>
