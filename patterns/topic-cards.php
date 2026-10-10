<?php
/**
 * Title: Topic cards
 * Slug: okfn-chapter/topic-cards
 * Categories: okfn
 * Description: Four cards for the public-interest themes a chapter works on.
 *
 * @package OKFN_Chapter
 */

$topics = array(
	array(
		'title' => __( 'Global challenges', 'okfn-chapter' ),
		'text'  => __( 'Open information helps people understand shared problems and see what is working.', 'okfn-chapter' ),
		'url'   => home_url( '/what-we-do/#global-challenges' ),
	),
	array(
		'title' => __( 'Democratic accountability', 'okfn-chapter' ),
		'text'  => __( 'People need access to information about how public institutions work.', 'okfn-chapter' ),
		'url'   => home_url( '/what-we-do/#democratic-accountability' ),
	),
	array(
		'title' => __( 'Research, science, and culture', 'okfn-chapter' ),
		'text'  => __( 'Knowledge people can use, reuse, and share.', 'okfn-chapter' ),
		'url'   => home_url( '/what-we-do/#research-science-culture' ),
	),
	array(
		'title' => __( 'Consumers and corporate accountability', 'okfn-chapter' ),
		'text'  => __( 'Information about who controls organisations, products, and services.', 'okfn-chapter' ),
		'url'   => home_url( '/what-we-do/#corporate-accountability' ),
	),
);
?>
<!-- wp:group {"metadata":{"name":"Topic cards"},"align":"wide","layout":{"type":"constrained","contentSize":"84rem"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Where open knowledge matters', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( array_slice( $topics, 0, 2 ) as $topic ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"okfn-feature-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group okfn-feature-card">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php echo esc_html( $topic['title'] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html( $topic['text'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="<?php echo esc_url( $topic['url'] ); ?>"><?php esc_html_e( 'Read more', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( array_slice( $topics, 2 ) as $topic ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"okfn-feature-card is-yellow","layout":{"type":"constrained"}} -->
			<div class="wp-block-group okfn-feature-card is-yellow">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php echo esc_html( $topic['title'] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html( $topic['text'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p><a class="link-arrow-curved" href="<?php echo esc_url( $topic['url'] ); ?>"><?php esc_html_e( 'Read more', 'okfn-chapter' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
