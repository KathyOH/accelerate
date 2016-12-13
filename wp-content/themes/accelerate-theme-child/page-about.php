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
		$taxi_text = get_field("taxi");
		$services_intro_title = get_field("services_intro_title");
		$services_intro_text = get_field("services_intro_text");
		$service_1_title = get_field("service_1_title");
		$service_1_description = get_field("service_1_description");
		$service_1_image = get_field("service_1_image");
		$service_2_title = get_field("service_2_title");
		$service_2_description = get_field("service_2_description");
		$service_2_image = get_field("service_2_image");
		$service_3_title = get_field("service_3_title");
		$service_3_description = get_field("service_3_description");
		$service_3_image = get_field("service_3_image");
		$service_4_title = get_field("service_4_title");
		$service_4_description = get_field("service_4_description");
		$service_4_image = get_field("service_4_image");
		$about_contact_title = get_field("about_contact_title");
		$contact_button_text = get_field("contact_button_text");
		$size = "small";
	?>


	<section class="hero-about">
		<div class="hero-text">
			<h3 class="hero-text"><span class="main-color">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
		</div>
	</section>
			
	<section class="about-page">
		<section class="about-intro">
			<h6><?php echo $services_intro_title; ?></h6>
            	<?php echo $services_intro_text; ?>
    
		</section>
	</section>	
			
	<div class="about-section">
		<div class="service-image">
			<?php echo wp_get_attachment_image($service_1_image, $size); ?>
		</div>
		<div class="service-description">
			<h2><?php echo $service_1_title; ?></h2>
			<p><?php echo $service_1_description; ?></p>
		</div>
	</div>
	<div class="about-section">
		<div class="service-image">
			<?php echo wp_get_attachment_image($service_2_image, $size); ?>
		</div>
		<div class="service-description">
			<h2><?php echo $service_2_title; ?></h2>
			<p> <?php echo $service_2_description; ?></p>
		</div>
	</div>	
	<div class="about-section">	
		<div class="service-image">
			<?php echo wp_get_attachment_image($service_3_image, $size); ?>
		</div>
		<div class="service-description">
			<h2><?php echo $service_3_title; ?></h2>
			<p> <?php echo $service_3_description; ?></p>
		</div>
	</div>
	<div class="about-section">	
		<div class="service-image">
			<?php echo wp_get_attachment_image($service_4_image, $size); ?>
		</div>
		<div class="service-description">
			<h2><?php echo $service_4_title; ?></h2>
			<p> <?php echo $service_4_description; ?></p>
		</div>
	</div>
	<div class="about.section">
		<div class="contact-description">
			<h2><?php echo $about_contact_title; ?></h2>
			<a class="button" href="<?php echo home_url(); ?>/contact">Contact us</a>
		</div>
	</div>



<?php get_footer(); ?>