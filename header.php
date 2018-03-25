<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title ( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta property="og:type"   content="website">
	<meta property="og:title"  content="<?php bloginfo('name'); ?>">
	<meta property="og:image"  content="<?php bloginfo( 'template_url' ); ?>/images/i-love-inuktut-stop-bill-37-site-banner.jpg">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/main.css">

	<!-- DO NOT MOVE OR DELETE THE NEXT LINE: -->
	<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<div class="top-decoration">
	<div class="wrapper">
		<header>
			<h1><a href="<?php echo get_option('home'); ?>"><span><?php bloginfo('name'); ?><br></span></a></h1>
			<nav><?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?></nav>


			<!--END NEW-->
		</header>
	</div> <!--/wrapper-->
</div>

<div class="branding">
	<div class="wrapper">
		<blockquote><p>ORCHESTRATE A DISASTER</p></blockquote>
	</div>
</div>

<!-- END HEADER -->