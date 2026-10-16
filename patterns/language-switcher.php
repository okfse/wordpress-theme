<?php
/**
 * Title: Language switcher
 * Slug: okfn-chapter/language-switcher
 * Categories: okfn
 * Description: Language switcher. Uses Polylang when that plugin is active. Otherwise shows Swedish at / and English at /en/.
 *
 * @package OKFN_Chapter
 */

// English on okfn.se is a page tree under /en/, not a Polylang locale.
$current_path = wp_parse_url( add_query_arg( array() ), PHP_URL_PATH );
$home_path    = wp_parse_url( home_url( '/' ), PHP_URL_PATH );
$current_path = is_string( $current_path ) ? $current_path : '/';
$home_path    = is_string( $home_path ) ? untrailingslashit( $home_path ) : '';
if ( '' !== $home_path && str_starts_with( $current_path, $home_path ) ) {
	$current_path = substr( $current_path, strlen( $home_path ) );
}
$current_path = '/' . ltrim( $current_path, '/' );
$on_english   = ! function_exists( 'pll_the_languages' )
	&& ( str_starts_with( $current_path, '/en/' ) || '/en' === untrailingslashit( $current_path ) );
?>
<?php if ( function_exists( 'pll_the_languages' ) ) : ?>
<!-- wp:polylang/language-switcher /-->
<?php else : ?>
<!-- wp:group {"metadata":{"name":"Language switcher"},"className":"okfn-lang-switcher","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group okfn-lang-switcher" role="navigation" aria-label="<?php echo esc_attr__( 'Language', 'okfn-chapter' ); ?>">
	<?php if ( $on_english ) : ?>
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item"} -->
	<p class="okfn-lang-switcher__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="sv" lang="sv">SV</a></p>
	<!-- /wp:paragraph -->
	<?php else : ?>
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item is-active"} -->
	<p class="okfn-lang-switcher__item is-active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="sv" lang="sv" aria-current="true">SV</a></p>
	<!-- /wp:paragraph -->
	<?php endif; ?>

	<!-- wp:paragraph {"className":"okfn-lang-switcher__separator"} -->
	<p class="okfn-lang-switcher__separator" aria-hidden="true">|</p>
	<!-- /wp:paragraph -->

	<?php if ( $on_english ) : ?>
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item is-active"} -->
	<p class="okfn-lang-switcher__item is-active"><a href="<?php echo esc_url( home_url( '/en/' ) ); ?>" hreflang="en" lang="en" aria-current="true">EN</a></p>
	<!-- /wp:paragraph -->
	<?php else : ?>
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item"} -->
	<p class="okfn-lang-switcher__item"><a href="<?php echo esc_url( home_url( '/en/' ) ); ?>" hreflang="en" lang="en">EN</a></p>
	<!-- /wp:paragraph -->
	<?php endif; ?>
</div>
<!-- /wp:group -->
<?php endif; ?>
