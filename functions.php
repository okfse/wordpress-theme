<?php
/**
 * OK Network Chapter functions and definitions.
 *
 * @package OKFN_Chapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers support for WordPress features.
 *
 * @return void
 */
function okfn_chapter_setup() {
	load_theme_textdomain( 'okfn-chapter', get_template_directory() . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'styles/fonts.css' );
	add_editor_style( 'styles/tokens.css' );
	add_editor_style( 'styles/components.css' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 90,
			'width'       => 320,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'okfn_chapter_setup' );

/**
 * Enqueues front-end styles.
 *
 * @return void
 */
function okfn_chapter_enqueue_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'okfn-chapter-fonts',
		get_template_directory_uri() . '/styles/fonts.css',
		array(),
		$theme_version
	);

	wp_enqueue_style(
		'okfn-chapter-tokens',
		get_template_directory_uri() . '/styles/tokens.css',
		array( 'okfn-chapter-fonts' ),
		$theme_version
	);

	wp_enqueue_style(
		'okfn-chapter-components',
		get_template_directory_uri() . '/styles/components.css',
		array( 'okfn-chapter-tokens' ),
		$theme_version
	);
}
add_action( 'wp_enqueue_scripts', 'okfn_chapter_enqueue_styles' );

/**
 * Drops the core Google Fonts collection so Site Editor cannot pull remote webfonts.
 * HK Grotesk and Necto Mono are self-hosted under SIL OFL 1.1.
 *
 * @return void
 */
function okfn_chapter_disable_remote_font_collections() {
	if ( function_exists( 'wp_unregister_font_collection' ) ) {
		wp_unregister_font_collection( 'google-fonts' );
	}
}
add_action( 'init', 'okfn_chapter_disable_remote_font_collections' );

/**
 * Registers the OK Network pattern category.
 *
 * @return void
 */
function okfn_chapter_register_pattern_category() {
	register_block_pattern_category(
		'okfn',
		array(
			'label'       => __( 'OK Network', 'okfn-chapter' ),
			'description' => __( 'Chapter layouts ported from the Open Knowledge visual identity.', 'okfn-chapter' ),
		)
	);
}
add_action( 'init', 'okfn_chapter_register_pattern_category' );

/**
 * Registers block styles that match Django CMS components.
 *
 * @return void
 */
function okfn_chapter_register_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'pill',
			'label' => __( 'Pill', 'okfn-chapter' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'fill-white',
			'label' => __( 'White fill', 'okfn-chapter' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'highlight',
			'label' => __( 'Highlight (mono)', 'okfn-chapter' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'orb-blue',
			'label' => __( 'Blue orb', 'okfn-chapter' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'orb-green',
			'label' => __( 'Green orb', 'okfn-chapter' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'orb-purple',
			'label' => __( 'Purple orb', 'okfn-chapter' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'orb-yellow',
			'label' => __( 'Yellow orb', 'okfn-chapter' ),
		)
	);
}
add_action( 'init', 'okfn_chapter_register_block_styles' );

/**
 * Falls back to the bundled OKFN wordmark when no custom logo is set.
 *
 * @param string $html Custom logo HTML.
 * @return string
 */
function okfn_chapter_default_logo( $html ) {
	if ( $html ) {
		return $html;
	}

	$src = get_template_directory_uri() . '/assets/images/lg-okfn.svg';

	return sprintf(
		'<a href="%1$s" class="custom-logo-link" rel="home"><img src="%2$s" class="custom-logo" alt="%3$s" width="180" height="51"/></a>',
		esc_url( home_url( '/' ) ),
		esc_url( $src ),
		esc_attr( get_bloginfo( 'name' ) )
	);
}
add_filter( 'get_custom_logo', 'okfn_chapter_default_logo' );
