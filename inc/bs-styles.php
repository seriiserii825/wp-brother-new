<?php

function bs_brother_scripts() {
	wp_enqueue_style( 'bs-brother-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-tooltipster-style', get_template_directory_uri().'/site/assets/libs/tooltipster/tooltipster.main.min.css' );
	wp_enqueue_style( 'bs-my-style', get_template_directory_uri().'/site/assets/css/my.css' );
	wp_enqueue_style( 'bs-media-style', get_template_directory_uri().'/site/assets/css/bs-media.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bs-brother-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bs-jquery.easeScroll', get_template_directory_uri() . '/site/assets/libs/jquery-easy-scroll/jquery.easeScroll.js', ['jquery'], null, true );
	wp_enqueue_script( 'bs-tooltipster.main.min', get_template_directory_uri() . '/site/assets/libs/tooltipster/tooltipster.main.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'bs-slick.min', get_template_directory_uri() . '/site/assets/libs/slick/slick/slick.min.js', ['jquery'], null, true );
	wp_enqueue_script( 'bs-main', get_template_directory_uri() . '/site/assets/js/main.js', ['jquery'], null, true );

	wp_enqueue_script( 'bs-brother-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bs_brother_scripts' );
