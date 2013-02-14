<? if (!empty($_SERVER['SCRIPT_FILENAME']) and 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!'); ?>
<? if (post_password_required()): ?>
	This post is password protected. Enter the password to view comments.
<? endif; ?>

<? if (have_comments()): ?>
	<h2 id="comments_header"><? comments_number('No Responses', 'One Response', '% Responses' );?></h2>
	<div class="comments_navigation">
		<div class="next-posts"><? previous_comments_link() ?></div>
		<div class="prev-posts"><? next_comments_link() ?></div>
	</div>
	<ol id="comment_list">
		<? wp_list_comments(); ?>
	</ol>
	<div class="comments_navigation">
		<div class="next-posts"><? previous_comments_link() ?></div>
		<div class="prev-posts"><? next_comments_link() ?></div>
	</div>
 <? else: // this is displayed if there are no comments so far ?>
	<? if (comments_open()): ?>
		<p>No comments so far.</p>
	 <? else: // comments are closed ?>
		<p>Comments are closed.</p>
	<? endif; ?>
<? endif; ?>

<? if ( comments_open() ): ?>
	<div id="comment_form_container">
		<h2 id="comment_form_title"><? comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h2>
		<div class="cancel_comment_reply">
			<? cancel_comment_reply_link() ?>
		</div>
		<? if (get_option('comment_registration') and !is_user_logged_in()): ?>
			<p>You must be <a href="<?= wp_login_url(get_permalink()) ?>">logged in</a> to post a comment.</p>
		<? else: ?>
		<form action="<?= get_option('siteurl') ?>/wp-comments-post.php" method="post" id="comment_form">
			<? if (is_user_logged_in()): ?>
				<p>Logged in as <a href="<?= get_option('siteurl') ?>/wp-admin/profile.php"><?= $user_identity ?></a>. <a href="<?= wp_logout_url(get_permalink()) ?>" title="Log out of this account">Log out &raquo;</a></p>
			<? else : ?>
				<div class="input_wrap text<?= ($req) ? ' required' : ''?>">
					<label for="author">Name</label>
					<input type="text" name="author" id="author" value="<?= esc_attr($comment_author) ?>"<?= ($req) ? ' aria-required="true"' : '' ?> />
				</div>
				<div class="input_wrap text<?= ($req) ? ' required' : ''?>">
					<label for="email">Mail (will not be published)</label>
					<input type="text" name="email" id="email" value="<?= esc_attr($comment_author_email) ?>"<?= ($req) ? ' aria-required="true"' : '' ?> />
				</div>
				<div class="input_wrap text<?= ($req) ? ' required' : ''?>">
					<label for="url">Website</label>
					<input type="text" name="url" id="url" value="<?= esc_attr($comment_author_url) ?>" />
				</div>
			<? endif; ?>
			<div class="input_wrap textarea<?= ($req) ? ' required' : ''?>">
				<label for="comment">Message</label>
				<textarea name="comment" id="comment"></textarea>
				<p class="caption">You can use these tags: <code><?= allowed_tags() ?></code></p>
			</div>
			<div class="input_wrap submit">
				<input class="button" type="submit" id="submit" value="Submit Comment" />
				<? comment_id_fields() ?>
			</div>
			<? do_action('comment_form', $post->ID) ?>
		</form>
		<? endif; ?>
	</div>
<? endif; ?>
