<?php
/*
Plugin Name: Markus Freise Shortcodes
Plugin URI: http://www.designbuero-freise.de/download/wp/markusfreise
Description: Meine eigenen kleinen Shortcodes
Version: 0.1
Author: Markus Freise
Author URI: http://www.markus-freise.de/
*/

/************************************************************************************************/
/*
/*
*/

/************************************************************************************************/
/*
/* Formatierungen
*/

function _sc_clear($atts,$content) {
   return '<div class="clear"></div>';
}
add_shortcode('clear','_sc_clear');

function _sc_trenner($atts,$content) {
   return '<div class="clear"></div><div class="trenner">'.do_shortcode($content).'</div>';
}
add_shortcode('trenner','_sc_trenner');

function _sc_intro($atts,$content) {
   return '<p class="abstract">'.do_shortcode($content).'</p>';
}
add_shortcode('intro','_sc_intro');

function _sc_tipp($atts,$content) {
   return '<p class="tipp">'.do_shortcode($content).'</p>';
}
add_shortcode('tipp','_sc_tipp');

function _sc_box($atts,$content) {
	return '<div class="infobox '.implode(" ",(array)$atts).'"><span class="coltop"></span>'.apply_filters("the_content",(''.$content)).'</div>';
}
add_shortcode('box','_sc_box');

function _sc_question($atts,$content) {
	return '<p class="question" onclick="$(this).next(\'.answer\').toggle();">'.do_shortcode($content).'</p>';
}
add_shortcode('question','_sc_question');

function _sc_answer($atts,$content) {
	return '<div class="answer" style="display: none;">'.apply_filters("the_content",$content).'</div>';
}
add_shortcode('answer','_sc_answer');

function _sc_div($atts,$content) {
	if($atts===""):
		$atts = array("");
	endif;
	$first = "";
	if(in_array("first",$atts)):
		$first = '<div class="clear"></div>';
	endif;
	return $first.'<div class="div '.implode(" ",(array)$atts).'">'.($content).'</div>';
}
add_shortcode('div','_sc_div');

function _sc_col($atts,$content) {
	if($atts===""):
		$atts = array("");
	endif;
	$first = "";
    return $first.'<div class="col '.implode(" ",(array)$atts).'"><span class="coltop"></span>'.apply_filters("the_content",do_shortcode(''.$content)).'</div>';
	//return $first.'<div class="col '.implode(" ",(array)$atts).'"><span class="coltop"></span>'.apply_filters("the_content",do_shortcode($content)).'</div>';
}
add_shortcode('col','_sc_col');
add_shortcode('col2','_sc_col');

function _sc_col3($atts,$content) {
	if($atts===""):
		$atts = array("");
	endif;
	$first = "";
	return $first.'<div class="col3 '.implode(" ",(array)$atts).'"><span class="coltop"></span>'.apply_filters("the_content",do_shortcode($content)).'</div>';
}
add_shortcode('col3','_sc_col3');

function _sc_col4($atts,$content) {
	if($atts===""):
		$atts = array("");
	endif;
	$first = "";
	return $first.'<div class="col4 '.implode(" ",(array)$atts).'"><span class="coltop"></span>'.apply_filters("the_content",do_shortcode($content)).'</div>';
}
add_shortcode('col4','_sc_col4');

function _sc_button($atts,$content) {
	return do_shortcode(str_replace('<a href=','<a class="button" href=',$content));
}
add_shortcode('button','_sc_button');
add_shortcode('bt','_sc_button');

function _sc_small($atts,$content) {
	return '<small>'.do_shortcode($content).'</small>';
}
add_shortcode('small','_sc_small');

function the_content_filter($content) {

	// array of custom shortcodes requiring the fix
	$block = join("|",array("col","box"));

	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);

	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);

	return $rep;

}

add_filter("the_content", "the_content_filter");
?>
