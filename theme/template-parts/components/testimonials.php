<?php

/**
 * Template part for displaying the testimonials component
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<section class="testimonial-pattern testimonials py-xl-2xl">
    <div class="wrapper stack bg-light bg-opacity-50">

        <div class="switcher">
            <div class="wrapper stack" style="--space: var(--wp--preset--spacing--s)">
                <p class="text-primary">Testimonials</p>
                <h2>YOU’RE IN GOOD COMPANY</h2>
                <p>Join the many satisfied businesses who trust Ramirez Contractor LLC to meet their labor needs. Our commitment to reliability, professionalism, and top-tier service ensures every project is completed with excellence. See why our clients choose us time and time again.</p>
            </div>
            <div class="testimonial__companies cluster justify-center py-xs-s">
                <?php
                // Retrieve the value of a specific option
                $company_logos = get_option('testimonial_companies_company_image');

                // Display the value
                foreach ($company_logos as $item) {
                    # code...
                    echo wp_get_attachment_image($item, 'medium');
                }

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