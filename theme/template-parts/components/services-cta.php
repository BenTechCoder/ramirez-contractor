<section class="stack py-s-m intersect:motion-preset-slide-right">
    <div class="wrapper stack center text-center" style="--space: var(--wp--preset--spacing--s)">
        <p class="text-primary">Services</p>
        <h2>Finding the right people for your mission</h2>
        <p>Ramirez Contractor LLC specializes in providing tailored labor solutions to meet your business needs. From skilled workers to general labor, we connect you with reliable professionals who get the job done right.</p>

        <?php get_template_part('template-parts/assets/services-divider', '', array('rotate' => false)); ?>

    </div>
    <div class="bg-contain bg-no-repeat md:bg-cover" style="background-image:url(<?php echo get_parent_theme_file_uri("/assets/svg/services-background.svg") ?>)">

        <?php get_template_part('/template-parts/components/services-grid'); ?>


        <div class=" stack wrapper center"> <?php get_template_part('template-parts/assets/services-divider', '', array('rotate' => true)); ?></div>
    </div>

</section>