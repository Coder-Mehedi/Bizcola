<?php 

$about_page_video_group = get_field('about_page_video_section_group', 'option');

$about_video_section_text = $about_page_video_group['about_video_section_text'];
$about_section_video_link = $about_page_video_group['about_section_video_link'];
$about_video_section_background_image = $about_page_video_group['about_video_section_background_image'];



$about_page_video_group = get_field('our_project_gallery_group', 'option');

$project_gallery_section_heading = $about_page_video_group['project_gallery_section_heading'];
$project_gallery_section_description = $about_page_video_group['project_gallery_section_description'];
$project_gallery_section_gallery_images = $about_page_video_group['project_gallery_section_gallery_images'];
?>

<?php get_header( ); ?>

    <?php get_template_part( 'templates/page_top_header' ); ?>

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
                        <p class="wow fadeInDown"><?php echo $about_video_section_text; ?></p>
                    <?php if($about_section_video_link): ?>
                        <a data-fancybox href="<?php echo $about_section_video_link; ?>" class=" wow fadeInUp">
                            <div class="vi">
                                <div class="example-1"><i class="fas fa-play"></i></div>
                            </div>
                        </a>
                    <?php endif; ?>
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
                        <h2 class=" wow fadeInDown"><?php echo $project_gallery_section_heading; ?></h2>
                        <p class=" wow fadeInUp"><?php echo $project_gallery_section_description; ?></p>
                    </div>
                </div>
            </div>
        <?php if($project_gallery_section_gallery_images): ?>
            <div class="row">
                <div class="col-12  wow fadeInDown">
                    <div class="photo-gallery owl-carousel">
                    <?php foreach($project_gallery_section_gallery_images as $gallery_single_image): ?>
                        <div class="photo-item">
                            <img src="<?php echo $gallery_single_image['url'] ?>" alt="portlio-image">
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </section>
    <!-- ============= pop video Clients Area End =========== -->
<?php get_footer(); ?>