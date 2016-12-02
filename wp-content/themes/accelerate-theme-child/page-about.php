<?php
/**
 * The template for displaying the About Page
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

	<?php
		$taxi_image = get_field("taxi_image");
		$taxi_text = get_field("taxi-text");
		$services_intro_title = get_field("services_intro_title");
		$services_intro_text = get_field("services_intro_text");
		$service_1_title = get_field("services_1_title");
		$service_1_text = get_field("services_1_text");
		$service_1_image = get_field("service_1_image");
		$service_2_title = get_field("service_2_title");
		$service_2_text = get_field("service_2_text");
		$service_2_image = get_field("service_2_image");
		$service_3_title = get_field("service_3_title");
		$service_3_text = get_field("service_3_text");
		$service_3_image = get_field("service_3_image");
		$service_4_title = get_field("service_4_title");
		$service_4_text = get_field("service_4_text");
		$service_4_text = get_field("service_4_image");
		$about_contact_title = get_field("about_contact_title");
		$contact_button_text = get_field("contact_button_text");
		$size = "small";
	?>





	<div id="primary" class="site-content">
		<div id="content" role="main">
			
			 <section class="about-intro">
                <h6><?php echo $services_intro_title; ?></h6>
                    <?php echo $services_intro_text; ?>
            </section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>