<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_events_posts_options' );
function crb_events_posts_options() {
	Container::make( 'post_meta', __( 'Block title and short text' ) )
	         ->or_where( 'post_term', '=', array(
		         'field'    => 'slug',
		         'value'    => 'events',
		         'taxonomy' => 'category',
	         ) )
	         ->add_fields( array(
		         Field::make( 'text', 'crb_data_events', __( 'crb_data' ) ),

		         Field::make( 'textarea', 'crb_short_text_ro', __( 'crb_short_text_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_short_text_ru', __( 'crb_short_text_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'textarea', 'crb_short_text_en', __( 'crb_short_text_en' ) )
		              ->set_width( 30 ),
	         ) );
}

