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
    <div class="wrapper stack">

        <div class="switcher">
            <div class="wrapper stack" style="--space: var(--wp--preset--spacing--s)">
                <p class="text-primary">Testimonials</p>
                <h2>YOU’RE IN GOOD COMPANY</h2>
                <p>Etiam fermentum metus vitae maximus fringilla. Sed non tellus pharetra, vestibulum velit et, fringilla ante. Donec suscipit libero nisl, eget tempor erat tincidunt et. Fusce molestie elit tincidunt, malesuada massa nec, placerat ex. Nulla luctus ante gravida mauris vehicula finibus. </p>
            </div>
            <div class="testimonial__companies cluster justify-center py-xs-s bg-light bg-opacity-50">
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
        <div class="stack py-l-xl">
            <ul class="reel bg-light bg-opacity-50 py-s-m">

                <?php
                $args = array(
                    'post_type'  => 'testimonial',
                    'posts_per_page' => 6,
                    // Several more arguments could go here. Last one without a comma.
                );

                // Query the posts:
                $testimonial_query = new WP_Query($args);

                // Loop through the Service:
                while ($testimonial_query->have_posts()) :
                    $testimonial_query->the_post();
                    // Echo some markup
                    get_template_part('template-parts/components/testimonial-item', null, array(
                        'quote' => get_the_content(),
                        'name' => get_the_title()
                    ));


                endwhile;

                // Reset Post Data
                wp_reset_postdata();

                ?>
            </ul>
        </div>
    </div>
    <div>
        <div class="testimonial__stripes bg-primary bg-opacity-50"></div>
        <div class="testimonial__stripes bg-primary"></div>
    </div>
</section>