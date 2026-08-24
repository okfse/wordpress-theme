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
	<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Everything you need to know about our chapter, mission, and how to get involved.', 'okfn-chapter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<div class="okfn-accordion">
		<details class="okfn-accordion__item" open>
			<summary class="okfn-accordion__summary"><?php esc_html_e( 'What is an Open Knowledge Chapter?', 'okfn-chapter' ); ?></summary>
			<div class="okfn-accordion__content">
				<p><?php esc_html_e( 'Chapters are independent non-profit organisations representing the Open Knowledge Network in their local country or region. We collaborate globally to advance open data, open science, civic tech, and digital rights.', 'okfn-chapter' ); ?></p>
			</div>
		</details>

		<details class="okfn-accordion__item">
			<summary class="okfn-accordion__summary"><?php esc_html_e( 'How can I participate as a volunteer or contributor?', 'okfn-chapter' ); ?></summary>
			<div class="okfn-accordion__content">
				<p><?php esc_html_e( 'Anyone can join! We welcome coders, writers, researchers, translators, designers, and passionate advocates. Check our Get Involved page or attend our upcoming community meetups.', 'okfn-chapter' ); ?></p>
			</div>
		</details>

		<details class="okfn-accordion__item">
			<summary class="okfn-accordion__summary"><?php esc_html_e( 'How is the chapter funded and governed?', 'okfn-chapter' ); ?></summary>
			<div class="okfn-accordion__content">
				<p><?php esc_html_e( 'Our chapter is democratically governed by our members and board according to our published statutes. We are supported by community donations, membership fees, and non-profit research grants.', 'okfn-chapter' ); ?></p>
			</div>
		</details>

		<details class="okfn-accordion__item">
			<summary class="okfn-accordion__summary"><?php esc_html_e( 'What license applies to your tools and publications?', 'okfn-chapter' ); ?></summary>
			<div class="okfn-accordion__content">
				<p><?php esc_html_e( 'All our software code is released under open source licenses (GPL or MIT), and all our written content, reports, and datasets are licensed under Creative Commons Attribution 4.0 (CC BY 4.0).', 'okfn-chapter' ); ?></p>
			</div>
		</details>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
