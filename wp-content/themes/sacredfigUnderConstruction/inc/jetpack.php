<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ae_boilerplate
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ae_boilerplate_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ae_boilerplate_jetpack_setup' );
