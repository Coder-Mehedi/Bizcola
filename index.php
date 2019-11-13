<?php require 'include/index_acf_query.php'; ?>
<?php get_header(); ?>

<?php if($sliders): ?>
    <!-- ==========hero area start ========== -->
    <section class="hero-area">
        <div class="slider owl-carousel">
    <?php foreach($sliders as $slider): ?>
            <div class="slider-items">
                <div class="slider-img">
                    <img src="<?php echo $slider['background']['url']; ?>" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="slider-content">
                                <h2><?php echo $slider['title']; ?></h2>
                                <p><?php echo $slider['content']; ?></p>
                                <div class="slider-btn">
                                <?php if(!empty($left_banner_button_link)): ?>
                                    <a class="theme-btn btn-left" href="<?php echo $left_banner_button_link['url']; ?>"><?php echo $left_banner_button_link['title']; ?></a>
                                <?php endif; ?>
                                <?php if(!empty($right_banner_button_link)): ?>
                                    <a class="theme-btn bg-none btn-right" href="<?php echo $right_banner_button_link['url']; ?>"><?php echo $right_banner_button_link['title']; ?></a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach; ?>

        </div>
    </section>
    <!-- ============= hero area end =========== -->
<?php endif; ?>

<!-- About Section -->
<?php get_template_part( 'templates/about' ); ?>


    
    <?php $services_items = new WP_Query(['post_type' => 'our_service']); ?>
    <?php if ( $services_items->have_posts()): ?>
    <!-- ============= Our Services Area Start =========== -->
    <section class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo $our_services_title; ?></h2>
                        <p class="wow fadeInUp"><?php echo $our_services_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="service-active owl-carousel">


<?php while ($services_items->have_posts()) : $services_items->the_post(); ?>
    <?php $our_services_posts_icon = get_field('our_services_posts_icon') ?>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo $our_services_posts_icon; ?>" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_content( ); ?></p>
                                </div>
                            </div>
                        </div>
<?php endwhile; ?>
 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Our Services Area End =========== -->
       <?php endif; ?>

<?php get_template_part( 'templates/subscribe' ); ?>
 
<?php get_template_part( 'templates/portfolio' ); ?>

<?php get_template_part( 'templates/happy_clients' ); ?>

<?php get_template_part( 'templates/team' ) ?>

<?php $blog_posts  = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 2
                ));
            ?>


    <!-- ================= Blog  Area Start =============== -->
    <section class="recent-blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading mb-30 text-center">
                        <h2 class="wow fadeInDown"><?php echo $customize_recent_blog_section_title ? $customize_recent_blog_section_title : ''; ?></h2>
                        <p class="wow fadeInUp"><?php echo $customize_recent_blog_section_description ? $customize_recent_blog_section_description : ''; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
<?php if ( $blog_posts->have_posts() ):
    while ( $blog_posts->have_posts() ): $blog_posts->the_post();?>
            
                <div class="col-md-6 dis-flex wow fadeInLeft">
                    <div class="single-recent-post">
                        <div class="img-hidden">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="blog">
                        </div>
                        <div class="single-blog-content">
                            <div class="single-blog-rating">
                                <ul>
                                    <li><a href=""><span><i class="fas fa-user"></i></span><?php echo get_the_author_meta('display_name') ?></a></li>
                                    <li><a href=""><span><i class="far fa-clock"></i></span><?php the_time(); ?></a></li>
                                    <li><a href=""><span><i class="far fa-calendar-alt"></i></span><?php the_date(); ?></a></li>
                                </ul>
                            </div>
                            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo substr(get_the_content(), 0, 200) . " ..."; ?></p>
                            <div class="read-more-blog">
                                <a href="<?php echo get_permalink(); ?>">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
            </div>
        </div>
    </section>

    <!-- ================= Blog  Area End =============== -->
<?php get_footer(); ?>