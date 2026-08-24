<?php
/**
 * Title: Language switcher
 * Slug: okfn-chapter/language-switcher
 * Categories: okfn
 * Description: Accessible bilingual language switcher (Spanish and English).
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Language switcher"},"className":"okfn-lang-switcher","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group okfn-lang-switcher" role="navigation" aria-label="<?php echo esc_attr__( 'Language / Idioma', 'okfn-chapter' ); ?>">
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item is-active"} -->
	<p class="okfn-lang-switcher__item is-active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" hreflang="es" lang="es">ES</a></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"okfn-lang-switcher__separator"} -->
	<p class="okfn-lang-switcher__separator" aria-hidden="true">|</p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"className":"okfn-lang-switcher__item"} -->
	<p class="okfn-lang-switcher__item"><a href="<?php echo esc_url( home_url( '/en/' ) ); ?>" hreflang="en" lang="en">EN</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
