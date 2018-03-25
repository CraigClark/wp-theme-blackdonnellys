<?php get_header(); ?>
<div class="tagline">
	<h1>Pencil & Pixel Creative Services</h1>
	<p>Making things people love</p>
</div>

<section>
			<div class="row">
			
				<div class="column mobile-portrait--column-two-halves mobile-landscape--column-two-halves tablet-portrait--column-one-half desktop--column-one-half widescreen--column-one-half">
					
					<article id="about-us">
					
						<div class="stickynote">
							<?php
							$post_id = 64;
							$queried_post = get_post($post_id);
							$title = $queried_post->post_title;
							echo "<h1>" . $title . "</h1>";
							echo $queried_post->post_content;
							?>
						</div>
					</article>
					
					<article id="blog-articles">
						<div class="stickynote">
						<?php get_sidebar(  ); ?>	
						<p class="readmore"><a href="http://clar0711.edumedia.ca/mtm1519/craigclark/?page_id=55"><i class="fa fa-angle-right" aria-hidden="true"></i> read more articles by Pencil & Pixel</a></p>				
						</div>		
					</article>
				</div>
					
					<article id="who-we-are" class="column mobile-portrait--column-two-halves mobile-landscape--column-two-halves tablet-portrait--column-one-half desktop--column-one-half widescreen--column-one-half">
				
					<div class="stickynote">
						<?php
						$post_id = 49;
						$queried_post = get_post($post_id);
						$title = $queried_post->post_title;
						echo "<h1>" . $title . "</h1>";
						echo $queried_post->post_content;
						?>
						
						</div><!--/stickynote -->
				</article>	
					
			</div> <!--/row-->
			
		</section>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- load jquery so we can do interesting things -->
					
					
					
							
					
					
					
					
			


        

    
    
    <?php get_footer(  ); ?>