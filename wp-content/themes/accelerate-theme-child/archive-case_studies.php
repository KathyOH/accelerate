<?php
/**
 * The template for displaying the case studies archive page
 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				$size = "full";
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
			
		<article class="case-study">
			<aside class="case-study-sidebar">
				<h2><?php the_title(); ?></h2>
				<h6><span style="color: #808080;"><?php echo $services; ?></span></h6>
				<h5>Client: <?php echo $client; ?></h5>
				<?php the_content(); ?>
				<p><strong><a href="<?php echo $link; ?>">Visit Project</a></strong></p>
			</aside>
			
				<?php the_excerpt(); ?>
			<?php endwhile; // end of the loop. ?>
			
		</article>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>



	
		

			<div class="case-study-images">
				<?php if ($image_1) { ?>
				<?php echo wp_get_attachment_image( $image_1, $size ); ?>
			
			</div>