<?php
/**
 * The home page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IFTS_hotels
 */

get_header();

the_post();

the_post_thumbnail( 'full' );
?>

<div class="hotel-content">
    <h1>
        <?php the_title(); ?>
    </h1>
    <?php the_content(); ?>
    <?php 
    //leggo e stampo tutti i servizi
    $terms = wp_get_post_terms(get_the_id(), 'servizi');

    foreach ($terms as $term){
        echo $term->name . '<br>';
    }
    
    ?>

</div>

<?php
get_footer();
