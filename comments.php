<?php
/**
 * The template for displaying comments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vicso
 */

if ( post_password_required() ) {
	return;
}
?>

<div class="commetn-title">
	<h3>Still Have Questions?</h3>
</div>

<div id="comments" class="comments-area">
    <div class="comment__form-wrapper">
        
        <?php
        $comment_send = 'Send';
        $comments_args = array(
            'label_submit' => __( $comment_send ),
            'class_form' => 'review_form',
			'comment_field' => '<p class="comment-form-comment"> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Ask your question here"></textarea></p>',
            'fields' => array(
				'author' => '<p class="comment-form-author"><input type="text" id="author" name="author" class="author" value="" placeholder="Name"  maxlength="30" autocomplete="on" tabindex="1" required="required"></p>',
					'email'=> '<p class="comment-form-email"> <input id="email" placeholder="E-mail" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>'
				),
            'submit_field' => '%1$s %2$s'
        );

        comment_form($comments_args);

    echo '</div>';

    if ( have_comments() ) : 
		?>

			<ol class="comment-list">
				<?php
					wp_list_comments(
						array(
							'style'      => 'ol',
							'short_ping' => true,
							'callback' => 'custom_comment',
							'end-callback' => 'custom_end_comment'
						)
					);
				?>
			</ol>

		<?php
    endif;

    ?>
</div>
