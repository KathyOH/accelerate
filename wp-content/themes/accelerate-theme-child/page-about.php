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

	<div id="primary" class="site-content">
		<div id="content" role="main">
            
                <?php 
                $services_intro_title = get_field("services_intro_title");
                $services_intro_text = get_field("services_intro_text");
                $service_1_title = get_field("service_1_title");
                $service_1_text = get_field("service_1_text");
                $service_1_image = get_field("service_1_image");   
                $service_2_title = get_field("service_2_title");
                $service_2_text = get_field("service_2_text");
                $service_2_image = get_field("service_2_image");   
                $service_3_title = get_field("service_3_title");
                $service_3_text = get_field("service_3_text");
                $service_3_image = get_field("service_3_image");   
                $service_4_title = get_field("service_4_title");
                $service_4_text = get_field("service_4_text");
                $service_4_image = get_field("service_4_image");   
                $contact_button_title = get_field("contact_button_title");
                $contact_button_text = get_field("contact_button_text");
                $size = "small"; 
                $taxi_image = get_field("taxi_image");
                $taxi_text = get_field("taxi_text"); ?> 
            
            <section class="hero-about">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="hero-text">
                    <h3><?php the_content(); ?></h3>
                </div>
                <?php endwhile; //end of the loop. ?>
            </section>
            
            <div class="site-content">
                <?php echo wp_get_attachment_image($taxi_image); ?>
                <?php echo $taxi_text; ?>
                
                <section class="about-intro">
                <h5><?php echo $services_intro_title; ?></h5>
                <?php echo $services_intro_text; ?>
                </section>
                
                <section class = "about-section">
                    <div class="service-image align-left">
                        <?php echo wp_get_attachment_image($service_1_image, $size); ?>
                    </div>
                    <div class = "service-description">
                        <h2><?php echo $service_1_title; ?></h2>
                        <p><?php echo $service_1_text; ?></p>
                    </div>
                </section>
                    
                <section class = "about-section">
                    <div class = "service-image align-right">
                        <?php echo wp_get_attachment_image($service_2_image, $size); ?>
                    </div>
                    <div class = "service-description">
                        <h2><?php echo $service_2_title; ?></h2>
                        <p> <?php echo $service_2_text; ?></p>
                    </div>
                </section>
                
                <section class = "about-section">
                    <div class = "service-image align-left">
                        <?php echo wp_get_attachment_image($service_3_image, $size); ?>
                    </div>
                    <div class = "service-description">
                        <h2><?php echo $service_3_title; ?></h2>
                        <p> <?php echo $service_3_text; ?></p>
                    </div>
                </section>
                
                <section class = "about-section">
                    <div class = "service-image align-right">
                        <?php echo wp_get_attachment_image($service_4_image, $size); ?>
                    </div>
                    <div class = "service-description">
                        <h2><?php echo $service_4_title; ?></h2>
                        <p><?php echo $service_4_text; ?></p>
                    </div>
                </section>
                
                <section class = "about-section">
                    <div class = "contact-description">
                        <h2><strong><?php echo $contact_button_title; ?></strong></h2>
                        <p> <?php echo $contact_button_text; ?></p>
                    </div>
                </section>
            
            </div><!-- #site-content --> 
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>