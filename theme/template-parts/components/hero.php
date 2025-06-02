<?php

/**
 * Template part for displaying the Hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>


<section class="hero m-0 w-full bg-cover p-0 py-xl-2xl" style="background-image:url(<?php echo get_parent_theme_file_uri("/assets/images/man-working-steel-fatory-equipment-steel-production-darker.webp") ?>);">
    <div class="wrapper">
        <div class="switcher gap-xs-s">
            <div class="hero__text text-light">
                <p class=" font-display text-[length:var(--wp--preset--font-size--step-6)] "><span class="text-secondary">YOUR MISSION.</span></p>
                <p class=" font-display text-[length:var(--wp--preset--font-size--step-6)] ">OUR WORKERS</p>
                <h1 class="font-body text-[length:var(--wp--preset--font-size--step-1)]"><strong>We're Ramirez Contractor</strong> Providing labor contracting in North Carolina</h1>
            </div>
            <?php get_template_part("template-parts/components/contact-form"); ?>
        </div>
    </div>
</section>