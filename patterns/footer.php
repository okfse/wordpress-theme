<?php
/**
 * Title: Footer
 * Slug: okfn-chapter/footer
 * Categories: okfn
 * Inserter: false
 * Description: Chapter footer with logo, social links, legal links, and licence line.
 *
 * @package OKFN_Chapter
 */

$logo    = get_template_directory_uri() . '/assets/images/lg-okfn-black.svg';
$email   = okfn_chapter_contact_email();
$socials = '';

foreach ( okfn_chapter_social_links() as $social ) {
	$socials .= sprintf(
		'<!-- wp:social-link {"url":"%1$s","service":"%2$s"} /-->' . "\n",
		esc_url_raw( $social['url'] ),
		sanitize_key( $social['service'] )
	);
}
?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","className":"okfn-footer","layout":{"type":"constrained","contentSize":"84rem"}} -->
<div class="wp-block-group alignfull okfn-footer">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"width":"180px","sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image size-full is-resized"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="180" height="51"/></a></figure>
		<!-- /wp:image -->

		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#231f20","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<?php echo $socials; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- URLs and service slugs are escaped above. ?>
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'This chapter is an independent non-profit working for a fair, sustainable and open future.', 'okfn-chapter' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="<?php echo esc_url( 'mailto:' . $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph --><p><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php esc_html_e( 'Privacy policy', 'okfn-chapter' ); ?></a></p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><a href="https://okfn.org/code-of-conduct/"><?php esc_html_e( 'Code of conduct', 'okfn-chapter' ); ?></a></p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><a href="<?php echo esc_url( okfn_chapter_donate_url() ); ?>"><?php esc_html_e( 'Donate', 'okfn-chapter' ); ?></a></p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><a href="https://okfn.org/network/"><?php esc_html_e( 'Open Knowledge Network', 'okfn-chapter' ); ?></a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"okfn-footer__legal","layout":{"type":"constrained"}} -->
	<div class="wp-block-group okfn-footer__legal">
		<!-- wp:paragraph -->
		<p><?php echo wp_kses_post( __( 'Theme code is available under the <a href="https://www.gnu.org/licenses/gpl-2.0.html">GNU General Public License v2.0 or later</a>.', 'okfn-chapter' ) ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p><?php echo wp_kses_post( __( 'Content on this site is licensed under a <a href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.', 'okfn-chapter' ) ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
