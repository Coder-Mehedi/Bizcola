<?php require_once 'include/acf_query.php'; ?>
<?php // print_r($sliders); ?>

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
                            <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo.png" alt=""></a>
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
                <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item">
                        <div class="about-itm-heading">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/about-icon-1.png" alt="icon">
                            </div>
                            <h4>Maesuada risus</h4>
                        </div>
                        <p>Morbi urna lectus, tristique ac gravida sit amet Integer consectetur.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="about-item">
                        <div class="about-itm-heading">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/about-icon-2.png" alt="icon">
                            </div>
                            <h4>Lorem ipsum do</h4>
                        </div>
                        <p>Tectus, tristique ac gravida sit amet Integer consectetur pharetrm</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight" data-wow-delay="0.6s">
                    <div class="about-item">
                        <div class="about-itm-heading">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/about-icon-3.png" alt="icon">
                            </div>
                            <h4>Maesuada risus</h4>
                        </div>
                        <p>Morbi urna lectus, tristique ac gravida sit amet Integer consectetur pharetrm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= About Us Area End =========== -->
    <!-- ============= Our Services Area Start =========== -->
    <section class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown">Our Services</h2>
                        <p class="wow fadeInUp">Etiam id augue sollicitudin ex ultrices accumsan id eget urna. Duis ut vestibulum arcu. Ut congue facilisis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="service-active owl-carousel">
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-1.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-1.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Ship Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-2.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-2.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Air Cargo</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-3.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-3.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Ship Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-1.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-1.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Ship Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-2.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-2.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Air Cargo</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-3.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-3.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Ship Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-1.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-1.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Ship Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-2.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-2.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Air Cargo</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-3.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-3.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Ship Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-1.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-1.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Ship Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-2.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-2.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Air Cargo</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-items">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/service/service-3.jpg" alt="service">
                            </div>
                            <div class="service-item">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/service-icon-3.png" alt="service-icon">
                                </div>
                                <div class="service-item-content">
                                    <h4>Ship Repair</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elhgit, sed do eiusmod temp.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Our Services Area End =========== -->
    <!-- ============= Subscribe Area Start =========== -->
    <section class="subscribe-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown">Subscribe</h2>
                        <p class="wow fadeInUp">Cras viverra consequat eros ut imperdiet. In suscipit convallis lacus a posuere. Vestibulum sit amet sapien dapibus, mollis sem.</p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 wow bounceIn">
                    <form action="">
                        <div class="subscribe-input">
                            <input type="email" placeholder="Enter Your Email Here">
                            <button class="sub theme-btn">Subscribe</button>
                        </div>
                    </form>
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
                        <h2 class="wow fadeInDown">Recent Projects</h2>
                        <p class="wow fadeInUp">Etiam id augue sollicitudin ex ultrices accumsan id eget urna. Duis ut vestibulum arcu. Ut congue facilisis nulla.</p>
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
                <div class="col-lg-5 col-md-7 grid-item cat3 cat4 wow fadeInDown">
                    <div class="port-img">
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-fancybox="images" data-caption="image 1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-1.jpg" alt="portlio-image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 grid-item cat1 cat4 wow fadeInDown">
                    <div class="port-img">
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-fancybox="images" data-caption="image 2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-2.jpg" alt="portlio-image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 grid-item cat2 cat3  wow fadeInDown">
                    <div class="port-img">
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-fancybox="images" data-caption="image 3">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-3.jpg" alt="portlio-image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 grid-item cat1 cat4  wow fadeInUp">
                    <div class="port-img">
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-fancybox="images" data-caption="image 4">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-4.jpg" alt="portlio-image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 grid-item cat2 cat1 cat4 wow fadeInUp">
                    <div class="port-img">
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-fancybox="images" data-caption="5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-5.jpg" alt="portlio-image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 grid-item cat3  wow fadeInUp">
                    <div class="port-img">
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-fancybox="images" data-caption="image 6">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/portfolio-6.jpg" alt="portlio-image">
                        </a>
                    </div>
                </div>
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
                        <h2>Happy Clients Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="clients-active owl-carousel">
                        <div class="client-item  wow fadeInUp">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/client/client-1.jpg" alt="client">
                            </div>
                            <div class="client-content">
                                <p>Etiam eget libero sit amet elit aliquet imperdiet sed id velit. Morbi at elit non risus rutrum interdum. Cras vitae neque non lorem pellentesque facilisis. Risus get vulputate porttitor, tortor turpis porta justo.</p>
                                <h4>Matilda Joyce</h4>
                                <h5>Doctor</h5>
                            </div>
                        </div>
                        <div class="client-item  wow fadeInUp">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/client/client-1.jpg" alt="client">
                            </div>
                            <div class="client-content">
                                <p>Etiam eget libero sit amet elit aliquet imperdiet sed id velit. Morbi at elit non risus rutrum interdum. Cras vitae neque non lorem pellentesque facilisis. Risus get vulputate porttitor, tortor turpis porta justo.</p>
                                <h4>Matilda Joyce</h4>
                                <h5>Doctor</h5>
                            </div>
                        </div>
                        <div class="client-item  wow fadeInUp">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/client/client-1.jpg" alt="client">
                            </div>
                            <div class="client-content">
                                <p>Etiam eget libero sit amet elit aliquet imperdiet sed id velit. Morbi at elit non risus rutrum interdum. Cras vitae neque non lorem pellentesque facilisis. Risus get vulputate porttitor, tortor turpis porta justo.</p>
                                <h4>Matilda Joyce</h4>
                                <h5>Doctor</h5>
                            </div>
                        </div>
                        <div class="client-item wow fadeInUp">
                            <div class="zoom">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/client/client-1.jpg" alt="client">
                            </div>
                            <div class="client-content">
                                <p>Etiam eget libero sit amet elit aliquet imperdiet sed id velit. Morbi at elit non risus rutrum interdum. Cras vitae neque non lorem pellentesque facilisis. Risus get vulputate porttitor, tortor turpis porta justo.</p>
                                <h4>Matilda Joyce</h4>
                                <h5>Doctor</h5>
                            </div>
                        </div>
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
                        <h2 class=" wow fadeInDown">Meet Our Super Talented Team</h2>
                        <p class=" wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</p>
                        <a class="theme-btn mt-30  wow fadeInRight" href="">Read more</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6 wow fadeInRight">
                            <div class="single-team">
                                <div class="img-hidden">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/team/team-1.jpg" alt="team">
                                </div>
                                <div class="team-content">
                                    <h3>Poppy Byrne</h3>
                                    <p>Marketer</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href=""><i class="fas fa-globe"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInLeft">
                            <div class="single-team">
                                <div class="img-hidden">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/team/team-2.jpg" alt="team">
                                </div>
                                <div class="team-content">
                                    <h3>Isaac Miah</h3>
                                    <p>Developer</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href=""><i class="fas fa-globe"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  wow fadeInRight">
                            <div class="single-team">
                                <div class="img-hidden">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/team/team-3.jpg" alt="team">
                                </div>
                                <div class="team-content">
                                    <h3>Riley Cook</h3>
                                    <p>Director</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href=""><i class="fas fa-globe"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-team  wow fadeInLeft">
                                <div class="img-hidden">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/team/team-4.jpg" alt="team">
                                </div>
                                <div class="team-content">
                                    <h3>Aimee Howe</h3>
                                    <p>Designer</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href=""><i class="fas fa-globe"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <h2 class="wow fadeInDown">Our Recent Blog</h2>
                        <p class="wow fadeInUp">Etiam id augue sollicitudin ex ultrices accumsan id eget urna. Duis ut vestibulum arcu. Ut congue facilisis.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 dis-flex wow fadeInLeft">
                    <div class="single-recent-post">
                        <div class="img-hidden">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/blog-1.jpg" alt="blog">
                        </div>
                        <div class="single-blog-content">
                            <div class="single-blog-rating">
                                <ul>
                                    <li><a href=""><span><i class="fas fa-user"></i></span>John Doe</a></li>
                                    <li><a href=""><span><i class="far fa-clock"></i></span>08:35 PM</a></li>
                                    <li><a href=""><span><i class="far fa-calendar-alt"></i></span>JUL 19, 2018</a></li>
                                </ul>
                            </div>
                            <h3><a href="">Quisque sed ligula quam Fusce non massa </a></h3>
                            <p>Xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                            <div class="read-more-blog">
                                <a href="">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 dis-flex wow fadeInRight">
                    <div class="single-recent-post">
                        <div class="img-hidden">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/blog-1.jpg" alt="blog">
                        </div>
                        <div class="single-blog-content">
                            <div class="single-blog-rating">
                                <ul>
                                    <li><a href=""><span><i class="fas fa-user"></i></span>John Doe</a></li>
                                    <li><a href=""><span><i class="far fa-clock"></i></span>08:35 PM</a></li>
                                    <li><a href=""><span><i class="far fa-calendar-alt"></i></span>JUL 19, 2018</a></li>
                                </ul>
                            </div>
                            <h3><a href="">Barcelona Friday Design</a></h3>
                            <p>Xercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                            <div class="read-more-blog">
                                <a href="">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= Blog  Area End =============== -->
<?php get_footer(); ?>