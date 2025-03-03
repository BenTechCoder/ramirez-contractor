<?php

/**
 * Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

/**
 * TODO: get google maps embed for the service area
 * TODO: make pattern for the about page for profiles
 * TODO: fix underlines in h2 link for about-cta.php 
 */

get_header();
?>

<?php get_template_part('template-parts/components/hero'); ?>

<?php get_template_part('template-parts/components/about-profile'); ?>


<section class="stack py-s-m">
    <div class="wrapper stack center text-center" style="--space: var(--wp--preset--spacing--s)">
        <p class="text-primary">Services</p>
        <h2>Finding the right people for your mission</h2>
        <p>Etiam fermentum metus vitae maximus fringilla. Sed non tellus pharetra, vestibulum velit et, fringilla ante. Donec suscipit libero nisl, eget tempor erat tincidunt et. Fusce molestie elit tincidunt, malesuada massa nec, placerat ex. Nulla luctus ante gravida mauris vehicula finibus. </p>

        <?php get_template_part('template-parts/assets/services-divider.php'); ?>

    </div>

    <?php get_template_part('/template-parts/components/services-grid'); ?>


    <?php get_template_part('template-parts/assets/services-divider.php'); ?>

</section>

<?php get_template_part('template-parts/components/about-cta'); ?>

<?php get_template_part('template-parts/components/service-area-cta'); ?>

<?php get_template_part('template-parts/components/cta'); ?>


<?php get_footer() ?>