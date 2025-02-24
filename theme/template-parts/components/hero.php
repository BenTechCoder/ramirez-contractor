<?php

/**
 * Template part for displaying the Hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<!-- TODO: iMAGE DECIDED FROM CUSTOMIZER and default value -->

<section class="hero m-0 w-full bg-[url(http://ramirez-contractor.local/wp-content/uploads/2025/01/man-working-steel-fatory-equipment-steel-production-darker.webp)] bg-cover p-0 py-xl-2xl">
    <div class="wrapper">
        <div class="flex flex-wrap justify-evenly gap-xs-s">
            <div class="hero__text text-light">
                <p class=" font-display text-[length:var(--wp--preset--font-size--step-6)] "><span class="text-secondary">YOUR MISSION.</span></p>
                <p class=" font-display text-[length:var(--wp--preset--font-size--step-6)] ">OUR WORKERS</p>
                <h1 class="font-body text-[length:var(--wp--preset--font-size--step-1)]">Labor Contracting in North Carolina</h1>
            </div>
            <?php get_template_part("template-parts/components/contact-form"); ?>
        </div>
    </div>
</section>