<?php get_header(); ?>
<?php $follow_us_widget_id = 'widget_follow_us_widget-2' ?>
<?php get_template_part( 'templates/page_top_header' ); ?>
    <!-- *************** Blog Details Start *************** -->
    <section class="blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
<?php if (have_posts() ):

    while (have_posts() ): the_post();?>

        <div class="blog-page-content mt-70">
            <h3 class="wow fadeInDown"><?php the_title(); ?></h3>
            <div class="user-option wow fadeInUp">
                <a href="">
                    <div class="user">
                        <h6><?php echo get_avatar( get_the_author_meta('ID'), 40) ?></h6>
                        <p><?php echo get_the_author_meta('display_name') ?></p>
                    </div>
                </a>
                <a href="">
                    <div class="user">
                        <h6><i class="fas fa-calendar-alt"></i></h6>
                        <p><?php echo get_the_date( ); ?></p>
                    </div>
                </a>
            </div>
            <div class="blog-de-post">
                <?php if(get_the_post_thumbnail_url( )): ?>
                    <div class="zoom  wow fadeInUp">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="blog">
                    </div>
                <?php endif; ?>
                <div class="post-tag  wow fadeInUp">
                    <?php $tag_list = get_the_tags() ? get_the_tags() : []?>
                    <ul>
                    <?php foreach($tag_list as $tag): ?>
                        <li><a href="?tag=<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                    
                </div>
                <?php if(get_the_content( )): ?>
                    <p><?php echo substr(get_the_content(), 0, 200); ?></p>
                <?php endif; ?>
                <a class="theme-btn mt-30" href="<?php the_permalink(); ?>">Read more</a>
            </div>
        </div>
        <?php endwhile; ?>

                    <div class="pagination">
    <?php $pagi_args = array('prev_text' => '<<', 'next_text' => '>>' ); ?>
    <?php echo paginate_links($pagi_args); ?>

                    </div>
    <?php endif; ?>
    
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-right">
                        <?php dynamic_sidebar( 'sidebar-1' ) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *************** Blog Details  End *************** -->
<?php get_footer(); ?>