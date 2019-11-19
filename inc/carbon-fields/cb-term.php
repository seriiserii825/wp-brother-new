<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_sewing_term_options' );
function crb_sewing_term_options() {
	Container::make( 'term_meta', __( 'Term page image' ) )
	         ->where( 'term_taxonomy', '=', 'model' )
	         ->add_fields( array(
		         Field::make( 'image', 'cb_sewing_term_image', __( 'Image' ) )
		              ->set_help_text( '941x346' )
		              ->set_value_type( 'url' )
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_events_category_options' );
function crb_events_category_options() {
	Container::make( 'term_meta', __( 'Term page image' ) )
	         ->where( 'term_taxonomy', '=', 'category' )
	         ->add_fields( array(
		         Field::make( 'image', 'cb_sewing_term_image', __( 'Image' ) )
		              ->set_help_text( '941x346' )
		              ->set_value_type( 'url' ),
		         Field::make( 'rich_text', 'crb_events_category_text_ro', __( 'crb_events_category_text_ro' ) ),
		         Field::make( 'rich_text', 'crb_events_category_text_ru', __( 'crb_events_category_text_ru' ) ),
		         Field::make( 'rich_text', 'crb_events_category_text_en', __( 'crb_events_category_text_en' ) ),
	         ) );
}
