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
	$languages = get_template_directory() . '/languages';
	load_theme_textdomain( 'okfn-chapter', $languages );

	/*
	 * Inside a theme, just-in-time loading looks for languages/{locale}.mo.
	 * These catalogs are named okfn-chapter-{locale}.l10n.php, which is what
	 * load_textdomain() reads when given the matching .mo path.
	 */
	$locale          = determine_locale();
	$mofile          = $languages . '/okfn-chapter-' . $locale . '.mo';
	$php_translation = substr( $mofile, 0, -3 ) . '.l10n.php';
	if ( is_readable( $php_translation ) || is_readable( $mofile ) ) {
		load_textdomain( 'okfn-chapter', $mofile );
	}

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
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
		'okfn-chapter-tokens',
		get_template_directory_uri() . '/styles/tokens.css',
		array(),
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
 * Chapter contact address. Chapters replace the example via the filter.
 *
 * @return string
 */
function okfn_chapter_contact_email() {
	return apply_filters( 'okfn_chapter_contact_email', 'contact@example.org' );
}

/**
 * Social profiles used by the footer and by Organization schema.
 *
 * URLs containing "example" are placeholders. sameAs omits those.
 *
 * @return array<int, array{service: string, url: string}>
 */
function okfn_chapter_social_links() {
	$links = array(
		array(
			'service' => 'mastodon',
			'url'     => 'https://mastodon.social/@example',
		),
		array(
			'service' => 'github',
			'url'     => 'https://github.com/example',
		),
		array(
			'service' => 'linkedin',
			'url'     => 'https://www.linkedin.com/company/example/',
		),
		array(
			'service' => 'x',
			'url'     => 'https://x.com/example',
		),
	);

	return apply_filters( 'okfn_chapter_social_links', $links );
}

/**
 * Donate page used by the closing band and the donate pattern.
 *
 * @return string
 */
function okfn_chapter_donate_url() {
	return apply_filters( 'okfn_chapter_donate_url', home_url( '/donate/' ) );
}

/**
 * Newsletter destination. Point this at the chapter list, not the Foundation list.
 *
 * @return string
 */
function okfn_chapter_newsletter_url() {
	return apply_filters( 'okfn_chapter_newsletter_url', home_url( '/contact/' ) );
}

/**
 * Preloads HK Grotesk Regular and Bold.
 *
 * Necto Mono stays off this path. It is only used for highlight headings and citations.
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
		}
	}

	$card = $image ? 'summary_large_image' : 'summary';

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

	printf( '<meta name="twitter:card" content="%s" />' . "\n", esc_attr( $card ) );
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
		'@type' => 'NonprofitOrganization',
		'@id'   => $site_url . '#organization',
		'name'  => $site_name,
		'url'   => $site_url,
	);

	$email = okfn_chapter_contact_email();
	if ( $email && ! str_contains( $email, 'example.org' ) ) {
		$org_schema['email'] = $email;
	}

	$same_as = array();
	foreach ( okfn_chapter_social_links() as $link ) {
		if ( empty( $link['url'] ) || str_contains( $link['url'], 'example' ) ) {
			continue;
		}
		$same_as[] = $link['url'];
	}
	if ( $same_as ) {
		$org_schema['sameAs'] = $same_as;
	}

	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo_url       = $custom_logo_id ? wp_get_attachment_image_url( $custom_logo_id, 'full' ) : '';
	if ( ! $logo_url ) {
		$logo_url = get_template_directory_uri() . '/assets/images/lg-okfn.svg';
	}
	$org_schema['logo'] = array(
		'@type' => 'ImageObject',
		'url'   => $logo_url,
	);

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
 * Prints hreflang alternates from Polylang or from the okfn_chapter_language_alternates filter.
 *
 * The filter returns a map of language code to absolute URL, for example
 * array( 'en' => 'https://chapter.example/', 'sv' => 'https://chapter.example/sv/' ).
 * Without Polylang and without that map, the theme prints nothing.
 *
 * @return void
 */
function okfn_chapter_hreflang_tags() {
	if ( function_exists( 'pll_the_languages' ) ) {
		return;
	}

	$alternates = apply_filters( 'okfn_chapter_language_alternates', array() );
	if ( ! is_array( $alternates ) || ! $alternates ) {
		return;
	}

	foreach ( $alternates as $lang => $url ) {
		$lang = strtolower( (string) $lang );
		if ( ! preg_match( '/^[a-z]{2}(-[a-z0-9]+)?$/', $lang ) && 'x-default' !== $lang ) {
			continue;
		}
		if ( ! is_string( $url ) || '' === $url ) {
			continue;
		}
		printf(
			'<link rel="alternate" hreflang="%1$s" href="%2$s" />' . "\n",
			esc_attr( $lang ),
			esc_url( $url )
		);
	}
}
add_action( 'wp_head', 'okfn_chapter_hreflang_tags', 2 );
