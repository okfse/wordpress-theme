<?php
/**
 * Title: Happening now
 * Slug: okfn-chapter/happening-now
 * Categories: okfn
 * Description: Cover photos that link to a project or an event. Replace the image, caption, alt text, and link.
 *
 * @package OKFN_Chapter
 */

$image   = get_template_directory_uri() . '/assets/images/happening-placeholder.svg';
$project = __( 'Placeholder cover for a project. Replace the photo, this text, and the link.', 'okfn-chapter' );
$event   = __( 'Placeholder cover for an event. Replace the photo, this text, and the link.', 'okfn-chapter' );
$contact = __( 'Placeholder cover for the contact page. Replace the photo, this text, and the link.', 'okfn-chapter' );
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Happening now"},"align":"wide","className":"okfn-happening","layout":{"type":"constrained","contentSize":"84rem"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}}} -->
<section class="wp-block-group alignwide okfn-happening" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Happening now', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"metadata":{"name":"Cover"}} -->
		<div class="wp-block-column">
			<!-- wp:image {"metadata":{"name":"Cover"},"lightbox":{"enabled":false},"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"okfn-happening__card"} -->
			<figure class="wp-block-image size-full okfn-happening__card"><a href="<?php echo esc_url( home_url( '/engagera-dig/projekt/' ) ); ?>"><img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $project ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></a><figcaption class="wp-element-caption"><?php echo esc_html( $project ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"metadata":{"name":"Cover"}} -->
		<div class="wp-block-column">
			<!-- wp:image {"metadata":{"name":"Cover"},"lightbox":{"enabled":false},"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"okfn-happening__card"} -->
			<figure class="wp-block-image size-full okfn-happening__card"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $event ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></a><figcaption class="wp-element-caption"><?php echo esc_html( $event ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"metadata":{"name":"Cover"}} -->
		<div class="wp-block-column">
			<!-- wp:image {"metadata":{"name":"Cover"},"lightbox":{"enabled":false},"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"custom","className":"okfn-happening__card"} -->
			<figure class="wp-block-image size-full okfn-happening__card"><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>"><img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $contact ); ?>" style="aspect-ratio:16/9;object-fit:cover"/></a><figcaption class="wp-element-caption"><?php echo esc_html( $contact ); ?></figcaption></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
