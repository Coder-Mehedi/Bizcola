<?php get_header(); ?>
    <!-- ==========Page area start ========== -->
    <div class="page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content">
                        <h2 class="wow fadeInDown">Our Projects</h2>
                        <ul class="wow fadeInUp">
                            <li><a href="index.html">Home - </a></li>
                            <li class="active"><a href="projects.html">Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============= Page area end =========== -->
<?php get_template_part( 'templates/portfolio' ); ?>
<?php get_template_part( 'templates/happy_clients' ); ?>


<?php get_footer(); ?>