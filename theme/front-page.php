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

<?php get_template_part('template-parts/components/hero'); ?>


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

<section class="service-area bg-dark text-light">
    <div class="service-area__inner">
        <article class="service-area__content content gutter stack center py-xl-2xl">
            <h2>Serving North Carolina</h2>
            <p>Quisque tristique accumsan tellus. Praesent rhoncus fermentum venenatis. Integer diam metus, dictum non tortor non, placerat iaculis justo. Sed eleifend aliquam aliquam. Quisque et sem nisl. </p>
            <ul class="cluster" role="list">
                <li>Location, NC</li>
                <li>Location, NC</li>
                <li>Location, NC</li>
                <li>Location, NC</li>
                <li>Location, NC</li>
                <li>Location, NC</li>
            </ul>
        </article>
        <?php echo wp_get_attachment_image(35, 'full'); ?>
    </div>
</section>

<?php get_template_part('template-parts/components/cta'); ?>


<?php get_footer() ?>