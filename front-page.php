<?php
/**
 * The home page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IFTS_hotels
 */

get_header(); ?>

<?php

    $query = new WP_Query( array(
        'post_type' => 'hotels'
    ) );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            ?>
            <div class="hotel">
                <?php
                $query->the_post();
                
                echo('<a href="' . get_the_permalink() .'">');
                    the_post_thumbnail( 'medium' );
                echo('</a>');

                echo('<a href="' . get_the_permalink() .'">');
                    the_title();
                echo('</a>');

                the_excerpt();

               
                ?>
            </div>
            <?php
        } // end while
    } // end if
?>

<?php
get_footer();
