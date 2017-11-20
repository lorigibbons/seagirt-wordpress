<div class="comments">
	<!--COMMENT FORM -->
	<?php $fields = array(
		'author' => '<input id="author" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" />',
		'email' => '<input id="email" placeholder = "Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />',
		'url' => '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="website" />'
		);
		$args = array(
			'fields' => apply_filters( 'comment_form_default_field', $fields )
		);
		comment_form($args) ; 	?>
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

<?php return; endif; ?>

<!-- DISPLAY LIST OF COMMENTS -->
<?php if (have_comments()) : ?>

	<h2><?php comments_number();//Displays the number of comments ?></h2>

	<ul>
		<?php wp_list_comments(array(
	    'avatar_size' => '140',
	    'type' => 'comment',
	    'callback' => 'ahha_comments'
		)); ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Sorry, comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>
<!-- Do I need this?
php comment_form(); ?> -->

</div>
