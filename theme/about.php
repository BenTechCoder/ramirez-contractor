<?php
/*
Template Name: About
Template Post Type: page
*/
// Page code here...
get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="hero bg-dark" data-hero="grid-background">
        <div class="hero__content wrapper stack center py-l-xl text-center text-light">
            <?php the_title('<h1 class="hero__title">', '</h1>'); ?>
            <?php
            if (has_excerpt()) {
                the_excerpt();
            }
            ?>
            <div class="center flex gap-2">
                <a href="/contact" class="btn bg-primary text-light">Contact</a>
                <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>" class="btn bg-light text-dark">See all <?php echo get_post_type(); ?></a>
            </div>
        </div>
        <?php the_post_thumbnail(); ?>
    </header><!-- .entry-header -->


    <div class="wrapper center prose my-l-xl" data-wrapper="content">
        <?php
        the_content();
        ?>
    </div>
    <section class="wrapper grid py-l-xl">
        <?php
        $args = array(
            'post_type'      => 'profiles',
            'posts_per_page' => 6,
            // Several more arguments could go here. Last one without a comma.
        );

        // Query the posts:
        $service_query = new WP_Query($args);

        //$variable = (condition) ? value_if_true : value_if_false;


        // Loop through the Service:
        while ($service_query->have_posts()) :
            $service_query->the_post();
            // Echo some markup

            get_template_part(
                'template-parts/components/about-profile',
                null,
                array(
                    'name'        => get_the_title(),
                    'content' => get_the_content(),
                    'image'        => get_the_post_thumbnail(),
                )
            );

        endwhile;

        // Reset Post Data
        wp_reset_postdata();

        ?>
        <!-- .entry-content -->
    </section>

</article><!-- #post-${ID} -->

<?php get_template_part("template-parts/cta/cta", 'alt-1'); ?>


<?php get_footer(); ?>