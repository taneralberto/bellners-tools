<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package telesur
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
<div id="comments">
	<?php
		if ( have_comments() ) :
	?>
<?php the_comments_navigation(); ?>
	<ol>
		<?php
			wp_list_comments(
			array(
				'style'      => 'ol',
				'short_ping' => true,
			)
		);
		?>
	</ol>
<?php
the_comments_navigation();
	if ( ! comments_open() ) :
?>
	<p class="no-comments"><?php esc_html_e( 'Los comentarios están cerrados en este post', 'bellner' ); ?></p>
		<?php
	endif;
	endif;
	comment_form();
	?>
</div>