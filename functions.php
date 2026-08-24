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

/**
 * Preloads critical self-hosted webfonts in <head> for fast LCP and zero CLS.
 *
 * @return void
 */
function okfn_chapter_preload_fonts() {
	$theme_uri = get_template_directory_uri();
	printf(
		'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin />' . "\n",
		esc_url( $theme_uri . '/assets/fonts/hk-grotesk/HKGrotesk-Regular.woff2' )
	);
	printf(
		'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin />' . "\n",
		esc_url( $theme_uri . '/assets/fonts/hk-grotesk/HKGrotesk-Bold.woff2' )
	);
}
add_action( 'wp_head', 'okfn_chapter_preload_fonts', 1 );

/**
 * Checks if a dedicated third-party SEO plugin is active.
 *
 * @return bool
 */
function okfn_chapter_has_seo_plugin() {
	return defined( 'WPSEO_VERSION' )
		|| class_exists( 'RankMath' )
		|| defined( 'SEOPRESS_VERSION' )
		|| class_exists( 'AIOSEO\Plugin\AIOSEO' );
}

/**
 * Outputs Open Graph and Twitter Card meta tags when no SEO plugin is active.
 *
 * @return void
 */
function okfn_chapter_meta_tags() {
	if ( okfn_chapter_has_seo_plugin() ) {
		return;
	}

	$site_name   = get_bloginfo( 'name' );
	$description = get_bloginfo( 'description' );
	$url         = home_url( '/' );
	$type        = 'website';
	$title       = wp_get_document_title();
	$image       = '';

	if ( is_singular() ) {
		$type = 'article';
		$url  = get_permalink();
		if ( has_post_thumbnail() ) {
			$image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
		}
		$excerpt = get_the_excerpt();
		if ( $excerpt ) {
			$description = wp_strip_all_tags( $excerpt );
		}
	}

	if ( ! $image ) {
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		if ( $custom_logo_id ) {
			$image = wp_get_attachment_image_url( $custom_logo_id, 'full' );
		} else {
			$image = get_template_directory_uri() . '/screenshot.png';
		}
	}

	printf( '<meta property="og:site_name" content="%s" />' . "\n", esc_attr( $site_name ) );
	printf( '<meta property="og:type" content="%s" />' . "\n", esc_attr( $type ) );
	printf( '<meta property="og:title" content="%s" />' . "\n", esc_attr( $title ) );
	if ( $description ) {
		printf( '<meta property="og:description" content="%s" />' . "\n", esc_attr( $description ) );
		printf( '<meta name="description" content="%s" />' . "\n", esc_attr( $description ) );
	}
	printf( '<meta property="og:url" content="%s" />' . "\n", esc_url( $url ) );
	if ( $image ) {
		printf( '<meta property="og:image" content="%s" />' . "\n", esc_url( $image ) );
	}

	echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
	printf( '<meta name="twitter:title" content="%s" />' . "\n", esc_attr( $title ) );
	if ( $description ) {
		printf( '<meta name="twitter:description" content="%s" />' . "\n", esc_attr( $description ) );
	}
	if ( $image ) {
		printf( '<meta name="twitter:image" content="%s" />' . "\n", esc_url( $image ) );
	}
}
add_action( 'wp_head', 'okfn_chapter_meta_tags', 5 );

/**
 * Outputs Schema.org JSON-LD structured data when no SEO plugin is active.
 *
 * @return void
 */
function okfn_chapter_schema_json_ld() {
	if ( okfn_chapter_has_seo_plugin() ) {
		return;
	}

	$site_url  = home_url( '/' );
	$site_name = get_bloginfo( 'name' );

	$schema = array(
		'@context' => 'https://schema.org',
		'@graph'   => array(),
	);

	$org_schema = array(
		'@type' => 'Organization',
		'@id'   => $site_url . '#organization',
		'name'  => $site_name,
		'url'   => $site_url,
	);

	$custom_logo_id = get_theme_mod( 'custom_logo' );
	if ( $custom_logo_id ) {
		$logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
		if ( $logo_url ) {
			$org_schema['logo'] = array(
				'@type' => 'ImageObject',
				'url'   => $logo_url,
			);
		}
	}

	$schema['@graph'][] = $org_schema;

	$schema['@graph'][] = array(
		'@type'           => 'WebSite',
		'@id'             => $site_url . '#website',
		'url'             => $site_url,
		'name'            => $site_name,
		'publisher'       => array(
			'@id' => $site_url . '#organization',
		),
		'potentialAction' => array(
			'@type'       => 'SearchAction',
			'target'      => $site_url . '?s={search_term_string}',
			'query-input' => 'required name=search_term_string',
		),
	);

	if ( is_singular( 'post' ) ) {
		$post_id = get_the_ID();
		$article = array(
			'@type'            => 'BlogPosting',
			'@id'              => get_permalink() . '#article',
			'isPartOf'         => array( '@id' => $site_url . '#website' ),
			'headline'         => get_the_title(),
			'datePublished'    => get_the_date( 'c' ),
			'dateModified'     => get_the_modified_date( 'c' ),
			'mainEntityOfPage' => get_permalink(),
			'publisher'        => array( '@id' => $site_url . '#organization' ),
			'author'           => array(
				'@type' => 'Person',
				'name'  => get_the_author_meta( 'display_name', get_post_field( 'post_author', $post_id ) ),
			),
		);

		if ( has_post_thumbnail( $post_id ) ) {
			$thumb_url = get_the_post_thumbnail_url( $post_id, 'full' );
			if ( $thumb_url ) {
				$article['image'] = $thumb_url;
			}
		}

		$excerpt = get_the_excerpt( $post_id );
		if ( $excerpt ) {
			$article['description'] = wp_strip_all_tags( $excerpt );
		}

		$schema['@graph'][] = $article;
	}

	printf(
		'<script type="application/ld+json">%s</script>' . "\n",
		wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE )
	);
}
add_action( 'wp_head', 'okfn_chapter_schema_json_ld', 10 );

/**
 * Detects if the current visitor is a search engine spider or crawler.
 *
 * @return bool
 */
function okfn_chapter_is_bot() {
	if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
		return false;
	}

	$user_agent = strtolower( wp_unslash( $_SERVER['HTTP_USER_AGENT'] ) );
	$bots       = array( 'googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider', 'yandexbot', 'sogou', 'exabot', 'facebot', 'facebookexternalhit', 'ia_archiver' );

	foreach ( $bots as $bot ) {
		if ( str_contains( $user_agent, $bot ) ) {
			return true;
		}
	}

	return false;
}

/**
 * Returns the visitor's preferred language code based on cookie or Accept-Language header.
 *
 * @param array $supported Array of supported language codes (e.g. array('es', 'en')).
 * @param string $default Default language code.
 * @return string
 */
function okfn_chapter_get_browser_language( $supported = array( 'es', 'en' ), $default = 'es' ) {
	if ( ! empty( $_COOKIE['okfn_lang'] ) && in_array( $_COOKIE['okfn_lang'], $supported, true ) ) {
		return sanitize_key( $_COOKIE['okfn_lang'] );
	}

	if ( ! empty( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) ) {
		$accept = strtolower( wp_unslash( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) );
		foreach ( $supported as $lang ) {
			if ( str_starts_with( $accept, $lang ) || str_contains( $accept, ',' . $lang ) || str_contains( $accept, ';' . $lang ) ) {
				return $lang;
			}
		}
	}

	return $default;
}

/**
 * Outputs bidirectional SEO hreflang tags in <head>.
 *
 * @return void
 */
function okfn_chapter_hreflang_tags() {
	if ( function_exists( 'pll_the_languages' ) ) {
		return;
	}

	$site_url = home_url( '/' );
	$es_url   = $site_url;
	$en_url   = home_url( '/en/' );

	printf( '<link rel="alternate" hreflang="es" href="%s" />' . "\n", esc_url( $es_url ) );
	printf( '<link rel="alternate" hreflang="en" href="%s" />' . "\n", esc_url( $en_url ) );
	printf( '<link rel="alternate" hreflang="x-default" href="%s" />' . "\n", esc_url( $site_url ) );
}
add_action( 'wp_head', 'okfn_chapter_hreflang_tags', 2 );


