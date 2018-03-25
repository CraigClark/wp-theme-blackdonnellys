<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title ( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> 
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Architects+Daughter|Open+Sans:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/layout-fixes.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/grid.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/responsive-navigation.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">
	<script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr.dev.js"></script>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name=“viewport” content=“width=device-width, intial-scale=1.0”>	
	<?php
	/* Add this to support sites with sites with threaded comments enabled.*/
	if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	?>
	<!-- DO NOT MOVE OR DELETE THE NEXT LINE: -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
		<h1 class="visuallyhidden">Pencil & Pixel: Making things people love</h1>
		<div class="wrapper">
			<div class="branding">
				
				<a href="<?php echo get_option('home'); ?>"><img class="logo" src="<?php bloginfo( 'template_url' ); ?>/images/logo-pencil-and-pixel.svg" alt="Pencil and Pixel Logo"></a>
				<a href="<?php echo get_option('home'); ?>"><img class="wordmark" src="<?php bloginfo( 'template_url' ); ?>/images/wordmark-pencil-and-pixel.svg" alt="Pencil and Pixel wordmark"></a>
			</div>
		</div>
		
		<nav class="main-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
		</nav>
	</header>
	
	<div class="pencil"><img src="<?php bloginfo( 'template_url' ); ?>/images/pencil.png" alt="pencil, for decorative use"></div>
	<div class="container">			
		<div class="wrapper contentarea adjustforpencil">