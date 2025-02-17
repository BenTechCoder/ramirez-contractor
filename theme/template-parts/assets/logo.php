<div class="nav__logo flex gap-2xs-xs items-center">
    <?php
    if ($args['type'] === 'alternate') {
        echo wp_get_attachment_image(50, 'full');
    } else {
        echo wp_get_attachment_image(51, 'full');
    }
    ?>
    <p class="hidden md:block">Ramirez Contractor</p>
</div>