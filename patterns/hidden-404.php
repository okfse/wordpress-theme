<?php
/**
 * Title: 404
 * Slug: okfn-chapter/hidden-404
 * Inserter: no
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"className":"is-style-orb-purple okfn-tighten","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group is-style-orb-purple okfn-tighten" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
	<h1 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'Page not found', 'okfn-chapter' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'The page you are looking for does not exist or has been moved.', 'okfn-chapter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back home', 'okfn-chapter' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
