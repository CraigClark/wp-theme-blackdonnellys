<?php
$post_id = 31;
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
echo "<h1>" . $title . "</h1>";
echo $queried_post->post_content;
?>