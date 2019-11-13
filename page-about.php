<?php get_header( ); ?>
    <!-- ==========Page area start ========== -->
    <div class="page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content">
                        <h2 class="wow fadeInDown">About Us</h2>
                        <ul class="wow fadeInUp">
                            <li><a href="index.html">Home - </a></li>
                            <li class="active"><a href="about.html">About us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============= Page area end =========== -->
    <?php get_template_part( 'templates/about' ); ?>

    <?php get_template_part( 'templates/team' ); ?>

    <?php get_template_part( 'templates/subscribe' ); ?>
    <!-- portfolio area start -->

    <!-- project area end -->
    <?php get_template_part( 'templates/happy_clients' ); ?>
    <!-- ============= pop video Clients Area Start =========== -->
    <div class="pop-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="pop-video-content">
                        <p class="wow fadeInDown">“psum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit “consequat ipsum, </p>
                        <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class=" wow fadeInUp">
                            <div class="vi">
                                <div class="example-1"><i class="fas fa-play"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============= pop video Clients Area End =========== -->
    <!-- ============= pop video Clients Area End =========== -->
    <section class="project-gallery-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h2 class=" wow fadeInDown">Our Project Gallery</h2>
                        <p class=" wow fadeInUp">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  wow fadeInDown">
                    <div class="photo-gallery owl-carousel">
                        <div class="photo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/gallery-1.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/gallery-2.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/gallery-3.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/gallery-1.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/gallery-2.jpg" alt="portlio-image">
                        </div>
                        <div class="photo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/gallery/gallery-3.jpg" alt="portlio-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= pop video Clients Area End =========== -->
<?php get_footer(); ?>