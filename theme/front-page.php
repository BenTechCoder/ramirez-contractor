<?php

/**
 * Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

/**
 * ⌛ get google maps embed for the service area 
  TODO: Get component ready for testimonials/companies worked with
  TODO: add customizer for Front Page text
  TODO: Look into load-in animations with css
 */

get_header();
?>

<?php get_template_part('template-parts/components/hero'); ?>



<section class="stack py-s-m">
    <div class="wrapper stack center text-center" style="--space: var(--wp--preset--spacing--s)">
        <p class="text-primary">Services</p>
        <h2>Finding the right people for your mission</h2>
        <p>Etiam fermentum metus vitae maximus fringilla. Sed non tellus pharetra, vestibulum velit et, fringilla ante. Donec suscipit libero nisl, eget tempor erat tincidunt et. Fusce molestie elit tincidunt, malesuada massa nec, placerat ex. Nulla luctus ante gravida mauris vehicula finibus. </p>

        <?php get_template_part('template-parts/assets/services-divider', '', array('rotate' => false)); ?>

    </div>
    <div class="bg-contain bg-no-repeat md:bg-cover" style="background-image:url(<?php echo get_parent_theme_file_uri("/assets/svg/services-background.svg") ?>)">

        <?php get_template_part('/template-parts/components/services-grid'); ?>


        <div class=" stack wrapper center"> <?php get_template_part('template-parts/assets/services-divider', '', array('rotate' => true)); ?></div>
    </div>

</section>

<?php get_template_part('template-parts/components/testimonials'); ?>

<?php get_template_part('template-parts/components/about-cta'); ?>

<?php get_template_part('template-parts/components/service-area-cta'); ?>

<?php get_template_part('template-parts/cta/cta'); ?>


<?php get_footer() ?>