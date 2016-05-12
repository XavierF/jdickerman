<?php
/*
Template Name: Gallery Page 
*/
?>

<?php get_header(); ?>

	<div class="container">

		<div id="content">

			<div id="inner-content" class="wrap clearfix">


						<header class="gallery-header">
							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
						</header> <!-- end article header -->

							<!-- Begin Masonry Layout -->
							<div id="gallery" class="masonry-container clearfix">

										<?php if( have_rows('gallery') ): ?>
										

										<div class="grid">

												 <?php 	// loop through the rows of data
												    while( have_rows('gallery') ) : the_row();
												    //vars
												    $image = get_sub_field('image'); 
												    $caption = get_sub_field('caption'); 
												    $class = get_sub_field('size'); 
										    	?>

												<div class="<?php echo $class; ?>" style="background: url('<?php echo $image; ?>') 50% 50% no-repeat; background-size: cover;" alt="<?php echo $caption; ?>">
													
												</div><!-- .acf div class -->
  									
									 					<?php endwhile;?>
									</div><!-- .grid -->

									 	<?php endif; ?>
								</div> <!-- end gallery End Masonry Layout-->

			</div> <!-- end #inner-content -->

		</div> <!-- end #content -->

	</div> <!-- end .container -->

<?php get_footer(); ?>