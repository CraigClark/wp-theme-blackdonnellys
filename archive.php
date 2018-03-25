<?php get_header(); ?>
 <section class="wrapper">
        <div class="content-box">
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?><?php 
                // If this is a category archive
                if (is_category()) { 
                ?>

            <h1><?php single_cat_title(); ?></h1><?php } ?><?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

            <div class="post">
                <h3><?php the_title(); ?></h3>
                <h6>Posted <?php the_date(); ?></h6>
                

                <div class="entry">
                    <?php the_content(); ?>
                </div>
            </div><?php endwhile; else: ?>

            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        </div>
    </section><!-- GET FOOTER --><?php get_footer(); ?>

