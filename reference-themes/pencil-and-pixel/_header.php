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
	
	<!-- 
		
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> 
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Architects+Daughter|Open+Sans:300" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/layout-fixes.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/grid.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/responsive-navigation.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">
	
	-->
	
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
		<h1 class="logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/tater-tots-daycare.png" alt="Name"></a></h1>
		<nav class="main-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
		</nav>
	</header>