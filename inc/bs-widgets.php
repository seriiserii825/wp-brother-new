<?php

if (!defined('ABSPATH')) exit;

function bs_brother_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bs-brother' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bs-brother' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bs_brother_widgets_init' );

function bs_brother_widgets_language_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Language', 'bs-brother' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'bs_brother_widgets_language_init' );
