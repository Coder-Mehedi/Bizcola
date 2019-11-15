<?php $comments = get_comments( ); ?>


<div class="popular-comment">
    <h4 class="">Latest Comments</h4>
<?php foreach($comments as $index => $comment): ?>
	<?php if($index == 5): break; endif; ?>
    <div class="popular-comment-items  wow fadeInUp">
        <h5><span><i class="far fa-comment-dots"></i></span><?php echo $comment->comment_author; ?></h5>
        <p><?php echo $comment->comment_content; ?></p>
    </div>
    
<?php endforeach; ?>
    <?php // comments_template(); ?>
</div>


