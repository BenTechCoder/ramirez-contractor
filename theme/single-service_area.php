<?php

/**
 * Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

get_header();
?>

<?php get_template_part('/template-parts/components/header'); ?>

<div class="wrapper prose my-l-xl center">
    <?php
    the_content();
    ?>

</div><!-- .entry-content -->
<?php get_template_part('template-parts/components/services-cta'); ?>


<?php get_template_part('template-parts/components/testimonials'); ?>

<?php get_template_part('template-parts/components/about-cta'); ?>

<?php get_template_part('template-parts/components/service-area-cta'); ?>

<?php get_template_part('template-parts/cta/cta'); ?>


<?php get_footer() ?>