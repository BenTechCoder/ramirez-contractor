<?php

/**
 * Template part for displaying the main CTA
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<section class="cta cta-pattern bg-secondary py-xl-2xl">
    <div class="wrapper stack center justify-center text-center">
        <h2>Let’s Solve your Staffing</h2>
        <p>Send us a Message and let us find the perfect people for your needs </p>
        <div class="cluster justify-center">
            <?php
            if (is_front_page()) {
                echo '<a href="/contact/" class="btn bg-primary text-light">Request Workers</a>';
            }
            ?>
            <?php
            if (!is_page('faq')) {
                echo '<a href="/faq/" class="btn bg-primary text-light">FAQ</a>';
            }
            ?>
        </div>
        <?php
        if (!is_front_page()) {
            get_template_part("template-parts/components/contact-form");
        }
        ?>
    </div>
</section>