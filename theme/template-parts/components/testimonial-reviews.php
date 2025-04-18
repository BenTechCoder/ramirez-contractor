<div class="stack py-l-xl">
            <ul class="reel bg-light bg-opacity-50 py-s-m">

                <?php
                $args = array(
                    'post_type'  => 'testimonial',
                    'posts_per_page' => 6,
                    // Several more arguments could go here. Last one without a comma.
                );

                // Query the posts:
                $testimonial_query = new WP_Query($args);

                // Loop through the Service:
                while ($testimonial_query->have_posts()) :
                    $testimonial_query->the_post();
                    // Echo some markup
                    get_template_part('template-parts/components/testimonial-item', null, array(
                        'quote' => get_the_content(),
                        'name' => get_the_title()
                    ));


                endwhile;

                // Reset Post Data
                wp_reset_postdata();

                ?>
            </ul>
        </div>
    </div>