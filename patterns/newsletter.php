<?php
/**
 * Title: Newsletter
 * Slug: okfn-chapter/newsletter
 * Categories: okfn
 * Description: Newsletter call-to-action. Point the button at your mailing-list URL.
 *
 * @package OKFN_Chapter
 */

$image = get_template_directory_uri() . '/assets/images/section-newsletter.svg';
?>
<!-- wp:group {"metadata":{"name":"Newsletter"},"className":"is-style-orb-blue okfn-tighten","align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-orb-blue okfn-tighten">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo wp_kses_post( __( 'Don\'t miss<br>a thing', 'okfn-chapter' ) ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"okfn-lg"} -->
			<p class="has-okfn-lg-font-size"><?php esc_html_e( 'Stay on top of what is happening in the open movement. We will never spam you.', 'okfn-chapter' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Subscribe', 'okfn-chapter' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:image {"sizeSlug":"full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $image ); ?>" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
