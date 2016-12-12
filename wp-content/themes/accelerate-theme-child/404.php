<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	
            <div class="hero-404">
				<div class="hero-text-404">
					<h2 class="hero-text-404">Sorry. This page is no longer working. <br>  Click <a href="<?php echo home_url(); ?>"><span class="main-color">here</span></a> to return to the homepage.</h2>
				</div>
			</div>
			
<?php get_footer(); ?>

	