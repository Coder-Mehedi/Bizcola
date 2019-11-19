<?php get_header( ); ?>
    <?php get_template_part( 'templates/page_top_header'); ?>

    <!-- ============= Service-top area Start =========== -->

    <section class="service-bg-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="service-page-top">
                        <h3 class="wow fadeInDown">Best Service Experience Ever...</h3>
                        <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <a class="theme-btn mt-30 wow fadeInRight" href="">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Service-top area Start =========== -->
<?php $service_posts = new WP_Query(['post_type' => 'our_service']); ?>
<?php if ( $service_posts->have_posts()): ?>
    <!-- ============= Service  Area Start =========== -->
    <section class="service-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo get_field("our_services_title", 'option') ? get_field('our_services_title', 'option') : 'Services' ?></h2>
                        <p class="wow fadeInUp"><?php echo get_field('our_services_description', 'option') ? get_field('our_services_description', 'option') : ''; ?></p>
                    </div>
                </div>
            </div>
            <div class="row  text-center">
<?php while ($service_posts->have_posts()) : $service_posts->the_post(); ?>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="service-page-items">
                        <div class="zoom">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="service-page-content">
                            <h4><?php the_title( ); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
<?php endwhile; ?>
                
            </div>
        </div>
    </section>
    <!-- ============= Service  Area End =========== -->
<?php endif; ?>
<?php get_footer( ) ?>