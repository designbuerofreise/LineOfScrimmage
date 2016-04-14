<?php

require_once("lib/shortcodes.php");
//require_once("lib/post_types.php");

/************************************************************************************************/
/*
/*  Sidebars
*/

/*register_sidebar(array(
	'name' => 'Seitenleiste',
	'id' => 'sidebar',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h2>',
));*/

/************************************************************************************************/
/*
/*  Theme-Support
*/

add_theme_support( 'post-thumbnails' );

//add_image_size("Square",1024,1024,true);

add_theme_support("custom-header");
add_theme_support("automatic-feed-links");

/************************************************************************************************/
/*
/*  Menue Support
*/

add_theme_support('menus');

function _los_registermenus() {
  register_nav_menus(
    array('main' => 'Hauptmenue', 'secondary' => 'Sekundär','footer' => 'Fuß','mobile' => "Mobil")
  );
}

add_action('init','_los_registermenus');

function my_wp_nav_menu_args( $args = '' )
{
	$args['container'] = false;
	return $args;
} // function

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

/************************************************************************************************/
/*
/*  Utilities
*/

add_editor_style();

// Max. width for oEmbeds

if (!isset($content_width)) $content_width = 1000;

add_filter( 'wpcf7_form_elements', 'mycustom_wpcf7_form_elements' );

function mycustom_wpcf7_form_elements( $form ) {
	$form = do_shortcode( $form );

	return $form;
}

function los_scripts() {
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/glDatePicker.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'los_scripts' );

remove_action('wp_head', 'rel_canonical');

?>
