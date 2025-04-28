<?php

/**
 * Template part for displaying the testimonials component
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<section class="testimonial-pattern testimonials py-xl-2xl intersect:motion-preset-slide-left">
    <div class="wrapper stack bg-light bg-opacity-50">

        <div class="switcher">
            <div class="wrapper stack" style="--space: var(--wp--preset--spacing--s)">
                <p class="text-primary">Testimonials</p>
                <h2>YOU’RE IN GOOD COMPANY</h2>
                <p>Join the many satisfied businesses who trust Ramirez Contractor LLC to meet their labor needs. Our commitment to reliability, professionalism, and top-tier service ensures every project is completed with excellence. See why our clients choose us time and time again.</p>
            </div>
            <div class="testimonial__companies cluster justify-center py-xs-s">
                <?php
               $args = array(
                'post_type'      => 'portfolio',
                'posts_per_page' => 6
                // Several more arguments could go here. Last one without a comma.
            );
    
            // Query the posts:
            $service_query = new WP_Query($args);
    
            //$variable = (condition) ? value_if_true : value_if_false;
    
    
            // Loop through the Service:
            while ($service_query->have_posts()) :
                $service_query->the_post();
                // Echo some markup
                $portfolio_website = get_post_meta($post->ID, 'company_website', true);
                $portfolio_logo = get_post_meta($post->ID, 'company_logo', true);
                get_template_part(
                    'template-parts/components/testimonial-portfolio_item',
                    null,
                    array(
                        'website'        => $portfolio_website,
                        'logo' => $portfolio_logo,
                    )
                );
    
            endwhile;
    
            // Reset Post Data
            wp_reset_postdata();
    
            ?>
            </div>
        </div>
        <?php 
        if (get_theme_mod('testimonial_section_display') !== 'hide') {
            get_template_part('/template-parts/components/testimonial-reviews');
        }
        ?>
    <div>
        <div class="testimonial__stripes bg-primary bg-opacity-50"></div>
        <div class="testimonial__stripes bg-primary"></div>
    </div>
</section>