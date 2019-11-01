    <!-- ================= Contact Area Start =============== -->
    <section class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInRight">
                    <div class="contact-content">
                        <h4>Contact Info:</h4>
                        <p>Praesent interdum congue mauris, et fringilla lacus pel vitae. Quisque nisl mauris, aliquam eu ultrices vel, conse vitae sapien at imperdiet risus. Quisque cursus risus id. fermentum, in auctor quam consectetur.</p>
                        <h6><span>Address:</span>10111 Santa Monica Boulevard, LA</h6>
                        <h6><span>Phone:</span>+44 987 065 908</h6>
                        <h6><span>Email:</span>info@Example.com</h6>
                        <h6><span>Fax:</span>+44 987 065 909</h6>
                        <div class="footer-socail">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href=""><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInLeft">
                    <div class="contact-form">
                        <form action="">
                            <div class="input">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="input">
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="input">
                                <input type="text" name="title" placeholder="Your Title">
                            </div>
                            <div class="input">
                                <textarea name="comment" id="text-area" cols="30" rows="6" placeholder="Your Comment"></textarea>
                            </div>
                            <button class="submit theme-btn  wow fadeInUp">send message</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ================= Contact Area End =============== -->
    <footer>
        <p>Copyright 2019 - Bizcola | All Rights Reserved</p>
    </footer>
    <?php wp_footer() ?>
    <script>

        //isotop filtering
        jQuery('#container').imagesLoaded(function() {
            jQuery('.filter-button-group').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
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
            if ($(this).hasClass('active-btn')) {
                $(this).removeClass('active-btn');
            } else {
                $(this).addClass('active-btn');
                $(this).siblings().removeClass('active-btn');
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
