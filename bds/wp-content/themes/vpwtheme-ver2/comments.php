<?php

/**

 * The template for displaying comments

 *

 * The area of the page that contains both current comments

 * and the comment form.

 *

 * @package KuteTheme

 * @subpackage KuteTheme

 * @since KuteTheme 1.0

 */



/*

 * If the current post is protected by a password and

 * the visitor has not yet entered the password we will

 * return early without loading the comments.

 */

if ( post_password_required() ) {

	return;

}

?>



<div id="comments" class="comments-area">



	<?php if ( have_comments() ) : ?>

		


		<?php kt_comment_nav(); ?>



		<ol class="comment-list">

			<?php

				wp_list_comments( array(

					'style'       => 'ol',

					'short_ping'  => true,

					'avatar_size' => 70,

				) );

			?>

		</ol><!-- .comment-list -->



		<?php kt_comment_nav(); ?>



	<?php endif; // have_comments() ?>



	<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?

		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :

	?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kutetheme' ); ?></p>

	<?php endif; ?>



	<?php comment_form(); ?>



</div><!-- .comments-area -->

