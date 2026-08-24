<?php
/**
 * Title: Page opening
 * Slug: okfn-chapter/page-opening
 * Categories: okfn
 * Description: Centered page title with a supporting description and colour orb.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Page opening"},"className":"is-style-orb-green okfn-tighten","align":"wide","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide is-style-orb-green okfn-tighten" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
	<h1 class="wp-block-heading has-text-align-center has-huge-font-size"><?php esc_html_e( 'Who we are', 'okfn-chapter' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"x-large"} -->
	<p class="has-text-align-center has-x-large-font-size"><?php esc_html_e( 'A local chapter of the Open Knowledge Network, working in the open for public good.', 'okfn-chapter' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
