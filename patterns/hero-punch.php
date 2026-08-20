<?php
/**
 * Title: Hero punch
 * Slug: okfn-chapter/hero-punch
 * Categories: okfn
 * Description: Large mission heading, supporting text, CTA, and illustration with a colour orb.
 *
 * @package OKFN_Chapter
 */

$image = get_template_directory_uri() . '/assets/images/lg-okfn.svg';
?>
<!-- wp:group {"metadata":{"name":"Hero punch"},"className":"okfn-hero is-style-orb-blue has-bg-circle orb-lg","align":"wide","layout":{"type":"constrained","contentSize":"84rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide okfn-hero is-style-orb-blue has-bg-circle orb-lg" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
			<!-- wp:heading {"level":1,"fontSize":"huge"} -->
			<h1 class="wp-block-heading has-huge-font-size"><?php echo wp_kses_post( __( 'A fair, free and <strong>open</strong> future.', 'okfn-chapter' ) ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"okfn-lg"} -->
			<p class="has-okfn-lg-font-size"><?php esc_html_e( 'We work for a more open digital society — where non-sensitive information is open, free to use, build on and share.', 'okfn-chapter' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/om/' ) ); ?>"><?php esc_html_e( 'Our mission', 'okfn-chapter' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $image ); ?>" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
