<?php 

// Subscribe Section

if( have_rows('subscribe_section_group','option') ): 
    while( have_rows('subscribe_section_group','option') ): the_row();
        
        $subscribe_section_title = get_sub_field('subscribe_section_title');
        $subscribe_section_description = get_sub_field('subscribe_section_description');
        $subscribe_button_link = get_sub_field('subscribe_button_link');

    endwhile;
endif;
 ?>


   <!-- ============= Subscribe Area Start =========== -->
    <section class="subscribe-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2 class="wow fadeInDown"><?php echo $subscribe_section_title; ?></h2>
                        <p class="wow fadeInUp"><?php echo $subscribe_section_description; ?></p>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 wow bounceIn">
                    <?php echo do_shortcode( '[contact-form-7 id="171" title="Subscribe"]' ); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Subscribe Area End =========== -->