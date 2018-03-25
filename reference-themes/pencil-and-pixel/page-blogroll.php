<?php 
	
	/**
 * Template Name: Blog Roll
 */
 
 get_header(); ?>

	<!-- HEADER INCLUDE STOPS HERE -->

	<!-- BEGIN MAIN TEMPLATE HERE -->


	<div class="wrapper contentarea adjustforpencil">
		
		<h1 class="page-title"><?php the_title();?></h1>
			
			<section class="stickynote">

				<article>	
					<!-- HERE WE BEGIN OUR CONTENT LOOP -->
					<!-- THE LOOP -->
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>


					<?php the_content(); ?>

				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				</article>

	<!-- END THE LOOP -->
					<article  id="blog-articles">
					<?php get_sidebar(  ); ?>
				</article>

			</section> <!-- end content section -->
	</div><!-- END WRAPPER -->

<!-- MAIN TEMPLATE AREA ENDS HERE -->

<!-- FOOTER INCLUDE BEGINS HERE -->
<?php get_footer(  ); ?>



<!-- FOOTER INCLUDE ENDS HERE

WHEW! YOU MADE IT! -->
