<?php
/**
 * The template for the Contact Us page
 *
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
	<div class="contact">
	<div id="primary" class="site-content">
		<div id="content" role="main">
            <div class="<?php if (is_page('contact')) {echo 'narrow-contact';} ?>"> 
				<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!--#class -->    
		</div><!-- #content -->
	</div><!-- #primary -->
	</div><!--contact -->


<?php get_footer(); ?>