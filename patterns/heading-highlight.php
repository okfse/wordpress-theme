<?php
/**
 * Title: Heading highlight
 * Slug: okfn-chapter/heading-highlight
 * Categories: okfn
 * Description: Centered heading using the Necto Mono highlight style.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Heading highlight"},"className":"okfn-tighten","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group okfn-tighten" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","className":"is-style-highlight","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center is-style-highlight has-xx-large-font-size"><?php esc_html_e( 'Open knowledge can be created and applied in many ways.', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
