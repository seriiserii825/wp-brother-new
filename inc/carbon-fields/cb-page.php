<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_blocks_link_options');
function crb_blocks_link_options()
{
	Container::make('post_meta', __('Block title and short text'))
		->where('post_id', '=', 45)
		->or_where('post_id', '=', 49)
		->or_where('post_term', '=', array(
			'field' => 'slug',
			'value' => 'about-brother',
			'taxonomy' => 'category',
		))
		->add_fields(array(
			Field::make('text', 'crb_block_title_ro', __('crb_block_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_block_title_ru', __('crb_block_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_block_title_en', __('crb_block_title_en'))
				->set_width(30),

			Field::make('text', 'crb_block_subtitle_ro', __('crb_block_subtitle_ro'))
				->set_width(30),
			Field::make('text', 'crb_block_subtitle_ru', __('crb_block_subtitle_ru'))
				->set_width(30),
			Field::make('text', 'crb_block_subtitle_en', __('crb_block_subtitle_en'))
				->set_width(30),

			Field::make('textarea', 'crb_block_short_text_ro', __('crb_block_short_text_ro'))
				->set_width(30),
			Field::make('textarea', 'crb_block_short_text_ru', __('crb_block_short_text_ru'))
				->set_width(30),
			Field::make('textarea', 'crb_block_short_text_en', __('crb_block_short_text_en'))
				->set_width(30),
		));
}

add_action('carbon_fields_register_fields', 'crb_products_page_title_options');
function crb_products_page_title_options()
{
	Container::make('post_meta', __('Product pages title'))
		->where('post_id', '=', 45)
		->or_where('post_id', '=', 49)
		->or_where('post_id', '=', 107)
		->or_where('post_id', '=', 112)
		->add_fields(array(
			Field::make('text', 'crb_product_page_link_title_ro', __('crb_product_page_link_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_product_page_link_title_ru', __('crb_product_page_link_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_product_page_link_title_en', __('crb_product_page_link_title_en'))
				->set_width(30),
		));
}

add_action('carbon_fields_register_fields', 'crb_where_to_buy_page_title_options');
function crb_where_to_buy_page_title_options()
{
	Container::make('post_meta', __('Where to buy page title'))
		->where('post_id', '=', 112)
		->or_where('post_id', '=', 107)
		->add_tab(('Page title'), array(
			Field::make('text', 'crb_where_to_buy_title_ro', __('crb_where_to_buy_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_where_to_buy_title_ru', __('crb_where_to_buy_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_where_to_buy_title_en', __('crb_where_to_buy_title_en'))
				->set_width(30),

		))
		->add_tab(('Brand title'), array(
			Field::make('text', 'crb_where_to_buy_page_brand_title_ro', __('crb_where_to_buy_page_brand_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_where_to_buy_page_brand_title_ru', __('crb_where_to_buy_page_brand_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_where_to_buy_page_brand_title_en', __('crb_where_to_buy_page_brand_title_en'))
				->set_width(30),

			Field::make('text', 'crb_where_to_buy_page_brand_subtitle_ro', __('crb_where_to_buy_page_brand_subtitle_ro'))
				->set_width(30),
			Field::make('text', 'crb_where_to_buy_page_brand_subtitle_ru', __('crb_where_to_buy_page_brand_subtitle_ru'))
				->set_width(30),
			Field::make('text', 'crb_where_to_buy_page_brand_subtitle_en', __('crb_where_to_buy_page_brand_subtitle_en'))
				->set_width(30),

		))
		->add_tab(('Short text'), array(
			Field::make('textarea', 'crb_where_to_buy_page_short_text_ro', __('crb_where_to_buy_page_short_text_ro'))
				->set_width(30),
			Field::make('textarea', 'crb_where_to_buy_page_short_text_ru', __('crb_where_to_buy_page_short_text_ru'))
				->set_width(30),
			Field::make('textarea', 'crb_where_to_buy_page_short_text_en', __('crb_where_to_buy_page_short_text_en'))
				->set_width(30),

		));

}

add_action('carbon_fields_register_fields', 'crb_about_page_options');
function crb_about_page_options()
{
	Container::make('post_meta', __('About banner'))
		->where('post_id', '=', 517)
		->add_tab(('Banner'), array(
			Field::make('rich_text', 'crb_about_banner_ro', __('crb_about_banner_ro')),
			Field::make('rich_text', 'crb_about_banner_ru', __('crb_about_banner_ru')),
			Field::make('rich_text', 'crb_about_banner_en', __('crb_about_banner_en')),
		));

}

add_action('carbon_fields_register_fields', 'crb_contacts_page_options');
function crb_contacts_page_options()
{
	Container::make('post_meta', __('About banner'))
		->where('post_id', '=', 26)
		->add_tab(('Alternativ text'), array(
			Field::make('text', 'crb_contacts_title_ro', __('crb_contacts_title_ro'))
				->set_width(30),
			Field::make('text', 'crb_contacts_title_ru', __('crb_contacts_title_ru'))
				->set_width(30),
			Field::make('text', 'crb_contacts_title_en', __('crb_contacts_title_en'))
				->set_width(30),
		));

}
