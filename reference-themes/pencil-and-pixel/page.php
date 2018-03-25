<?php get_header(); ?>

	<!-- HEADER INCLUDE STOPS HERE -->

	<!-- BEGIN MAIN TEMPLATE HERE -->

	<section>

			<div>

				<div>
					

					<!-- HERE WE BEGIN OUR CONTENT LOOP -->
					<!-- THE LOOP -->
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

				
						<h1 class="page-title"><?php the_title();?></h1>
					


					<?php the_content(); ?>

				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>

	<!-- END THE LOOP -->

				</div> <!-- end left column container -->

			</div><!-- end column container-->

			</section> <!-- end content section -->

<!-- MAIN TEMPLATE AREA ENDS HERE -->

<!-- FOOTER INCLUDE BEGINS HERE -->
<?php get_footer(  ); ?>



<!-- FOOTER INCLUDE ENDS HERE

WHEW! YOU MADE IT! -->
