<?php
/**
 * Title: Donate & Support CTA
 * Slug: okfn-chapter/donate-cta
 * Categories: okfn
 * Description: Support and donation section with customizable contribution tiers and payment methods.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Donate & Support CTA"},"align":"wide","className":"okfn-tighten okfn-donate-section is-style-orb-purple","layout":{"type":"constrained","contentSize":"56rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide okfn-tighten okfn-donate-section is-style-orb-purple" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e( 'Help Us Build an Open Future', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Your contribution funds independent research, open data advocacy, and digital freedom initiatives.', 'okfn-chapter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"okfn-donate-box","layout":{"type":"constrained"}} -->
	<div class="wp-block-group okfn-donate-box">
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-fill-white"} -->
			<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/donera/' ) ); ?>"><?php esc_html_e( 'One-time Donation', 'okfn-chapter' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/donera/' ) ); ?>"><?php esc_html_e( 'Become a Member', 'okfn-chapter' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:paragraph {"align":"center","className":"okfn-donate-meta"} -->
		<p class="has-text-align-center okfn-donate-meta"><?php esc_html_e( 'Supports Card, Bankgiro, Swish, SEPA transfer, and PayPal.', 'okfn-chapter' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
