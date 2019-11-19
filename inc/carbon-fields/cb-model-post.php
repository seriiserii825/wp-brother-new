<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_model_post_options' );
function crb_model_post_options() {
	Container::make( 'post_meta', __( 'Model short text' ) )
	         ->or_where( 'post_term', '=', array(
		         'field'    => 'slug',
		         'value'    => 'industrial-sewing-machines',
		         'taxonomy' => 'model',
	         ) )
	         ->add_fields( array(
		         Field::make( 'textarea', 'crb_model_short_text_ro', __( 'crb_model_short_text_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_model_short_text_ru', __( 'crb_model_short_text_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_model_short_text_en', __( 'crb_model_short_text_en' ) )
		              ->set_width( 30 ),

		         Field::make( 'separator', 'crb_product_single_sep_1', __( 'Product slider' ) ),
		         Field::make( 'complex', 'crb_product_slider', __( 'Product slider' ) )
		              ->add_fields( array(
			              Field::make( 'image', 'image', __( 'Image' ) )
			                   ->set_help_text( '940x346' )
			                   ->set_value_type( 'url' )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),

		         Field::make( 'separator', 'crb_product_single_sep_3', __( 'Single product banner' ) ),
		         Field::make( 'complex', 'crb_single_product_banner', __( 'Single product banner' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'name', __( 'filename' ) ),
			              Field::make( 'text', 'crb_file', __( 'File' ) )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),

		         Field::make( 'separator', 'crb_product_single_sep_4', __( 'Button to update' ) ),
		         Field::make( 'text', 'crb_product_singel_update_button_link', __( 'Button to update link' ) ),

		         Field::make( 'separator', 'crb_product_single_sep_2', __( 'Product table' ) ),
		         Field::make( 'complex', 'crb_product_table', __( 'Product table' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'td_1_ro', __( 'td_1_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_1_ru', __( 'td_1_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_1_en', __( 'td_1_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_2_ro', __( 'td_2_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_2_ru', __( 'td_2_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_2_en', __( 'td_2_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_3_ro', __( 'td_3_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_3_ru', __( 'td_3_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_3_en', __( 'td_3_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_4_ro', __( 'td_4_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_4_ru', __( 'td_4_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_4_en', __( 'td_4_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_5_ro', __( 'td_5_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_5_ru', __( 'td_5_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_5_en', __( 'td_5_en' ) )
			                   ->set_width( 30 ),

			              Field::make( 'text', 'td_6_ro', __( 'td_6_ro' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_6_ru', __( 'td_6_ru' ) )
			                   ->set_width( 30 ),
			              Field::make( 'text', 'td_6_en', __( 'td_6_en' ) )
			                   ->set_width( 30 ),

		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_model_post_garment_options' );
function crb_model_post_garment_options() {
	Container::make( 'post_meta', __( 'Model short text' ) )
	         ->or_where( 'post_term', '=', array(
		         'field'    => 'slug',
		         'value'    => 'industrial-garment-printers',
		         'taxonomy' => 'model',
	         ) )
	         ->add_tab( 'Button to update', array(
		         Field::make( 'separator', 'crb_product_single_sep_4', __( 'Button to update' ) ),
		         Field::make( 'text', 'crb_product_singel_update_button_link', __( 'Button to update link' ) ),
	         ) )
	         ->add_tab( __( 'Short text' ), array(
		         Field::make( 'textarea', 'crb_model_short_text_ro', __( 'crb_model_short_text_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_model_short_text_ru', __( 'crb_model_short_text_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_model_short_text_en', __( 'crb_model_short_text_en' ) )
		              ->set_width( 30 ),
	         ) )
	         ->add_tab( __( 'Tabs' ), array(
		         Field::make( 'complex', 'crb_product_tabs', __( 'Product tabs' ) )
		              ->add_fields( array(
			              Field::make( 'radio', 'crb_radio', __( 'Choose Option' ) )
			                   ->set_options( array(
				                   'Overview'       => 'Overview',
				                   'Specifications' => 'Specifications',
				                   'Optional Accessories'    => 'Optional Accessories',
				                   'Optional Software'       => 'Optional Software',
				                   'Video'          => 'Video',
				                   'Support Documents'      => 'Support Documents',
			                   ) ),

			              Field::make( 'rich_text', 'crb_product_overview_ro', 'Overview ro' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Overview',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_overview_ru', 'Overview ru' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Overview',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_overview_en', 'Overview en' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Overview',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),

			              Field::make( 'rich_text', 'crb_product_specifications_ro', 'Specifications ro' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Specifications',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_specifications_ru', 'Specifications ru' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Specifications',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_specifications_en', 'Specifications en' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Specifications',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),

			              Field::make( 'rich_text', 'crb_product_accesories_ro', 'Optional Accessories ro' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Optional Accessories',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_accesories_ru', 'Optional Accessories ru' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Optional Accessories',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_accesories_en', 'Optional Accessories en' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Optional Accessories',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),

			              Field::make( 'rich_text', 'crb_product_software_ro', 'Optional Software ro' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Optional Software',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_software_ru', 'Optional Software ru' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Optional Software',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_software_en', 'Optional Software en' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Optional Software',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),

			              Field::make( 'rich_text', 'crb_product_video_ro', 'Video ro' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Video',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_video_ru', 'Video ru' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Video',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_video_en', 'Video en' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Video',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),

			              Field::make( 'rich_text', 'crb_product_documents_ro', 'Support Documents ro' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Support Documents',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_documents_ru', 'Support Documents ru' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Support Documents',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
			              Field::make( 'rich_text', 'crb_product_documents_en', 'Support Documents en' )
			                   ->set_conditional_logic( array(
				                   'relation' => 'AND', // Optional, defaults to "AND"
				                   array(
					                   'field'   => 'crb_radio',
					                   'value'   => 'Support Documents',
					                   // Optional, defaults to "". Should be an array if "IN" or "NOT IN" operators are used.
					                   'compare' => '=',
					                   // Optional, defaults to "=". Available operators: =, <, >, <=, >=, IN, NOT IN
				                   )
			                   ) ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) )
	         ->add_tab( __( 'Slider' ), array(
		         Field::make( 'complex', 'crb_product_slider', __( 'Product slider' ) )
		              ->add_fields( array(
			              Field::make( 'image', 'image', __( 'Image' ) )
			                   ->set_help_text( '940x346' )
			                   ->set_value_type( 'url' )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) )
	         ->add_tab( __( 'Banner' ), array(
		         Field::make( 'complex', 'crb_single_product_banner', __( 'Single product banner' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'name', __( 'filename' ) ),
			              Field::make( 'text', 'crb_file', __( 'File link' ) )
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) );
}
