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
			<?php 
				
				$commenter = wp_get_current_commenter();
				$req = get_option( 'require_name_email' );
				$aria_req = ( $req ? " aria-required='true'" : '' );
				
				
				$fields =  array(

				  'author' =>
				    '<div class="col-sm-4 no-left-padding"><p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
				    ( $req ? '<span class="required">*</span>' : '' ) .
				    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				    '" size="30"' . $aria_req . ' /></p></div>',
				
				  'email' =>
				    '<div class="col-sm-4 no-left-padding"><p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
				    ( $req ? '<span class="required">*</span>' : '' ) .
				    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				    '" size="30"' . $aria_req . ' /></p></div>',
				
				  'url' =>
				    '<div class="col-sm-4 no-left-padding"><p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
				    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
				    '" size="30" /></p></div>',
				);
			
			
			$comments_args = array(
			  'id_form'           => 'commentform',
			  'class_form'      => 'comment-form',
			  'id_submit'         => 'submit',
			  'class_submit'      => 'submit comment-submit',
			  'name_submit'       => 'submit',
			  'title_reply'       => __( 'Leave a Comment' ),
			  'title_reply_to'    => __( 'Leave a Reply to %s' ),
			  'cancel_reply_link' => __( 'Cancel Reply' ),
			  'label_submit'      => __( 'Post Comment' ),
			  'format'            => 'xhtml',
			  
			  
			  'fields' => apply_filters( 'comment_form_default_fields', $fields),
			
			  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
			    '</label><textarea id="comment" name="comment"  rows="6" aria-required="true">' .
			    '</textarea></p>',
			
			  
			  
			
			); ?>
			
			<?php comment_form($comments_args); ?>
		</div>
	</div>
</div>
