<div class="comment-section">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'sda_theme' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-9 indented-container">
				<h3 class="comments-number"><?php comments_number(); ?></h3>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-9 indented-container">
				<ul class="comment-container">
					<?php
						wp_list_comments( array(
							'style'      => 'ul',
							'short_ping' => true,
							'avatar_size'=> 0,
							'callback' => 'sda_comments'
						) );
					?>
				</ul>
			</div>
		</div>
	</div>
	

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'sda_theme' ); ?></p>

<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9 indented-container">
			<?php comment_form($comments_args); ?>
		</div>
	</div>
</div>
