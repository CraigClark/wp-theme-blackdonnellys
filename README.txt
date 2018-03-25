This Wordpress Theme has only five main files

Use this code to create a basic Wordpress theme, placed inside a folder inside of your /wp-content/themes directory.

Important: Please name the theme folder "Lastname Firstname" (ie, the name of your theme folder will be like Kingsbury Rob). If all I get is a bunch of randomly named theme files, it will take me forever to mark. Please just name your theme folder "Lastname Firstname" so when I extract the zip, I'll know who's is who's. Thanks for the being awesome!

 

Let's get started with Part 1.


1. index.php

To be the default template for everything

<!-- GET HEADER.PHP -->

<?php get_header(); ?>
    
  <section class="clearfix">
<div class="content">
<!-- THE LOOP -->

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<div class="post">
<h6>Posted <?php the_date(); ?> by <?php the_author(); ?></h6>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
         
            <div class="entry">

<!-- THE ACTUAL CONTENT OF THE POST -->
<?php the_content(); ?>

<!-- POST METADATA -->

<h6 class="postmetadata">
Filed under <?php the_category(', ') ?> by <?php  the_author(); ?><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                </h6>

<!-- COMMENTS TEMPLATE TO DISPLAY AND CREATE COMMENTS-->

<div class="comments-template">
<?php comments_template( '', true ); ?>
            </div>
 
            </div><!-- END ENTRY-->
        </div><!-- END POST -->
<hr />
<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
       
<!-- END THE LOOP -->
          
  </div><!-- END CONTENT -->
  

  <?php get_sidebar(); ?>
  

  </section>


<!-- GET FOOTER -->  
<?php get_footer(); ?>

 

2. header.php 

To load the same header

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title ( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
/* Add this to support sites with sites with threaded comments enabled.*/
if ( is_singular() && get_option( 'thread_comments' ) )
wp_enqueue_script( 'comment-reply' );
?>
<!-- DO NOT MOVE OR DELETE THE NEXT LINE: -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">
<header>
<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1> 
<h4><?php bloginfo('description'); ?></h4>
</header>
<nav><?php wp_nav_menu(); ?></nav>
<!-- END HEADER -->

 

3. footer.php

To load the same footer

<!-- BEGIN FOOTER -->
<footer>
Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>. All rights reserved. 
</footer>

</div> <!-- END WRAPPER-->

<!-- DO NOT MOVE OR DELETE THE NEXT LINE : -->
<?php wp_footer(); ?>
</body>
</html>

 

4. sidebar.php

To be a sidebar

<div class="sidebar">
<!-- STATIC SIDEBAR -->
<ul>
<h2 class="sidebartitle">Categories</h2>
<ul class="list-cat nonwidget">
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>

<h2 class="sidebartitle">Archives</h2>
<ul class="list-archives nonwidget">
<?php wp_get_archives('type=monthly'); ?>
</ul>
</ul>
</div>

 

5. style.css

To control the layout & style (note the name is style.css NOT styles.css - Wordpress requires this naming convention - style without the trailing "s")

IMPORTANT!! Add your information here where appropriate!

/*
Theme Name: My Skeleton Theme
Theme URI: http://client-url.ca/
Description: Custom theme for your client.
Author: Your Name
Author URI: http://your-url.ca
Version: 1.0
*/

/* Place your CSS here */

 

Addendum: Creating an Archives Template

Create a copy of index.php and save it as archive.php

Add this code just after <section>...before the Loop:

 

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2>Archive for <?php the_time('F, Y'); ?>:</h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2>Archive for <?php the_time('Y'); ?>:</h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2>Author Archive</h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && 
!empty($_GET['paged'])) { ?>
<h2>Blog Archives</h2>
<?php } ?>

 

Addendum: Creating a Single Post Template

Duplicate index.php again, this time save the new file as single.php

Add this code Inside The Loop (after the line shown in red below):

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>  <-- REFERENCE ONLY DO NOT COPY
<div class="navigation"> 
<h5><?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?></h5>
<hr />
</div>

 

Addendum: Creating a Single Page Template

Make another copy of index.php, this time save the new file as page.php

Pages Don’t have authors, Find and remove this line Within the Loop :

<h6>Posted <?php the_date(); ?> by <?php the_author(); ?></h6>

You don’t need to link the title, and change it to just a <h1> tag

Change: <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
To: <h1><?php the_title(); ?></h1>

 

That’s it! You just wrote a basic theme! Let's expand on our theme with some enhanced functionality. Proceed to Part 2:

Lab Assignment 8 (Part 2): Enhancing a Wordpress Theme

 

In these next set of tasks you will enable key features of the Wordpress Content Management System. 

 

1. Create a Custom Screenshot.png

Create an image 300px x 225px – Put your name in the image!
save it as screenshot.png and place it in your theme folder (make sure it's a png, not anything else)

Go to Appearance > Themes in your Wordpress Dashboard to see your image!

2. Add a Custom Menu

Create a file called functions.php with the following code :

<?php

//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

//Register area for custom menu
function register_my_menu() {
register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

?>

Go to header.php and replace the ‘empty’ wp_nav_menu() with this new code:

<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>

You should now be able to access Appearance > Menus and create a custom menu!

 

3. Enable Custom Backgrounds

Add this code to Functions.php (INSIDE the <?php and ?> tags, of course!)

//Code for custom background support
    add_custom_background();

Now you can use Appearance > Background to edit the background colour!

 

4. Enable Widget-ized Sidebars

Add the Coloured code to your sidebar.php where indicated:

(or just replace it all!)

 

<div class="sidebar">
<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

<h2 class="sidebartitle">Categories</h2>
<ul class="list-cat nonwidget">
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>

<h2 class="sidebartitle">Archives</h2>
<ul class="list-archives nonwidget">
<?php wp_get_archives('type=monthly'); ?>
</ul>
<?php endif; ?>
</ul>
</div>

 

Add this code to functions.php

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
register_sidebar();

Now you can create a Custom Sidebar with in Appearance > Widgets!

 

5. Enabled “Featured Images" for Posts

Add this code to functions.php

// Enable post thumbnails
add_theme_support('post-thumbnails');

Add this code to index.php, page.php, and single.php BELOW the_content();

<?php the_content(); ?> <-- LOOK FOR THIS, ADD CODE BELOW IT
<?php the_post_thumbnail(); ?>

Now you can upload Featured Images that will size to this format automatically!

 

6. Create a Custom Page Template

Duplicate page.php, save the new file as fullwidth.php and add this code to the top of the file:

<?php
/*
Template Name: Fullwidth Page
*/
?>

Now remove the <?php get_sidebar(); ?> code from the full width template to create an alternate “full width" option. You may have to add the HTML classes and add some more CSS to make it look just right without a sidebar. Basically, you can recode and re-style this page independently of page.php (the "default" page template)

