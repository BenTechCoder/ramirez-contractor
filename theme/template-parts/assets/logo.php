<div class="nav__logo flex items-center gap-2xs-xs">
    <?php
    //echo wp_get_attachment_image(51, 'full');
    ?>
    <?php the_custom_logo(); ?>
    <p class="hidden md:block"><?php echo strtoupper(get_bloginfo('name')); ?></p>
</div>