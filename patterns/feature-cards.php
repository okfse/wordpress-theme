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
				<h3 class="wp-block-heading"><?php esc_html_e( 'A global network', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Meetings, training, innovation, sharing and research: join us in opening knowledge for everyone.', 'okfn-chapter' ); ?></p>
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
				<h3 class="wp-block-heading"><?php esc_html_e( 'Open expertise', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'We help partners with research, policy and technical work on open data and public information.', 'okfn-chapter' ); ?></p>
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
				<h3 class="wp-block-heading"><?php esc_html_e( 'Open data', 'okfn-chapter' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Democracy, science, culture and markets all work better when information is open by default.', 'okfn-chapter' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="<?php echo esc_url( home_url( '/oppnadata/' ) ); ?>"><?php esc_html_e( 'Why open data', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
