<?php 
/*
Use this page if you want to create a custom homepage for 
your site. WordPress will look for home.php before index.php. If
you end up using a custom home.php page you can also use the 
blog.php page to display your blog posts. Simply rename or delete
this page template and the latest blog posts(index.php) will be the
homepage of your website. 
*/
?>
<?php get_header(); ?>
<?php
// The Query
query_posts('cat=9');
?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<section id="hero" role="">

	
	
	 
	<!-- and ends here -->

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
				
			</div>
		</div>
	</div>
</section>
<section >

</section>

<script>
	jQuery(document).ready(function($){
		$('.carousel').carousel('pause');
	});
</script>
<?php get_footer(); ?>
