<?php get_header( ); ?>
    <?php get_template_part( 'templates/page_top_header' ); ?>

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
                            <?php $tag_list = get_the_tags() ? get_the_tags() : []?>
                            <ul>
                            <?php foreach($tag_list as $tag): ?>
                                <li><a href="?tag=<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                            
                        </div>


                        <div class="related-posts-area">
                            <h4>Related Posts</h4>
                            <div class="related-posts  wow fadeInUp">
<?php
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
                        <a href=""><img src="<?php the_post_thumbnail_url( ); ?>" alt="blog-details-5"></a>
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
                        

                <?php if ( 'open' == $post->comment_status ) : ?>
                        
                        <div id="respond">
                        
                        <h3><?php comment_form_title(); ?></h3>
                        
                        <?php cancel_comment_reply_link(); ?>
                        
                        <?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>
                        
                        <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
                        
                        <?php else : ?>
                        
                        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                        
                        <?php if ( $user_ID ) : ?>
                        
                        <p>Logged in as <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account">Log out &raquo;</a></p>
                    <div class="comment-area wow fadeInUp">
                        <div class="input wow fadeInUp">
                            <textarea name="comment" id="comment" placeholder="Comment*" cols="30" rows="8" tabindex="4"></textarea>
                        </div>
                    </div>
                        
                        <?php else : ?>

                <div class="comment-area wow fadeInUp">
                        <div class="input wow fadeInUp">
                            <textarea name="comment" id="comment" placeholder="Comment*" cols="30" rows="8" tabindex="4"></textarea>
                        </div>
                    
                    <div class="input-50  wow fadeInUp">  
                    <div class="input">
                        <input type="text" name="author" id="author" value="" size="22" tabindex="1" placeholder="Name*" />
                        
                    </div>
                        
                    <div class="input">
                        <input type="text" name="email" id="email" value="" size="22" tabindex="2" placeholder="Email*" />
                    </div>
                </div>
                        
                    <div class="input  wow fadeInUp">
                        <input type="text" name="url" id="url" value="" size="22" tabindex="3" placeholder="Website*" />
                    </div>
                </div>
                        
                        <?php endif; ?>
                    
                        
                        <p><input name="submit" type="submit" class="submit theme-btn  wow fadeInUp" id="submit" tabindex="5" value="Submit" /></p>
                        <?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>
                        
                        </form>
                        
                        <?php endif; // If registration required and not logged in ?>
                        </div>
                        
                        <?php endif; // If comments are open: delete this and the sky will fall on your head ?>


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


                        <?php get_template_part( 'templates/follow_us_sidebar'); ?>
                        <?php get_template_part( 'templates/latest_comment_sidebar'); ?>


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