<!-- this is the template for a Single Post -->


<!-- GET HEADER.PHP -->
<?php get_header(); ?>
    
  <section class="wrapper">
	<div class="content-box">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			
			<div class="post">
				
        			<h1><?php the_title(); ?></h1>
        			<h6><?php the_date(); ?><?php edit_post_link('Edit', ' &#124; ', ''); ?></h6> 
         
            
	            <div class="post-image"><?php the_post_thumbnail('medium_large'); ?></div>
				<?php the_content(); ?>
				
	
            
        </div><!-- END POST -->
		<?php endwhile; else: ?>
    		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  <div class="page-navigation"> 
	  <?php // previous_post_link( $format, $link, $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' ); ?>
		  
				<h5><?php previous_post_link('%link', '< %title |', TRUE, '3') ?> <?php next_post_link('%link', '| %title >', TRUE, '3') ?></h5>
				
			</div>

       
	<!-- END THE LOOP -->		
          
  </div><!-- /cotent-box -->
  
  </section>
<!-- GET FOOTER -->  
<?php get_footer(); ?>