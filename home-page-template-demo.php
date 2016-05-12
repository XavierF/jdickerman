<?php 
/**
 * Demo Home Page Template
 *
   Template Name:  Demo Home Page Template
 *
 */
?>
<?php get_header(); ?>

<section id="hero" role="hero-unit">
	<div class="container-fluid">
		<h1 class="tag"><?php $site_description = get_bloginfo( 'description', 'display' ); echo "$site_description";?></h1>
	</div>
</section> <!-- end hero-unit -->


	

<section id="main-content">
	<div class="container">
			<div class="row">
						<div class="col-sm-12" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h3 class="page-title" itemprop="headline"><?php the_title(); ?></h3>

								</header> <!-- end article header -->

								<div class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</div> <!-- end article section -->

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
						</div> <!-- end .col-sm-12 -->
					</div><!-- end .row -->

	</div><!-- end .container -->

</section><!-- end main -->

<section>	
		<div class="row">
			<div class="col-sm-12">
				
		</div>
	</div>
</section>
<section id="info">
	<div class="container">
		<div class="row">
			<div class="col-md-7">	
     		<?php the_field('info'); ?>
			</div>
			<div class="quote-form col-md-5">	
				<h3 class="center-block">Request a Quote</h3>
     		<?php echo do_shortcode( '[contact-form-7 id="76" title="Request A Quote"]' ); ?>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</section>
<section id="testimonials">
	<div class="container">
				<div class="row">
					<h1 class="section-header center-block">Client Testimonials</h1>

					<div class="test col-md-3">
						<blockquote><?php the_field('test_1'); ?></blockquote>
						<p><em><?php the_field('client_1'); ?></em></p>
					</div>

					<div class="test col-md-3">
						<blockquote><?php the_field('test_2'); ?></blockquote>
						<p><em><?php the_field('client_2'); ?></em></p>
					</div>

					<div class="test col-md-3">
						<blockquote><?php the_field('test_3'); ?></blockquote>
						<p><em><?php the_field('client_3'); ?></em></p>
					</div>

				</div><!-- .row -->
	</div><!-- .container -->

</section>



<?php get_footer(); ?>