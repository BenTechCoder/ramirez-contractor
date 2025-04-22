<?php

/**
 * Template part for displaying the Hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<section class="service-area bg-dark text-light">
    <div class="service-area__inner">
        <article class="service-area__content content gutter stack center py-xl-2xl">
            <h2>Serving North Carolina</h2>
            <p>Ramirez Contractor LLC is proud to serve communities across Eastern North Carolina. With over a decade of experience, we provide tailored labor solutions to help businesses thrive.</p>
            <ul class="cluster" role="list">
                <?php
                // Retrieve the value of a specific option
                $service_area_items = get_option('service_area_service_area_item');

                // Display the value
                $args = array(
                    'post_type'      => 'service_area',
                    'posts_per_page' => 6,
                    // Several more arguments could go here. Last one without a comma.
                );

                // Query the posts:
                $service_area_query = new WP_Query($args);

                //$variable = (condition) ? value_if_true : value_if_false;


                // Loop through the Service:
                while ($service_area_query->have_posts()) :
                    $service_area_query->the_post();
                    // Echo some markup
                    echo '<a href="' . esc_url(get_permalink(get_the_ID())) . '">';
                    echo '<li>';
                    echo get_the_title();
                    echo '</li>';
                    echo '</a>';


                endwhile;

                // Reset Post Data
                wp_reset_postdata();

                ?>
            </ul>
        </article>
        <!-- TODO: cUSTOMIZER FOR IMAGE BELOW -->
        <?php echo wp_get_attachment_image(35, 'full'); ?>
    </div>
</section>