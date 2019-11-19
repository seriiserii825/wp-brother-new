<?php

if (!defined('ABSPATH')) exit;

if ( ! function_exists( 'bs_brother_setup' ) ) :
	function bs_brother_setup() {
		load_theme_textdomain( 'bs-brother', get_template_directory() . '/languages' );

// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bs-brother' ),
			'menu-footer-info' => esc_html__( 'Menu footer info', 'bs-brother' ),
			'menu-about' => esc_html__( 'Menu about', 'bs-brother' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bs_brother_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bs_brother_setup' );
