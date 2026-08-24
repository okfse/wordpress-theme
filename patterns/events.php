<?php
/**
 * Title: Events & Meetups
 * Slug: okfn-chapter/events
 * Categories: okfn
 * Description: Upcoming events and community meetups list with date badges and RSVP buttons.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Events & Meetups"},"align":"wide","className":"okfn-tighten","layout":{"type":"constrained","contentSize":"84rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide okfn-tighten" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Upcoming Events & Meetups', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<p style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Join our open community meetings, discussions, and technical sprints.', 'okfn-chapter' ); ?></p>
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
					<p class="okfn-event-date__day">18</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"okfn-event-date__month"} -->
					<p class="okfn-event-date__month">OCT</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"className":"okfn-event-card__title"} -->
					<h3 class="wp-block-heading okfn-event-card__title"><?php esc_html_e( 'Open Data Day & Civic Hackathon', 'okfn-chapter' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"okfn-event-card__meta"} -->
					<p class="okfn-event-card__meta">18:00 – 20:30 UTC • <?php esc_html_e( 'Online & In-person', 'okfn-chapter' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-pill"} -->
				<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'RSVP / Join', 'okfn-chapter' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"okfn-event-card","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group okfn-event-card">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"okfn-event-date","layout":{"type":"constrained"}} -->
				<div class="wp-block-group okfn-event-date">
					<!-- wp:paragraph {"className":"okfn-event-date__day"} -->
					<p class="okfn-event-date__day">04</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"okfn-event-date__month"} -->
					<p class="okfn-event-date__month">NOV</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"className":"okfn-event-card__title"} -->
					<h3 class="wp-block-heading okfn-event-card__title"><?php esc_html_e( 'Community Governance & Open Science Briefing', 'okfn-chapter' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"okfn-event-card__meta"} -->
					<p class="okfn-event-card__meta">17:30 – 19:00 UTC • <?php esc_html_e( 'Online Webinar', 'okfn-chapter' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-pill"} -->
				<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'RSVP / Join', 'okfn-chapter' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
