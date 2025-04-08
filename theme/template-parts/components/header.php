<header class="hero" data-hero="grid-background">
    <div class="hero__content wrapper stack center py-xl-2xl text-center <?php echo (has_post_thumbnail() ? 'text-light' : 'text-dark') ?>">
        <?php the_title('<h1 class="hero__title">', '</h1>'); ?>
        <?php
        if (has_excerpt()) {
            the_excerpt();
        }
        ?>
        <div class="center flex gap-2">
            <?php
            if (is_page('About')) {
                echo '<a href="/contact/" class="btn bg-primary text-light">Contact</a>';
            } else {
                echo '<a href="/about/" class="btn bg-primary text-light">About</a>';
            }


            ?>

            <a href="/services/" class="btn bg-dark text-light">See all Services</a>
        </div>
    </div>
    <?php
    if (has_post_thumbnail()) {
        the_post_thumbnail();
    } ?>
</header><!-- .entry-header -->