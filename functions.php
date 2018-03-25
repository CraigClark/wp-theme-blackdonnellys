<?php

//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

// Enable post thumbnails
//extra code has been added to  index.php, page.php, and single.php to support this
add_theme_support('post-thumbnails');

add_theme_support( 'title-tag' );



//enable custom menus, primary and secodnary
function register_my_menu() {

	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );

	register_nav_menu( 'secondary-menu', __( 'Secondary Menu' ) );

}

add_action( 'init', 'register_my_menu' );

//omit documents from front page

function exclude_category_home( $query ) {
	if ( $query->is_home ) {
		//ad any categories you on't want on the front, like this $query->set( 'cat', '-12, -3' );
		$query->set( 'cat', '-3' );
	}
	return $query;
}

add_filter( 'pre_get_posts', 'exclude_category_home' );


// Changing excerpt more
function new_excerpt_more($more) {
	global $post;
	return '… <a href="'. get_permalink($post->ID) . '">' . '(more...)' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


//change length of words for excerpt

function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//add wrapper around images in body
function breezer_addDivToImage( $content ) {

   // A regular expression of what to look for.
   $pattern = '/(<img([^>]*)>)/i';
   // What to replace it with. $1 refers to the content in the first 'capture group', in parentheses above
   $replacement = '<div class="inline-photo-wrapper"><div class="inline-photo">$1</div></div>';

   // run preg_replace() on the $content
   $content = preg_replace( $pattern, $replacement, $content );

   // return the processed content
   return $content;
}

add_filter( 'the_content', 'breezer_addDivToImage' );

?>


