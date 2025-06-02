<?php

/**
 * Template part for displaying the main CTA
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<section class="cta cta-pattern bg-tertiary py-xl-2xl intersect:motion-preset-fade-lg">
    <div class="wrapper switcher items-center justify-center" style="--switcher-space: var(--wp--preset--spacing--xl)">
        <div class="stack">
            <h2>Skilled Industrial Labor on Demand.</h2>
            <p>Send Ramirez Contractor a Message and let us find the perfect people for your needs </p>
            <div>
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
        </div>
        <?php
        if (!is_front_page()) {
            get_template_part("template-parts/components/contact-form");
        }
        ?>
    </div>
</section>