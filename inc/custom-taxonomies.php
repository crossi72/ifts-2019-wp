<?php

add_action( 'init', 'create_hotel_taxonomies', 0 );

function create_hotel_taxonomies(){
    $labels = array(
		'name'              => _x( 'Servizi', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Servizio', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Cerca servizi', 'textdomain' ),
		'all_items'         => __( 'Tutti i servizi', 'textdomain' ),
		// 'parent_item'       => __( 'Parent Genre', 'textdomain' ),
		// 'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
		'edit_item'         => __( 'Modifica servizio', 'textdomain' ),
		'update_item'       => __( 'Aggiorna servizio', 'textdomain' ),
		'add_new_item'      => __( 'Aggiungi servizio', 'textdomain' ),
		'new_item_name'     => __( 'Nome del nuovo servizio', 'textdomain' ),
		'menu_name'         => __( 'Servizi', 'textdomain' ),
    );

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
	);

    register_taxonomy( 'servizi', 'hotels', $args );
}