<?php

/**
 * Template part for displaying the main CTA
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<section class="cta bg-tertiary bg-center py-2xl-3xl intersect:motion-preset-fade-lg" style="background-image:url(<?php echo get_parent_theme_file_uri("/assets/images/pexels-tiger-lily-4483777.webp") ?>);">
    <div class="wrapper center items-center justify-center text-center text-light" style="--switcher-space: var(--wp--preset--spacing--xl);">
        <div class="stack">
            <h2>More Than a Job Well Done</h2>
            <p>Send Ramirez Contractor a Message and let us find the perfect people for your needs </p>
            <div>
                <?php
                if (!is_page('contact')) {
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
    </div>
</section>