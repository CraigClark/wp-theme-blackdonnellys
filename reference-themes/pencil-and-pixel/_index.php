<?php get_header(); ?>
	
	<!-- HEADER INCLUDE STOPS HERE -->
	
	<!-- BEGIN MAIN TEMPLATE HERE -->
	

	<div class="wrapper">

		<section class="content">
			
			<div class="grid-group clearfix">

				<div class="grid-item grid-2 leftcol">
				
				<h1>AM I LIVE????</h1>
				
				
					
<!--
					<?php

// The Query
$myquery = new WP_Query( $args );
// The Loop
if ( $myquery->have_posts() ) {
	while ( $myquery->have_posts() ) {
		$myquery->the_post();
		// do something
?>


	<?php the_content(); ?>

	<?php
	}
} else {
	// no posts found
	echo "<p>Please add Posts to Category: <em>Featured</em></p>";
}

// IMPORTANT TO NOT MESS THINGS UP Restore original Post Data
wp_reset_postdata();
?>
-->
					
					
				<hr>
					
						
				</div> <!-- end left column container -->

				<div class="grid-item rightcol">
					<?php get_sidebar(  ); ?>
				</div><!-- /grid-item rightcol -->
				
			</div><!-- end column container-->

			</section> <!-- end content section -->
	</div><!-- END WRAPPER -->

<!-- MAIN TEMPLATE AREA ENDS HERE -->

<!-- FOOTER INCLUDE BEGINS HERE -->
<?php get_footer(  ); ?>



<!-- FOOTER INCLUDE ENDS HERE

WHEW! YOU MADE IT! -->
