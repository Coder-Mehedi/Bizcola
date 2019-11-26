<?php 

// Clients and Review Section
$client_and_review_section_title = get_sub_field('client_and_review_section_title', 'option');

if( have_rows('clients_and_reviews_repeater','option') ): 
    while( have_rows('clients_and_reviews_repeater','option') ): the_row();
        $clients_and_reviews[] = [
            'description' => $review_description[] = get_sub_field('review_description'),
            'photo' => $client_photo[] = get_sub_field('client_photo'),
            'name' => $client_name[] = get_sub_field('client_name'),
            'job_field' => $client_job_field[] = get_sub_field('client_job_field')
        ];

    endwhile;
endif;
?>


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
    <!-- ============= Happy Clients Area End =========== -->