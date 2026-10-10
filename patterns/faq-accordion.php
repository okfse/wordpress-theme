<?php
/**
 * Title: FAQ / Accordion
 * Slug: okfn-chapter/faq-accordion
 * Categories: okfn
 * Description: Accessible FAQ accordion using semantic details and summary elements.
 *
 * @package OKFN_Chapter
 */

?>
<!-- wp:group {"metadata":{"name":"FAQ / Accordion"},"align":"wide","className":"okfn-tighten okfn-faq-section","layout":{"type":"constrained","contentSize":"56rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide okfn-tighten okfn-faq-section" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Frequently Asked Questions', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Short answers editors can rewrite for this chapter.', 'okfn-chapter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<div class="okfn-accordion">
		<details class="okfn-accordion__item" open>
			<summary class="okfn-accordion__summary"><?php esc_html_e( 'What is open knowledge?', 'okfn-chapter' ); ?></summary>
			<div class="okfn-accordion__content">
				<p><?php esc_html_e( 'Open knowledge is content, information, or data that people are free to use, reuse, and share, without legal, technical, or social restrictions.', 'okfn-chapter' ); ?></p>
			</div>
		</details>

		<details class="okfn-accordion__item">
			<summary class="okfn-accordion__summary"><?php esc_html_e( 'How is this chapter related to the Open Knowledge Foundation?', 'okfn-chapter' ); ?></summary>
			<div class="okfn-accordion__content">
				<p><?php esc_html_e( 'This chapter is an independent non-profit in the Open Knowledge Network. The Open Knowledge Foundation is a separate organisation. It maintains shared tools and supports the network.', 'okfn-chapter' ); ?></p>
			</div>
		</details>

		<details class="okfn-accordion__item">
			<summary class="okfn-accordion__summary"><?php esc_html_e( 'How do I take part?', 'okfn-chapter' ); ?></summary>
			<div class="okfn-accordion__content">
				<p><?php esc_html_e( 'No special background is required. Come to a meetup, help with a project, or write to the chapter. People starting out in a country with no chapter write to network@okfn.org.', 'okfn-chapter' ); ?></p>
			</div>
		</details>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
