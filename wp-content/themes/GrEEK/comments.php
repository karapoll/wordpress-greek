<?php
/* Comment Form */
$args = array(
	'id_form' => 'comment-form-container',
	'id_submit' => 'comment-submit',
	'title_reply' => __( '','textdomain_techblog' ),
	'title_reply_to' => __( 'Leave a Reply to %s','textdomain_techblog' ),
	'cancel_reply_link' => __( 'Cancel Reply','textdomain_techblog' ),
	'label_submit' => __( 'Send Comment','textdomain_techblog' ),
			   
	'comment_field' => '<textarea name="comment" placeholder="Enter Message Here" class="comment-text-area"></textarea>',
		   
	'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		
	'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		
	'comment_notes_before' => '<p class="comment-notes"></p>',
		
	'comment_notes_after' => '<p class="form-allowed-tags"></p>',
	
	'fields' => apply_filters( 'comment_form_default_fields', array(
		
	'author' => '<input type="text" name="author" placeholder="Enter Name" class="comment-name" ' . $aria_req . ' />',
			
	'email' => '<input type="text" name="email" placeholder="Enter Email" class="comment-email" ' . $aria_req . ' />',
		
	'url' => '<input type="text" name="url" placeholder="Enter URL" class="comment-url" />'

		)
			)
				);
?>

			<!-- Comments -->
            <div class="comment-container">
            
            <h6 id="comment-header"><?php comments_number( "No Comments, Be The First!", '1 Comment', '% Comments' ); ?></h6>
            
            <ul class="comment-list">
            <?php wp_list_comments('type=comment&callback=theme_comment'); ?>
            </ul>
            
            
            <!-- Comment Form -->
            <div class="commen-form">
            <?php comment_form( $args ); ?>
            <div class="clear"></div>
            </form>
            </div>
            <!-- End Comment Form -->
            
            </div>
            <!-- End Comments -->