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

// add the widgitized sidebar
if ( function_exists('register_sidebar') ) register_sidebar();

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Widgetized Area',
		'id'   => 'widgetized-area',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>'
	));

}


?>
