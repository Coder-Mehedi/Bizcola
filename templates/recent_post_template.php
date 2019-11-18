<?php $number_of_posts_to_show = get_field('number_of_posts_to_show', 'widget_recent_post_widget-3'); ?>


<?php $recent_posts  = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => $number_of_posts_to_show,
        'order' => 'DESC'
    )); ?>
<?php if( $recent_posts->have_posts() ) :
    while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
        <div class="sm-post">

            <a href="<?php the_permalink(); ?>" class="sm-post-items  wow fadeInUp">
                <div class="zoom">
                    <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="" style="width: 100px; border-radius: 50%">
                </div>
                <p><?php the_title( ); ?></p>
            </a>
            
        </div>
    <?php endwhile; ?>
<?php endif; ?>