<?php
/**
 * Title: Person card
 * Slug: okfn-chapter/person-card
 * Categories: okfn
 * Description: Team or board member card with photo, role, and bio.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Person card"},"className":"okfn-person-card okfn-tighten","layout":{"type":"constrained"}} -->
<div class="wp-block-group okfn-person-card okfn-tighten">
	<!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Name', 'okfn-chapter' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"okfn-person-card__role"} -->
			<p class="okfn-person-card__role"><?php esc_html_e( 'Role', 'okfn-chapter' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="mailto:contact@okfn.se">contact@okfn.se</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:image {"sizeSlug":"medium"} -->
			<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/lg-okfn.svg' ); ?>" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Short biography. Replace this text, the photo, and the contact details in the Site Editor.', 'okfn-chapter' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
