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
            $query->the_post();
            
            the_post_thumbnail( 'medium' );

            the_title();

            the_excerpt();
        } // end while
    } // end if
?>

<?php
get_footer();
