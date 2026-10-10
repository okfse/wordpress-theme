<?php
/**
 * Title: Language switcher
 * Slug: okfn-chapter/language-switcher
 * Categories: okfn
 * Description: Language switcher. Uses Polylang when that plugin is active. Otherwise shows Swedish at / and English at /en/.
 *
 * @package OKFN_Chapter
 */

?>
<?php if ( function_exists( 'pll_the_languages' ) ) : ?>
<!-- wp:polylang/language-switcher /-->
<?php else : ?>
<!-- wp:group {"metadata":{"name":"Language switcher"},"className":"okfn-lang-switcher okfn-lang-switcher--sample","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group okfn-lang-switcher okfn-lang-switcher--sample" role="navigation" aria-label="<?php echo esc_attr__( 'Language', 'okfn-chapter' ); ?>">
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item is-active"} -->
	<p class="okfn-lang-switcher__item is-active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="sv" lang="sv" aria-current="page">SV</a></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"okfn-lang-switcher__separator"} -->
	<p class="okfn-lang-switcher__separator" aria-hidden="true">|</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item"} -->
	<p class="okfn-lang-switcher__item"><a href="<?php echo esc_url( home_url( '/en/' ) ); ?>" hreflang="en" lang="en">EN</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endif; ?>
