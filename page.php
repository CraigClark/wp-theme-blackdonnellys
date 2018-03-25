<!-- GET HEADER.PHP -->
<?php get_header(); ?>
    
  <section class="wrapper">
	<div class="content-box">
		<!-- THE LOOP -->
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<div class="post">
				
        		<h1><?php the_title(); ?></h1>
         
            <div class="entry">
				<!-- THE ACTUAL CONTENT OF THE POST -->
				<?php the_content(); ?>
				<?php the_post_thumbnail(); ?>
				<!-- POST METADATA -->
				<h6 class="postmetadata">					
                	<?php edit_post_link('Edit'); ?>
                </h6>

            </div><!-- END ENTRY-->
        </div><!-- END POST -->
		<?php endwhile; else: ?>
    		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
       
	<!-- END THE LOOP -->		
          
  </div><!-- /content-box -->
  
  
  </section>
<!-- GET FOOTER -->  
<?php get_footer(); ?>