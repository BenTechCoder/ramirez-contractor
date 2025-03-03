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
            <p>Quisque tristique accumsan tellus. Praesent rhoncus fermentum venenatis. Integer diam metus, dictum non tortor non, placerat iaculis justo. Sed eleifend aliquam aliquam. Quisque et sem nisl. </p>
            <ul class="cluster" role="list">
                <?php
                // Retrieve the value of a specific option
                $service_area_items = get_option('service_area_service_area_item');

                // Display the value
                foreach ($service_area_items as $item) {
                    # code...
                    echo '<li>';
                    echo $item;
                    echo '</li>';
                }

                ?>
            </ul>
        </article>
        <!-- TODO: cUSTOMIZER FOR IMAGE BELOW -->
        <?php echo wp_get_attachment_image(35, 'full'); ?>
    </div>
</section>