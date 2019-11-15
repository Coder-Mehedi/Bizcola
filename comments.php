<div>
    <?php /* Add conditional checks, styling and arguments here... */ ?>
    <?php wp_list_comments(
    	array(
            'avatar_size' => 60,
            'max_depth'   => 5,
            'style'       => 'ol',
            'short_ping'  => true,
            'type'        => 'comment',
        )
    ); ?>
   
</div>