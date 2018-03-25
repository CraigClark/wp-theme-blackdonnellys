<?php get_header(); ?>



<!-- The loop -->

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>
					
<h1 class="page-title"><?php the_title();?></h1>

					
<p class="authorinfo"><?php the_date(); ?> by <?php the_author(); ?></p>
<div class="row">

<div class="column mobile-portrait--column-three-thirds mobile-landscape--column-three-thirds tablet-portrait--column-three-thirds desktop--column-two-thirds widescreen--column-two-thirds">
					
	
        <section class="stickynote">
	        <article>
	        <?php the_content(); ?>
	        </article>
        </section>
</div>

					
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
       
	<!-- END THE LOOP -->

<div class="column mobile-portrait--column-three-thirds mobile-landscape--column-three-thirds tablet-portrait--column-three-thirds desktop--column-one-third widescreen--column-one-third">			
		
        <div id="sidebar">
	        <section class="stickynote">
	       <aside id="blog-articles">
	        <?php get_sidebar(  ); ?>
	       </aside>
        </section>
        </div>
        
        <div id="widgetized-area">
	        <section class="stickynote">
	       


	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>

	<div class="pre-widget">
		<p><strong>Widgetized Area</strong></p>
		<p>This panel is active and ready for you to add some widgets via the WP Admin</p>
	</div>

	<?php endif; ?>
	
	        </section>

</div> <!--/widgetized-area-->
</div>

</div> <!--/row -->



<?php get_footer(  ); ?>

