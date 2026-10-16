<?php
/**
 * Title: Language switcher
 * Slug: okfn-chapter/language-switcher
 * Categories: okfn
 * Description: Language switcher. Uses Polylang when that plugin is active. Otherwise shows a labelled example pair for editors to replace.
 *
 * @package OKFN_Chapter
 */

?>
<?php if ( function_exists( 'pll_the_languages' ) ) : ?>
<!-- wp:polylang/language-switcher /-->
<?php else : ?>
<!-- wp:group {"metadata":{"name":"Language switcher"},"className":"okfn-lang-switcher okfn-lang-switcher--sample","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group okfn-lang-switcher okfn-lang-switcher--sample" role="navigation" aria-label="<?php echo esc_attr__( 'Example language switcher', 'okfn-chapter' ); ?>">
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item"} -->
	<p class="okfn-lang-switcher__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="en" lang="en">EN</a></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"okfn-lang-switcher__separator"} -->
	<p class="okfn-lang-switcher__separator" aria-hidden="true">|</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item"} -->
	<p class="okfn-lang-switcher__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Add language', 'okfn-chapter' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endif; ?>
