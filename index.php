<?php require_once 'include/acf_query.php'; ?>

<!DOCTYPE html>
<html class="no-js" lang="la">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BizCola</title>
    <?php wp_head() ?>
</head>

<body>
    <!-- ========= preloader area Start =========== -->
    <div id="preloader">
        <div class="loader">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/loader.gif" alt="preloader">
        </div>
    </div>
    <!-- ========= preloader area End =========== -->
    <!-- ============ Header area start ============-->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav" role="navigation">
                        <!-- Mobile menu toggle button (hamburger/x icon) -->
                        <input id="main-menu-state" type="checkbox" />
                        <label class="main-menu-btn" for="main-menu-state">
                            <span class="main-menu-btn-icon"></span>
                        </label>
                        <div class="nav-brand">
                            <a href="<?php bloginfo( 'url' ) ?>"><img src="<?php echo $theme_logo_setup['url'] ? $theme_logo_setup['url'] : ""; ?>" alt=""></a>
                        </div>
                        <!-- Sample menu definition -->

                        <?php wp_nav_menu( array(
                            'theme_location'  => 'menu-1',
                            'menu_class'      => 'sm sm-clean',
                            'menu_id'         => 'main-menu',
                          
                        ) ); ?>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--========= header area end ========== -->
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
    <!-- ============= About Us Area Start =========== -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft">
                    <div class="video-area">
                        <img src="<?php echo $about_section_video_thumbnail_image['url']; ?>" alt="Video">
                        <a data-fancybox href="<?php echo $about_section_video_url; ?>">
                            <div class="vi">
                                <div class="example-1"><i class="fas fa-play"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight">
                    <div class="about-heading">
                        <h2 class="wow fadeInDown"><?php echo $about_section_title; ?></h2>
                        <h4 class="wow fadeInUp"><?php echo $about_section_description; ?></h4>
                        <p><?php echo $about_section_content; ?></p>
                        <a href="<?php echo $about_section_button_text_link['url'] ?>" class="theme-btn  wow fadeInUp"><?php echo $about_section_button_text_link['title'] ?></a>
                    </div>
                </div>
            </div>
            <div class="row ml-270">
        <?php foreach($about_bottoms as $about_bottom): ?>

                <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item">
                        <div class="about-itm-heading">
                            <div class="zoom">
                                <img src="<?php echo $about_bottom['icon']['url'] ?>" alt="icon">
                            </div>
                            <h4><?php echo $about_bottom['title']; ?></h4>
                        </div>
                        <p><?php echo $about_bottom['content']; ?></p>
                    </div>
                </div>
        <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- ============= About Us Area End =========== -->
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
    <!-- ============= Subscribe Area Start =========== -->
    <section class="subscribe-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo $subscribe_section_title; ?></h2>
                        <p class="wow fadeInUp"><?php echo $subscribe_section_description; ?></p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 wow bounceIn">
                    <?php echo do_shortcode( '[contact-form-7 id="171" title="Subscribe"]' ); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Subscribe Area End =========== -->
    <!-- portfolio area start -->
    <section class="portfolio-area section-padding">
        <div class="container" id="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo $recent_project_section_title ? $recent_project_section_title : ''; ?></h2>
                        <p class="wow fadeInUp"><?php echo $recent_project_section_description ? $recent_project_section_description : ''; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInDown">
                    <div class="filtering-btn">
                        <ul class="filter-button-group">
                            <li class="filter-btn active-btn" data-filter="*">All</li>
                            <li class="filter-btn" data-filter=".cat1">Air cargo</li>
                            <li class="filter-btn" data-filter=".cat2">Sea shipping</li>
                            <li class="filter-btn" data-filter=".cat3">Road Transport </li>
                            <li class="filter-btn" data-filter=".cat4">Lighter ship</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row grid">
                
            <!-- Air Cargo -->
        <?php if($recent_project_air_cargos): ?>
            <?php foreach($recent_project_air_cargos as $recent_project_air_cargo): ?>
                <div class="col-lg-5 col-md-7 grid-item cat1 wow fadeInDown">
                    <div class="port-img">
                        <a href="<?php echo $recent_project_air_cargo['url'] ?>" data-fancybox="images" data-caption="image 2">
                            <img src="<?php echo $recent_project_air_cargo['url'] ?>" alt="portlio-image">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if($recent_project_sea_shippings): ?>
            <?php foreach($recent_project_sea_shippings as $recent_project_sea_shipping): ?>

                <div class="col-lg-3 col-md-5 grid-item cat2 wow fadeInDown">
                    <div class="port-img">
                        <a href="<?php echo $recent_project_sea_shipping['url'] ?>" data-fancybox="images" data-caption="image 3">
                            <img src="<?php echo $recent_project_sea_shipping['url']; ?>" alt="portlio-image">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php if($recent_project_road_transports): ?>
        <?php foreach($recent_project_road_transports as $recent_project_road_transport): ?>    
                
                <div class="col-lg-4 col-md-7 grid-item cat3  wow fadeInUp">
                    <div class="port-img">
                        <a href="<?php echo $recent_project_road_transport['url'] ?>" data-fancybox="images" data-caption="image 6">
                            <img src="<?php echo $recent_project_road_transport['url'] ?>" alt="portlio-image">
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>

    <?php if($recent_project_lighter_ships): ?>
        <?php foreach($recent_project_lighter_ships as $recent_project_lighter_ship): ?> 

        <div class="col-lg-5 col-md-6 grid-item cat4 wow fadeInDown">
            <div class="port-img">
                <a href="<?php echo $recent_project_lighter_ship['url']; ?>" data-fancybox="images" data-caption="image 1">
                    <img src="<?php echo $recent_project_lighter_ship['url']; ?>" alt="portlio-image">
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>


            </div>
        </div>
    </section>
    <!-- project area end -->
    <!-- ============= Happy Clients Area Start =========== -->
    <section class="clients-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInDown">
                        <h2><?php echo $client_and_review_section_title ? $client_and_review_section_title : ''; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="clients-active owl-carousel">
        <?php foreach($clients_and_reviews as $client_and_review): ?>

                        <div class="client-item  wow fadeInUp">
                            <div class="zoom">
                                <img src="<?php echo $client_and_review['photo']['url'] ? $client_and_review['photo']['url'] : '' ?>" alt="client">
                            </div>
                            <div class="client-content">
                                <p><?php echo $client_and_review['description'] ? $client_and_review['description'] : ''; ?></p>

                                <h4><?php echo $client_and_review['name'] ? $client_and_review['name'] : 'No Name Provided' ?></h4>
                                <h5><?php echo $client_and_review['job_field'] ? $client_and_review['job_field'] : ''; ?></h5>
                            </div>
                        </div>
        <?php endforeach; ?>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= SHappy Clients Area End =========== -->
    <!-- ============= Team Area Start =========== -->
    <section class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading team-heading">
                        <h2 class=" wow fadeInDown"><?php echo $team_member_section_title ? $team_member_section_title : ''; ?></h2>
                        <p class=" wow fadeInUp"><?php echo $team_member_section_description ? $team_member_section_description : ''; ?></p>
                        <a class="theme-btn mt-30  wow fadeInRight" href="<?php echo $team_member_section_button['url'] ? $team_member_section_button['url'] : '#'; ?>"><?php echo $team_member_section_button['title'] ? $team_member_section_button['title'] : ''; ?></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
            <?php foreach($members as $member): ?>

                        <div class="col-md-6 wow fadeInRight">
                            <div class="single-team">
                                <div class="img-hidden">
                                    <img src="<?php echo $member['photo']['url'] ? $member['photo']['url'] : ''; ?>" alt="team">
                                </div>
                                <div class="team-content">
                                    <h3><?php echo $member['name'] ? $member['name'] : ''; ?></h3>
                                    <p><?php echo $member['job'] ? $member['job'] : ''; ?></p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="<?php echo $member['fb'] ? $member['fb'] : '#'; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="<?php echo $member['twitter'] ? $member['twitter'] : '#'; ?>"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $member['google-plus'] ? $member['google-plus'] : '#'; ?>"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="<?php echo $member['website'] ? $member['website'] : '#'; ?>"><i class="fas fa-globe"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

            <?php endforeach; ?>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Team Area End =========== -->
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
        <?php if (have_posts()):
                while ( have_posts() ): the_post(); ?>
            
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