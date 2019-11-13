<?php get_header(); ?>
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
                <div class="zoom  wow fadeInUp">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="blog">
                </div>
                <div class="post-tag  wow fadeInUp">
                    <?php $tag_list = get_the_tags() ? get_the_tags() : []?>
                    <ul>
                    <?php foreach($tag_list as $tag): ?>
                        <li><a href="?tag=<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                    
                </div>
                <p><?php echo substr(get_the_content(), 0, 200); ?></p>
                <a class="theme-btn mt-30" href="<?php the_permalink(); ?>">Read more</a>
            </div>
        </div>
        <?php endwhile; ?>

    

                    <div class="pagination">
    <?php $pagi_args = array('prev_text' => '<<', 'next_text' => '>>' ); ?>
    <?php echo paginate_links($pagi_args); 
    

    ?>

                    </div>
    <?php endif; ?>
    
                </div>


                <div class="col-lg-4">
                    <div class="sidebar-right">
                        <div class="popular-post">
                            <h4 class=" wow fadeInUp">Most Popular</h4>
                            <a href="">
                                <div class="popular-post-single  wow fadeInUp">
                                    <div class="popular-post-content">
                                        <h5>It sure stinks</h5>
                                        <p>Consectetur adipisicing</p>
                                    </div>
                                    <div class="popular-post-img">
                                        <div class="zoom">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/popular-post-1.jpg" alt="popular-post-1">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="popular-post-single  wow fadeInUp">
                                    <div class="popular-post-content">
                                        <h5>It sure stinks</h5>
                                        <p>Consectetur adipisicing</p>
                                    </div>
                                    <div class="popular-post-img">
                                        <div class="zoom">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/popular-post-2.jpg" alt="popular-post-2">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="popular-post-single  wow fadeInUp">
                                    <div class="popular-post-content">
                                        <h5>It sure stinks</h5>
                                        <p>Consectetur adipisicing</p>
                                    </div>
                                    <div class="popular-post-img">
                                        <div class="zoom">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/popular-post-3.jpg" alt="popular-post-3">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="popular-post-single  wow fadeInUp">
                                    <div class="popular-post-content">
                                        <h5>It sure stinks</h5>
                                        <p>Consectetur adipisicing</p>
                                    </div>
                                    <div class="popular-post-img">
                                        <div class="zoom">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/popular-post-4.jpg" alt="popular-post-4">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="follow-us">
                            <h4 class=" wow fadeInUp">Follow Us</h4>
                            <div class="footer-follow wow fadeInUp">
                                <p>
                                    Save my name, email, and website in this browser for the next time I comment.
                                </p>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <h4 class=" wow fadeInUp">Newsletter</h4>
                            <p class=" wow fadeInUp">Fill your email below to subscribe to my newsletter</p>
                            <form action="index.html" class="subscrib">
                                <div class="input wow fadeInUp">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="input mb-0 wow fadeInUp">
                                    <input type="text" placeholder="Subscribe" class="submit theme-btn" value="Subscribe">
                                </div>
                            </form>
                        </div>
                        <div class="popular-comment">
                            <h4 class="">Latest Comments</h4>
                            <div class="popular-comment-items  wow fadeInUp">
                                <h5><span><i class="far fa-comment-dots"></i></span>Charles</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <div class="popular-comment-items wow fadeInUp">
                                <h5><span><i class="far fa-comment-dots"></i></span>Charles</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <div class="popular-comment-items wow fadeInUp">
                                <h5><span><i class="far fa-comment-dots"></i></span>Charles</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                            <div class="popular-comment-items wow fadeInUp">
                                <h5><span><i class="far fa-comment-dots"></i></span>Charles</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                        </div>
                        <div class="sm-post">
                            <a href="" class="sm-post-items  wow fadeInUp">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/popular-post-5.jpg" alt="">
                                </div>
                                <p>Check Out New Trendy Smart
                                    Phones in Next Decade</p>
                            </a>
                            <a href="" class="sm-post-items  wow fadeInUp">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/popular-post-6.jpg" alt="">
                                </div>
                                <p>Check Out New Trendy Smart
                                    Phones in Next Decade</p>
                            </a>
                            <a href="" class="sm-post-items  wow fadeInUp">
                                <div class="zoom">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/popular-post-7.jpg" alt="">
                                </div>
                                <p>Check Out New Trendy Smart
                                    Phones in Next Decade</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *************** Blog Details  End *************** -->
<?php get_footer(); ?>