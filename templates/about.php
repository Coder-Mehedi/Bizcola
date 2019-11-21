<?php require_once(dirname(__FILE__)."/../include/acf_query/about_query.php"); ?>


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