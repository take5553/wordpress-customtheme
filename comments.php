<h3>コメント</h3>
<p><?php comments_number(); ?></p>
<ol>
    <?php wp_list_comments( array( 'style' => 'ol' ) ); ?>
</ol>
<?php comment_form(); ?>