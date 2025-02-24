<?php

/**
 * Template part for displaying cards
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<li class="card stack shadow-md">
    <img src=<?php echo $args['image']; ?>>
    <div class="card__content stack center">
        <h3><a href=<?php echo esc_url(get_permalink(get_the_ID())); ?>>
                <?php
                echo $args['name'];
                ?>
            </a>
        </h3>
        <p><?php echo $args['description']; ?></p>
    </div>
</li>