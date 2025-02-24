<?php

/**
 * Template part for displaying services in a grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<article class="wrapper py-l-xl text-center">
    <ul role="list" class="grid" style="--grid-space: var(--wp--preset--spacing--m)">
        <?php
        $args = array(
            'post_type'      => 'services',
            'posts_per_page' => 6,
            // Several more arguments could go here. Last one without a comma.
        );

        // Query the posts:
        $service_query = new WP_Query($args);

        //$variable = (condition) ? value_if_true : value_if_false;


        // Loop through the Service:
        while ($service_query->have_posts()) :
            $service_query->the_post();
            // Echo some markup
            $service_description = (get_post_meta($post->ID, 'service_description', true)) ? get_post_meta($post->ID, 'service_description', true) : get_the_excerpt();

            $service_name = (get_post_meta($post->ID, 'service_name', true)) ? get_post_meta($post->ID, 'service_name', true) : get_the_title();

            $service_image = (get_post_meta($post->ID, 'service_image', true)) ? get_post_meta($post->ID, 'service_icon', true) : get_the_post_thumbnail_url($post, 'full');

            $service_image__alt = '';

            get_template_part(
                'template-parts/components/service-card',
                null,
                array(
                    'name'        => $service_name,
                    'description' => $service_description,
                    'image'        => $service_image,
                    'image_alt' => $service_image__alt
                )
            );

        endwhile;

        // Reset Post Data
        wp_reset_postdata();

        ?>
    </ul>
</article>