<?php
/**
 * Title: Latest posts
 * Slug: okfn-chapter/latest-posts
 * Categories: okfn
 * Description: Three-column query loop of recent posts, replacing the old [latestposts] shortcode.
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:group {"metadata":{"name":"Latest posts"},"align":"wide","layout":{"type":"constrained","contentSize":"84rem"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Latest posts', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":8,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"className":"okfn-article-card"} -->
	<div class="wp-block-query okfn-article-card">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /-->
			<!-- wp:post-title {"isLink":true,"level":3} /-->
			<!-- wp:post-excerpt {"moreText":"","excerptLength":24} /-->
			<!-- wp:post-date /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'No posts found.', 'okfn-chapter' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-pill"} -->
		<div class="wp-block-button is-style-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>"><?php esc_html_e( 'More posts', 'okfn-chapter' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
