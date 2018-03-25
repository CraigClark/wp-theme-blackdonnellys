<?php get_header(); ?><?php
$post_id = 31;
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
echo "<h1>" . $title . "</h1>";
echo $queried_post->post_content;
?>

    <div class="stickynote">
        <?php
        $post_id = 49;
        $queried_post = get_post($post_id);
        $title = $queried_post->post_title;
        echo "<h1>" . $title . "</h1>";
        echo $queried_post->post_content;
        ?>
    </div><!--/stickynote -->
    <?php get_sidebar(  ); ?><?php get_footer(  ); ?>