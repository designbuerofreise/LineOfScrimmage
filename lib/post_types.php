<?php

/************************************************************************************************/
/*
/*  Custom Post Types
*/

function los_post_types() {

	register_post_type( 'los',
	array(
	  'labels' => array(
	    'name' => 'los',
	    'singular_name' => 'los',
	    'menu_position' => 5
	  ),
	  'menu_position' => 5,
	  'public' => true,
	  'supports' => array(
	  	'title','editor','excerpt','comments','trackbacks','custom-fields'
	  )
	)
	);

	register_taxonomy(
		"los_kategorien", 
		array("los"),
		array(
			"hierarchical" => true,
			"label" => "Kategorien",
			"singular_label" => "Kategorie",
			"rewrite" => true)
	);

}

add_action( 'init', 'los_post_types' );

?>