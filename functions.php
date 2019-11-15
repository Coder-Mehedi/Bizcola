<?php

require_once 'include/enqueue.php';
require_once 'include/theme_support.php';
require_once 'include/acf_options_page.php';
require_once 'include/widget.php';
require_once 'include/filter_hook.php';
require_once 'include/css_hook.php';

require_once 'follow-us-widget.php';
require_once 'popular_post_widget.php';
require_once 'recent_comment_widget.php';

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);