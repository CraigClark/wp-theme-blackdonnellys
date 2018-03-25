<!-- HERE WE BEGIN OUR SIDEBAR CONTENT -->


    <h1>Articles</h1>

<ul>
	<?php
// WP_Query arguments
$args = array (
	//'category_name' => 'featured',
	'pagination' => false,
	'posts_per_page' => '5',
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

	<li> <a href="<?php the_permalink(); ?>"><em><?php the_time('F j, Y'); ?></em>: <?php the_title();?> </a> </li>

	<?php
	}
} else {
	// no posts found
	echo "<p>There are no articles to show</p>";
}

// IMPORTANT TO NOT MESS THINGS UP Restore original Post Data
wp_reset_postdata();
?>

</ul>