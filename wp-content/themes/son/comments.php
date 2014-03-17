<?php
if(have_comments()):?>
	<h4 id="comments"><?php comments_number('No Commetns','One Comment', '% Comments');?>
		<ul class='comment-list'>
		<?php  wp_list_comments('type=comment&callback=customm_comments'); ?>
		</ul>
	</h4>
<?php
endif;

	 $comments_args = array(
		// change the title of send button
		'label_submit'=>'Submit Comment',
		// change the title of the reply section
		'title_reply'=>'Post a Comment',
		// remove "Text or HTML to be displayed after the set of comment fields"
		'comment_notes_after' => '',
		// redefine your own textarea (the comment body)
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"  rows="4" cols="50"></textarea></p>',
);

comment_form($comments_args);


