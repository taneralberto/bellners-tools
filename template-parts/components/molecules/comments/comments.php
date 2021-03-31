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

add_filter( 'comment_form_defaults', 'bellner_modify_fields_form' );

function bellner_modify_fields_form( $args ){

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$author = '<input class="comment-form-comment__input" placeholder="'.__( 'Name' ) . ( $req ? ' *' : '' ).'" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' />';
	$email = '<input class="comment-form-comment__input" placeholder="'.__( 'Email' ) . ( $req ? ' *' : '' ).'" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' />';
	$url = '<input class="comment-form-comment__input" placeholder="'.__( 'Website' ).'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" /></input>';
	$comment = '<textarea class="comment-form-comment__textarea" placeholder="'. _x( 'Comment', 'noun' ).'" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>';

	$args['fields']['author'] = $author;
	$args['fields']['email'] = $email;
	$args['fields']['url'] = $url;
	$args['comment_field'] = $comment;

	return $args;

}

add_filter( 'comment_form_fields', 'bellner_modify_order_fields' );

function bellner_modify_order_fields( $fields ){
	$val = $fields['comment'];
	unset($fields['comment']);

	$fields += array('comment' => $val );

	return $fields;
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
