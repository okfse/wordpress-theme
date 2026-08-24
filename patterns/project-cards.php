<?php
/**
 * Title: Projects & Case studies
 * Slug: okfn-chapter/project-cards
 * Categories: okfn
 * Description: Grid of chapter projects and case studies with tags and action links.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Projects & Case studies"},"align":"wide","layout":{"type":"constrained","contentSize":"84rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Our Projects & Initiatives', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Explore our open source tools, civic tech research, and data literacy initiatives.', 'okfn-chapter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"okfn-feature-card okfn-project-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group okfn-feature-card okfn-project-card">
				<!-- wp:paragraph {"className":"okfn-card-badge"} -->
				<p class="okfn-card-badge"><?php esc_html_e( 'Open Data', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Public Information Index', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Tracking and benchmarking the openness of government data and municipal transparency.', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="#"><?php esc_html_e( 'View project', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"okfn-feature-card is-yellow okfn-project-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group okfn-feature-card is-yellow okfn-project-card">
				<!-- wp:paragraph {"className":"okfn-card-badge"} -->
				<p class="okfn-card-badge"><?php esc_html_e( 'Civic Tech', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Open Knowledge Academy', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Workshops, hackathons, and training programs empowering civil society and journalists with data skills.', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="#"><?php esc_html_e( 'Learn more', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"okfn-feature-card okfn-project-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group okfn-feature-card okfn-project-card">
				<!-- wp:paragraph {"className":"okfn-card-badge"} -->
				<p class="okfn-card-badge"><?php esc_html_e( 'Open Science', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'Data Accessibility Framework', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Standardizing machine-readable formats and accessibility guidelines for academic research data.', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="#"><?php esc_html_e( 'Read case study', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
