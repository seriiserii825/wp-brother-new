<?php

if (!defined('ABSPATH')) exit;

require_once __DIR__.'/inc/carbon-fields/cb.php';
require_once __DIR__.'/inc/carbon-fields/cb-page.php';
require_once __DIR__.'/inc/carbon-fields/cb-post-event.php';
require_once __DIR__.'/inc/carbon-fields/cb-term.php';
require_once __DIR__.'/inc/carbon-fields/cb-model-post.php';

require_once __DIR__.'/inc/func.php';
require_once __DIR__.'/inc/bs-setup.php';
require_once __DIR__.'/inc/bs-widgets.php';
require_once __DIR__.'/inc/bs-styles.php';
require_once __DIR__.'/inc/bs-post-type.php';
require_once __DIR__.'/inc/bs-taxonomy.php';

function bs_brother_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bs_brother_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs_brother_content_width', 0 );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}
function add_query_vars_filter( $vars ){
	$vars[] = "machine_type";
	return $vars;
}

add_filter( 'query_vars', 'add_query_vars_filter' );


function showCountries( $region_id, $machine_type, $region_slug) {
	$term_name = get_term( $region_id, 'categories' )->name; // название региона
	$html = '';

	$html .= '<h2 class="section__title">'.$term_name.'</h2>';

	$address_posts = new WP_Query( [
		'posts_per_page' => - 1,
		'post_type'      => 'address',
		'tax_query'      => [
			'relation' => 'AND',
			[
				'taxonomy' => 'categories',
				'field'    => 'slug',
				'terms'    => $region_slug,
			],
			[
				'taxonomy' => 'categories',
				'field'    => 'slug',
				'terms'    => $machine_type,
			]
		],
	] );
	$countries = [];

	$html .= '<ul>';
	global $post;

	if ( $address_posts->have_posts() ){
		while ( $address_posts->have_posts() ) {
			$address_posts->the_post();

			$terms = get_the_terms( $post->ID, 'categories' );
			foreach ( $terms as $term ) {
				if ( $term->slug === 'industrial-sewing-machines' || $term->slug == 'industrial-garment-printers' ) {
					continue;
				} else {
					$countries[ $term->name ] = $term->term_id;
				}
			}

		}
		wp_reset_postdata();

		$unique_data = array_unique( $countries );
		ksort( $unique_data );

		foreach ( $unique_data as $key => $item ) {
			add_query_arg( 'machine_type', $machine_type );
			$html .= '<li>';
			$html .= '<a href="'.esc_url( add_query_arg( 'machine_type', $machine_type, get_term_link( $item ) ) ).' ">'.$key.'</a>';
			$html .= '</li>';
		}
	}

	$html .= '</ul>';

	echo $html;
}
