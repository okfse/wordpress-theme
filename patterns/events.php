<?php
/**
 * Title: Events & Meetups
 * Slug: okfn-chapter/events
 * Categories: okfn
 * Description: Example meetup row. Replace the date and title before publishing.
 *
 * @package OKFN_Chapter
 */

?>
<!-- wp:group {"metadata":{"name":"Events & Meetups"},"align":"wide","className":"okfn-tighten","layout":{"type":"constrained","contentSize":"84rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide okfn-tighten" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Events', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Example only. Not a scheduled event.', 'okfn-chapter' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"okfn-events-list","layout":{"type":"constrained"}} -->
	<div class="wp-block-group okfn-events-list">
		<!-- wp:group {"className":"okfn-event-card","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group okfn-event-card">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"okfn-event-date","layout":{"type":"constrained"}} -->
				<div class="wp-block-group okfn-event-date">
					<!-- wp:paragraph {"className":"okfn-event-date__day"} -->
					<p class="okfn-event-date__day"><?php esc_html_e( 'DD', 'okfn-chapter' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"okfn-event-date__month"} -->
					<p class="okfn-event-date__month"><?php esc_html_e( 'Mon', 'okfn-chapter' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"className":"okfn-event-card__title"} -->
					<h3 class="wp-block-heading okfn-event-card__title"><?php esc_html_e( 'Example meetup', 'okfn-chapter' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"okfn-event-card__meta"} -->
					<p class="okfn-event-card__meta"><?php esc_html_e( 'Add a time and a place.', 'okfn-chapter' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-pill"} -->
				<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"><?php esc_html_e( 'Contact', 'okfn-chapter' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
