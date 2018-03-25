</div> <!---/wrapper-->
	</div><!--container-->
		
	<footer>
		<div class="wrapper contentarea">
			<div class="row contactinfo">
				<div class="column mobile-portrait--column-three-thirds mobile-landscape--column-one-third phone">
					<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:16135136920">1.613.513.6920</a>
				</div>
				
				<div class="column mobile-portrait--column-three-thirds mobile-landscape--column-one-third email">
					  <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:clark.craig@gmail.com">clark.craig@gmail.com</a>
				</div>
				
				<div class="column mobile-portrait--column-three-thirds mobile-landscape--column-one-third social-links">
					<a href="https://www.linkedin.com/in/craigclarkcc"><img src="<?php bloginfo( 'template_url' ); ?>/images/social-linkedin.svg" alt="Lintkto Linked In profile"></a>
					<a href="https://twitter.com/craigatcrow"><img src="<?php bloginfo( 'template_url' ); ?>/images/social-twitter.svg" alt="Link to Twitter profile"></a>
				</div>
				
			</div>	<!--/row-->
		</div>	
	</footer>
	
	<!-- keep script initializers at the bottom just above body tag -->
	<script type="text/javascript" src="https://use.fontawesome.com/5617227139.js"></script> <!-- font awaome for icons -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> <!-- deal with browser support problems -->
	
	<script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>
	
	<script>
    $(document).ready(function() { $('#craig_popup').popup(); });
    $(document).ready(function() { $('#helene_popup').popup(); });
    $(document).ready(function() { $('#kowesa_popup').popup(); });
    $(document).ready(function() { $('#thiscoudbeyou_popup').popup(); });
    
  </script>

  <?php wp_footer(); ?>
</body>
</html>
