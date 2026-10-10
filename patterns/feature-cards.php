<?php
/**
 * Title: Feature cards
 * Slug: okfn-chapter/feature-cards
 * Categories: okfn
 * Description: Three bordered feature cards with curved-arrow links.
 *
 * @package OKFN_Chapter
 */

?>
<!-- wp:group {"metadata":{"name":"Feature cards"},"align":"wide","layout":{"type":"constrained","contentSize":"84rem"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'How we work', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"okfn-feature-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group okfn-feature-card">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'We include people', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Meetings, training, and advocacy.', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="<?php echo esc_url( home_url( '/engagera-dig/' ) ); ?>"><?php esc_html_e( 'Get involved', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"okfn-feature-card is-yellow","layout":{"type":"constrained"}} -->
			<div class="wp-block-group okfn-feature-card is-yellow">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'We build local capacity', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'We help organisations with research, policy, and practical work on open data.', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"><?php esc_html_e( 'Contact us', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"okfn-feature-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group okfn-feature-card">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php esc_html_e( 'We are part of a network', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Groups in more than 40 countries share tools and experience.', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="<?php echo esc_url( 'https://okfn.org/network/' ); ?>"><?php esc_html_e( 'The Network', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
