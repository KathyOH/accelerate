<?php
/**
 * The template for displaying the 404 page.
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="404-page">
	<div class="site-content">
			<div class='homepage-hero'>
				<p><a href="<?php echo home_url(); ?>">Click here to Accelerate your marketing efforts</a></p>                
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .404-page -->


<?php get_footer(); ?>