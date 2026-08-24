<?php
/**
 * Title: Page closing
 * Slug: okfn-chapter/page-closing
 * Categories: okfn
 * Description: Donate or support closing band with a large heading and button.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Page closing"},"className":"okfn-page-closing is-style-orb-green","align":"wide","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide okfn-page-closing is-style-orb-green" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo wp_kses_post( __( 'Support a fair, free and <strong>open</strong> future.', 'okfn-chapter' ) ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/donera/' ) ); ?>"><?php esc_html_e( 'Donate now', 'okfn-chapter' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
