<!-- HERE WE BEGIN OUR SIDEBAR CONTENT -->


    <h2 class="link-head">Featured posts</h2>


	<?php 
	// WP_Query arguments
		$args = array (
			//'category_name' => 'featured',
			'pagination' => false,
			'posts_per_page' => '2',
			'order' => 'DESC',
			'orderby' => 'date',
		);
		
		// The Query
		$myquery = new WP_Query( $args );
		// The Loop
		if ( $myquery->have_posts() ) {
			while ( $myquery->have_posts() ) {
			$myquery->the_post();
			// do something
	?>
	
	<h3> <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a> </h3> 
	<h3> <?php the_time('F j, Y'); ?> by <?php the_author(); ?> </h3>
	<?php the_content( ) ?>
	<hr>
	<h5> <a href="<?php the_permalink(); ?>"> Read More &gt; </a> </h5>
	<hr>
	
	<?php
	}
	} else {
	// no posts found
	echo "<p>Please add Posts to Category: <em>Featured</em></p>";
	}
	
	// IMPORTANT TO NOT MESS THINGS UP Restore original Post Data
	wp_reset_postdata();
	?>