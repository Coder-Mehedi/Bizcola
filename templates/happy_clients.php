<?php require_once (dirname(__FILE__)."/../include/acf_query/clients_query.php"); ?>


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