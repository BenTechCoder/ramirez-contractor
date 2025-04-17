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
  TODO: add customizer for Front Page text
  TODO: Look into load-in animations with css
 */

get_header();
?>

<?php get_template_part('template-parts/components/hero'); ?>

<?php get_template_part('template-parts/components/services-cta'); ?>

<?php get_template_part('template-parts/components/testimonials'); ?>

<?php get_template_part('template-parts/components/about-cta'); ?>

<?php get_template_part('template-parts/components/service-area-cta'); ?>

<?php get_template_part('template-parts/cta/cta'); ?>


<?php get_footer() ?>