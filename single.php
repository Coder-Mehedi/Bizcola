<?php get_header( ); ?>
    <!-- ==========Page area start ========== -->
    <div class="page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content">
                        <h2><?php the_title( ); ?></h2>
                        <ul>
                            <li><a href="index.html">Home - </a></li>
                            <li><a href="blog.html">Blog - </a></li>
                            <li class="active"><a href="blog-details.html">Blog Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============= Page area end =========== -->

    <!-- *************** Blog Details Start *************** -->
    <?php if (have_posts()):
                while ( have_posts() ): the_post(); ?>
    <section class="blog-details-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <h3 class="wow fadeInDown"><?php the_title(); ?></h3>
                        <div class="user-option wow fadeInUp">
                            <a href="">
                                <div class="user">
                                    <h6><?php echo get_avatar( get_the_author_meta('ID'), 36) ?> </h6>
                                    <p><?php echo get_the_author_meta('display_name') ?></p>
                                </div>
                            </a>
                            <a href="">
                                <div class="user">
                                    <h6><i class="fas fa-calendar-alt"></i></h6>
                                    <p><?php the_date( ); ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="blog-de-post">
                            <div class="zoom  wow fadeInUp">
                                <img src="<?php the_post_thumbnail_url('post-thumbnail' ) ?>" alt="blog">
                            </div>
                            <h3 class="wow fadeInUp"><?php the_title( ); ?></h3>
                            <div class="wow fadeInUp">
                                <?php the_content( ); ?>
                            </div>
                        </div>
                        <!-- <div class="blog-de-img">
                            <div class="zoom wow fadeInUp" data-wow-delay="0.0s">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/blog-details-2.jpg" alt="">
                            </div>
                            <div class="zoom wow fadeInUp" data-wow-delay="0.3s">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/blog-details-3.jpg" alt="">
                            </div>
                            <div class="zoom wow fadeInUp" data-wow-delay="0.5s">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/blog-details-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="blog-de-quts-area">
                            <div class="blog-de-quts  wow fadeInUp">
                                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h6>
                            </div>
                            <p class=" wow fadeInUp">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any news. Lorem ipsum dolor sit amet, </p> <br>
                            <p class=" wow fadeInUp">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.</p>
                        </div> -->
                        <div class="next-pre-post wow fadeInUp">
                <?php
                    $prev_post = get_adjacent_post(false, '', true);
                    $next_post = get_adjacent_post(false, '', false);
                ?>

                <?php if(!empty($prev_post)): ?>
                        <a href="<?php echo get_permalink($prev_post->ID) ?>">
                                <div class="pre-post">    
                                    <h6>Previous Post</h6>
                                    <p><?php echo $prev_post->post_title?></p>
                                </div>
                            </a>
                <?php else: ?>
                    <div></div>
                <?php endif; ?>
                <?php if(!empty($next_post)): ?>

                        <a href="<?php echo get_permalink($next_post->ID) ?>">
                                <div class="pre-post tx-right">
                                    <h6>Next Post</h6>
                                    <p><?php echo $next_post->post_title ?></p>
                                </div>
                            </a>
                <?php endif; ?>
                        </div>
                        <div class="post-shares  wow fadeInUp">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li>40 Shares</li>
                            </ul>
                        </div>
                        <div class="post-tag  wow fadeInUp">
                            <ul>
                                <li><a href="">LIDAYHO</a></li>
                                <li><a href="">PIPS</a></li>
                                <li><a href="">AVELTR</a></li>
                            </ul>
                        </div>
                        <div class="related-posts-area">
                            <h4>Related Posts</h4>
                            <div class="related-posts  wow fadeInUp">
        <?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
    $first_tag = $tags[0]->term_id;
    $args=array(
        'tag__in' => array($first_tag),
        'post__not_in' => array($post->ID),
        'posts_per_page'=>2,
        'ignore_sticky_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) :
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
        
                <div class="related-posts-single">
                    <div class="zoom">
                        <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/blog-details-5.jpg" alt="blog-details-5"></a>
                        <h5><a href=""><?php the_title(); ?></a></h5>
                    </div>
                    <a href=""><?php the_title(); ?></a>
                    <div class="user-option">
                        <a href="">
                            <div class="user">
                                <h6><i class="fas fa-user"></i></h6>
                                <p><?php the_author(); ?></p>
                            </div>
                        </a>
                        <a href="">
                            <div class="user">
                                <h6><i class="fas fa-calendar-alt"></i></h6>
                                <p><?php the_date(); ?></p>
                            </div>
                        </a>
                    </div>
                </div>

        <?php endwhile; 
            endif;
            wp_reset_query();
        }
        ?>                                
                            </div>
                        </div>
                        <div class="comment-area wow fadeInUp">
                            <h3>Leave a Reply</h3>
                            <form action="index.html">
                                <div class="input wow fadeInUp">
                                    <textarea name="text-area" cols="30" rows="8" placeholder="Comment*"></textarea>
                                </div>
                                <div class="input-50  wow fadeInUp">
                                    <div class="input">
                                        <input type="text" placeholder="Name*">
                                    </div>
                                    <div class="input">
                                        <input type="email" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="input  wow fadeInUp">
                                    <input type="text" placeholder="Website">
                                </div>
                                <div class="input checkbox">
                                    <label>
                                        <input class="wi-5" type="checkbox" checked="checked" />
                                        <span>Save my name, email, and website in this browser for the next time I comment.</span>
                                    </label>
                                </div>
                                <button type="submit" class="submit theme-btn  wow fadeInUp">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php $popular_posts  = new WP_Query(array(
                    'posts_per_page' => 5,
                    'meta_key' => 'wpb_post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                )); ?>

                <div class="col-lg-4">
                    <div class="sidebar-right">
                        <div class="popular-post">
                            <h4 class=" wow fadeInUp">Most Popular</h4>
    <?php if( $popular_posts->have_posts() ) :
        while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                            <a href="">
                                <div class="popular-post-single  wow fadeInUp">
                                    <div class="popular-post-content">
                                        <h5><?php the_title(); ?></h5>
                                        <p>Consectetur adipisicing</p>
                                    </div>
                                    <div class="popular-post-img">
                                        <div class="zoom">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-details/popular-post-1.jpg" alt="popular-post-1">
                                        </div>
                                    </div>
                                </div>
                            </a>
        <?php endwhile; ?>
    <?php endif; ?>
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
                                <div class="input mb-0  wow fadeInUp">
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
    <?php endwhile;endif; ?>
<?php get_footer( ); ?>