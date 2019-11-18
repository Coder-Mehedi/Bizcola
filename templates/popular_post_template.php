<?php $number_of_post_to_show = get_field('number_of_post_to_show', 'widget_popular_post_widget-3') ?>

<?php $popular_posts  = new WP_Query(array(
              'posts_per_page' => $number_of_post_to_show,
              'meta_key' => 'wpb_post_views_count',
              'orderby' => 'meta_value_num',
              'order' => 'DESC'
            )); ?>


<div class="popular-post">
    <h4 class=" wow fadeInUp">Most Popular</h4>
<?php if( $popular_posts->have_posts() ) :
while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
    <a href="<?php the_permalink(); ?>">
    <div class="popular-post-single  wow fadeInUp">
        <div class="popular-post-content">
            <h5><?php the_title(); ?></h5>
            <p><?php echo substr(get_the_excerpt(), 0, 15) ."..."; ?></p>
        </div>
        <div class="popular-post-img">
            <div class="zoom">
                <img src="<?php the_post_thumbnail_url('thumbnail' ); ?>" alt="popular-post-1">
            </div>
        </div>
    </div>
    </a>
<?php endwhile; ?>
<?php endif; ?>
</div>