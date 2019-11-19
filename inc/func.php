<?php

if( ! defined('ABSPATH') ) exit;

function clear_phone($phone)
{
	return str_replace(['(', ')', '-', '+', ' '], '', $phone);
}

function vardump($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function carbon_lang()
{
	$suffix = '';
	if (!defined('ICL_LANGUAGE_CODE')) {
		return $suffix;
	}
	$suffix = '_' . ICL_LANGUAGE_CODE;
	return $suffix;
}

function trim_content($content, $count)
{
	$trimmed_content = wp_trim_words($content, $count, '<a href="' . get_permalink() . '"></a>');
	return $trimmed_content;
}

function get_lang()
{
	$suffix = '';

	if (get_locale() == 'en_US') {
		$suffix = '_en';
	}
	if (get_locale() == 'ru_RU') {
		$suffix = '_ru';
	}
	if (get_locale() == 'ro_RO') {
		$suffix = '_ro';
	}

	return strtolower($suffix);
}

function my_revisions_to_keep($revisions)
{
	return 2;
}

function getThePostThumbSrc($width, $height) {
	$id = get_the_ID();
	
	return kama_thumb_src( 'w='.$width.' &h='.$height.' &post_id=' . $id . '' );
}

add_filter('wp_revisions_to_keep', 'my_revisions_to_keep');

/**
 * @param $term_id
 * @param $taxonomy_model taxonomy model slug
 */
function showProductsBlocks($term_id, $taxonomy_model){
	$machine_term = get_term( $term_id );
	$html = '<h2 class="products-items__header">';
	echo $machine_term->name;
	$html .= '</h2>';

	$html .= '<div class="products-items__grid">';

	$machine = new WP_Query( [
		'post_type'      => 'product',
		'model'          => $taxonomy_model,
		'posts_per_page' => - 1
	] );

	if ( $machine->have_posts() ){
		while($machine->have_posts()){
			$machine->the_post();
			$html .= '<div class="products-items__item">';
			$html .= '<div class="products-items__img">';
			$html .= '<a href="'.get_the_permalink().'">';
			$html .=  kama_thumb_img( 'w=191 &h=146' );
			$html .= '</a>';
			$html .= '</div>';
			$html .= '<div class="products-items__content">';
			$html .= '<h3 class="products-items__title">';
			$html .= '<a href="'.get_the_permalink().'">';
			$html .= get_the_title();
			$html .= '</a>';
			$html .= '</h3>';
			$html .= '<p class="products-items__text">';
			$html .= carbon_get_the_post_meta( 'crb_model_short_text'.get_lang() );
			$html .= '</p>';
			$html .= '<a class="products-items__link" href="'. get_the_permalink().'">';
			$html .= carbon_get_theme_option( 'crb_more_info' . get_lang() );
			$html .= '</a>';
			$html .= '</div></div>';
		}
		wp_reset_postdata();
	}

	$html .= '</div>';
	echo $html;
}
function hs_image_editor_default_to_gd( $editors ) {
	$gd_editor = 'WP_Image_Editor_GD';
	$editors = array_diff( $editors, array( $gd_editor ) );
	array_unshift( $editors, $gd_editor );
	return $editors;
}
add_filter( 'wp_image_editors', 'hs_image_editor_default_to_gd' );

function showCities(){

}
