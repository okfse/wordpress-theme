<?php
/**
 * Title: Pill buttons
 * Slug: okfn-chapter/pill-buttons
 * Categories: okfn
 * Description: Solid, white-fill, and outline pill buttons.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
	<!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get involved', 'okfn-chapter' ); ?></a></div>
	<!-- /wp:button -->

	<!-- wp:button {"className":"is-style-fill-white"} -->
	<div class="wp-block-button is-style-fill-white"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read more', 'okfn-chapter' ); ?></a></div>
	<!-- /wp:button -->

	<!-- wp:button {"className":"is-style-pill"} -->
	<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Website', 'okfn-chapter' ); ?></a></div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
