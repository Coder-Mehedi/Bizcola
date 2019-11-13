<?php require_once (dirname(__FILE__)."/../include/acf_query/portfolio_query.php"); ?>

<?php 
    
    $taxonomies = get_categories( array(
        'taxonomy' => 'groupings',
    ) );
    // print_r($taxonomies);

?>

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

                <?php foreach($taxonomies as $taxonomy): ?>
                    <li class="filter-btn" data-filter=".<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></li>
                <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row grid">
<?php $query = new WP_Query( array('post_type' => 'portfolio','posts_per_page' => -1));

// The Loop
if ( $query->have_posts() ):
    while ( $query->have_posts() ) : $query->the_post(); 
        static $i = 0;

        $images[] = get_field('portfolio_image');
        $space_cover = get_field('how_much_space_will_it_cover_out_of_10');
        $taxo[] = wp_get_post_terms( $post->ID, 'groupings');

?>
            
                <div class="col-lg-<?php echo $space_cover ? $space_cover : '5'; ?> col-md-<?php echo $space_cover ? $space_cover : '5'; ?> grid-item <?php foreach($taxo[$i] as $key => $nai): ?> <?php echo $taxo[$i][$key]->slug; ?> <?php endforeach; ?>wow fadeInDown">
                    <div class="port-img">
                        <a href="<?php the_field('portfolio_image') ?>" data-fancybox="images" data-caption="image 1">
                            <img src="<?php the_field('portfolio_image') ?>" alt="portlio-image">
                            
                        </a>
                    </div>
                </div>
        <?php $i++;?>
    <?php endwhile; ?>
<?php endif; ?>
            </div>
        </div>
    </section>
    <!-- project area end -->