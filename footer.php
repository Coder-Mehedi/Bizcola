<?php 
if(function_exists('acf_add_local_field_group')){

// Contact Section
$contact_title = get_field('contact_title', 'option');
$contact_info_description = get_field('contact_info_description', 'option');
$contact_address = get_field('contact_address', 'option');
$contact_info_phone = get_field('contact_info_phone', 'option');
$contact_email = get_field('contact_email', 'option');
$contact_info_fax = get_field('contact_info_fax', 'option');

$company_facebook = get_field('company_facebook', 'option');
$company_twitter = get_field('company_twitter', 'option');
$company_google_plus = get_field('company_google_plus', 'option');
$company_website = get_field('company_website', 'option');

// Footer Section
$customize_copyright_text = get_field('customize_copyright_text', 'option');
}

?>

    <!-- ================= Contact Area Start =============== -->
    <section class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInRight">
                    <div class="contact-content">
                        <h4><?php echo $contact_title ? $contact_title : ''; ?></h4>
                        <p><?php echo $contact_info_description ? $contact_info_description : ''; ?></p>
                        <h6><span>Address: </span><?php echo $contact_address ? $contact_address : ''; ?></h6>
                        <h6><span>Phone: </span><?php echo $contact_info_phone ? $contact_info_phone : ''; ?></h6>
                        <h6><span>Email: </span><?php echo $contact_email ? $contact_email : ''; ?></h6>
                        <h6><span>Fax: </span><?php echo $contact_info_fax ? $contact_info_fax : ''; ?></h6>
                        <div class="footer-socail">
                            <ul>
                            <?php if($company_facebook): ?>
                                <li><a href="<?php echo $company_facebook ? $company_facebook : '#'; ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <?php endif; ?>
                            <?php if($company_twitter): ?>
                                <li><a href="<?php echo $company_twitter ? $company_twitter : '#'; ?>"><i class="fab fa-twitter"></i></a></li>
                            <?php endif; ?>
                            <?php if($company_google_plus): ?>
                                <li><a href="<?php echo $company_google_plus ? $company_google_plus : '#'; ?>"><i class="fab fa-google-plus-g"></i></a></li>
                            <?php endif; ?>
                            <?php if($company_website): ?>
                                <li><a href="<?php echo $company_website ? $company_website : '#'; ?>"><i class="fas fa-globe"></i></a></li>
                            <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInLeft">
                    <div class="contact-form">
                        <?php echo do_shortcode( '[contact-form-7 id="170" title="Contact form 1"]' ); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ================= Contact Area End =============== -->
<?php if($customize_copyright_text): ?>
    <footer>
        <p><?php echo $customize_copyright_text; ?></p>
    </footer>
<?php endif; ?>
    <?php wp_footer() ?>
    <script>

        //isotop filtering
        jQuery('#container').imagesLoaded(function() {
            jQuery('.filter-button-group').on('click', 'li', function() {
                var filterValue = jQuery(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            var $grid = jQuery('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: 1
                }
            })
        });

        // filtering li active
        jQuery('.filter-btn').on("click", function() {
            if (jQuery(this).hasClass('active-btn')) {
                jQuery(this).removeClass('active-btn');
            } else {
                jQuery(this).addClass('active-btn');
                jQuery(this).siblings().removeClass('active-btn');
            }
        });

        jQuery('#container-about').imagesLoaded(function() {
            jQuery('.filter-button-group').on('click', 'li', function() {
                var filterValue = jQuery(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            var $grid = jQuery('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: 1
                }
            })
        });

    </script>
</body>

</html>
