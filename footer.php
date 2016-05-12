			<!-- <div class="visible-xs">
				<a data-spy="affix" data-offset-bottom="500" class="affix-bottom btn btn-block" href="#top">back to the top</a>
			</div> -->
	<footer class="footer" role="contentinfo">

		<div class="container">

			<div id="inner-footer" class="wrap clearfix">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
				
				<nav role="navigation">
						<?php bones_footer_links(); ?>
				</nav>

					

			</div> <!-- end #inner-footer -->

		</div> <!-- end .container -->

	</footer> <!-- end footer -->

</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<!-- CUSTOM JS  -->
	<script type="text/javascript">
		jQuery(document).ready(function($){

     $('.navbar-toggle').bind( "touchstart", function(e){
          e.preventDefault();
            $('.navbar-collapse').collapse('toggle');
          });

			$('.grid').masonry({
	  		itemSelector: '.grid-item',
	  			columnWidth: 160
					});

			$('.grid').magnificPopup({
  			delegate: 'a', // child items selector, by clicking on it popup will open
			  type: 'image',
			  // other options
			  gallery:{enabled: true}
			});
		});

		</script>
	</body>

</html> <!-- end html. -->
