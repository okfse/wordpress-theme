<?php
/**
 * Title: Comments
 * Slug: okfn-chapter/comments
 * Inserter: no
 *
 * @package OKFN_Chapter
 */
?>
<!-- wp:comments -->
<div class="wp-block-comments">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Comments', 'okfn-chapter' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:comments-title /-->
	<!-- wp:comment-template -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-group">
			<!-- wp:avatar {"size":48} /-->
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:comment-author-name /-->
				<!-- wp:comment-date /-->
				<!-- wp:comment-content /-->
				<!-- wp:comment-reply-link /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->
	<!-- wp:comments-pagination -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->
	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->
