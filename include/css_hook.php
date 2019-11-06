<?php 
function hook_css() { ?>
        <style>
            .about-area::after {
			    background: rgba(0, 0, 0, 0) url("<?php echo get_template_directory_uri() ?>/assets/img/bg/about-bg.jpg") no-repeat scroll 0 0;
			}
			.subscribe-area {
			    background: url("<?php echo get_template_directory_uri() ?>/assets/img/bg/subscribe-bg.jpg"
			    	);
			}
			.contact-area {
			    background: url("<?php echo get_template_directory_uri() ?>/assets/img/bg/footer-bg.jpg");
			}

			.pop-video {
			    background: url("<?php echo get_template_directory_uri() ?>/assets/img/bg/pop-bg.jpg");
			}

			.page-area {
			    background: url("<?php echo get_template_directory_uri() ?>/assets/img/bg/page-bg.jpg");
			}
		</style>
    <?php
}
add_action('wp_head', 'hook_css');