<?php get_header( ); ?>
<?php $contact_address = get_field('contact_address','option') ?>

    <!-- ==========Page area start ========== -->
    <?php get_template_part( 'templates/page_top_header' ); ?>

    <!-- ============= Page area end =========== -->
    <section class="cantact-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Contact With US</h2>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-lg-10 offset-lg-1">
<?php echo do_shortcode( '[contact-form-7 id="281" title="Contact Page Form"]' ); ?>
                </div>
            </div>
        </div>
    </section>
    <div class="map">

        <iframe 
            width="100%" height="400px"
            src="https://www.google.com/maps?q=<?php echo $contact_address ? $contact_address : 'Bangladesh' ?>&t=&z=14&ie=UTF8&iwloc=&output=embed"  frameborder="0" style="border:0;" allowfullscreen="">
        </iframe>

    </div>
<?php get_footer( ); ?>