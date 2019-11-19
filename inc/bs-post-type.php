<?php

if (!defined('ABSPATH')) exit;

add_action('init', 'my_custom_init');
function my_custom_init()
{
	register_post_type('product', array(
		'labels' => array(
			'name' => __('Product', 'bs-brother'), // Основное название типа записи
			'singular_name' => __('Product', 'bs-brother'), // отдельное название записи типа Book
			'add_new' => __('Add new', 'bs-brother'),
			'add_new_item' => __('Add new', 'bs-brother'),
			'edit_item' => __('Edit new', 'bs-brother'),
			'new_item' => __('New item', 'bs-brother'),
			'view_item' => __('View', 'bs-brother'),
			'search_items' => __('Search', 'bs-brother'),
			'parent_item_colon' => '',
			'menu_name' => __('Product', 'bs-brother')

		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'menu_icon' => get_template_directory_uri() . '/site/assets/i/product.png',
		'supports' => array('title', 'editor', 'thumbnail')
	));
}
