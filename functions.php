<?php

/**
 * Load up the VIP code, without this VIP functions will fail,
 * and it must be the first thing loaded in functions.php
 */
require_once( WP_CONTENT_DIR . '/themes/vip/plugins/vip-init.php' );

/**
 * Now lets load our plugins, these should be in a subfolder,
 * in this theme that subfolder is "plugins", but it could be
 * something else
 *
 * For .com themes, there is no access to the main wp-content/plugins
 * or mu-plugins folder, so plugins you would like to use
 * need to be bundled with the theme. You don't need to do this for
 * Jetpack and other shared plugins already on .com
 */
require_once( dirname( __FILE__ ) . '/plugins/hello.php' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mvp_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mvp_setup' );

/**
 * Enqueue scripts and styles.
 */
function mvp_scripts() {
	wp_enqueue_style( 'mvp-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mvp_scripts' );
