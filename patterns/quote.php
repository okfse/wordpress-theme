<?php
/**
 * Title: Quote
 * Slug: okfn-chapter/quote
 * Categories: okfn
 * Description: Large quote with a mono citation.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Quote"},"className":"okfn-quote okfn-tighten","layout":{"type":"constrained"}} -->
<div class="wp-block-group okfn-quote okfn-tighten">
	<!-- wp:quote -->
	<blockquote class="wp-block-quote">
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'We believe open knowledge can empower everyone.', 'okfn-chapter' ); ?></p>
		<!-- /wp:paragraph -->
		<cite><?php esc_html_e( 'Open Knowledge Network', 'okfn-chapter' ); ?></cite>
	</blockquote>
	<!-- /wp:quote -->
</div>
<!-- /wp:group -->
