<?php 
// name: comments-template

if(post_password_required()){
  return;
}
?>

<div class="comment-box">
  <?php if(have_comments(  )){
    $comment_number = get_comments_number();
    echo '<h4>'.$comment_number. ' Peoples comments in your post</h4> <hr>';
    ?>
    <ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ul',
					'avatar_size' => 42,
				) );
			?>
		</ul><!-- .comment-list -->
    <?php
  }
		comment_form( array(
			'title_reply_before' => '<h5 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h5>',
		) );
	?>
</div>