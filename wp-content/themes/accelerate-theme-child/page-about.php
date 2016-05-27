<?php
/**
 * The template for displaying the About page
 *
 
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

    <?php 
        $taxi_image = get_field("taxi_image");
        $taxi_text = get_field("taxi_text"); 
        $taxi_size = "full"; 
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
        $size = "small"; ?> 
            
        <section class="hero-about">
            <div class="hero-text">    
                <h3><?php echo $taxi_text; ?></h3>
            </div>
        </section>
                
        <div class="site-content">          
            <section class="about-intro">
                <h6><?php echo $services_intro_title; ?></h6>
                    <?php echo $services_intro_text; ?>
            </section>
                
            <section class = "about-section">
                <div class="service-image">
                    <?php echo wp_get_attachment_image($service_1_image, $size); ?>
                </div>
                <div class = "service-description">
                    <h2><?php echo $service_1_title; ?></h2>
                        <p><?php echo $service_1_text; ?></p>
                </div>
            </section>
                    
            <section class = "about-section">
                <div class = "service-image">
                    <?php echo wp_get_attachment_image($service_2_image, $size); ?>
                </div>
                <div class = "service-description">
                    <h2><?php echo $service_2_title; ?></h2>
                        <p> <?php echo $service_2_text; ?></p>
                </div>
            </section>
                
            <section class = "about-section">
                <div class = "service-image">
                    <?php echo wp_get_attachment_image($service_3_image, $size); ?>
                </div>
                <div class = "service-description">
                    <h2><?php echo $service_3_title; ?></h2>
                        <p> <?php echo $service_3_text; ?></p>
                </div>
            </section>
                
            <section class = "about-section">
                <div class = "service-image">
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
                        <a class="button" href="<?php echo home_url(); ?>/contact">Contact us</a>
                </div>
            </section>
            
        </div><!-- #site-content -->

<?php get_footer(); ?>