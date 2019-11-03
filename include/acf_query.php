<?php 


if(function_exists('acf_add_local_field_group')){
// Banner Section
if( have_rows('banner_button_settings','option') ): 
    while( have_rows('banner_button_settings','option') ): the_row();
        
        $left_banner_button_link = get_sub_field('left_banner_button_link');
        $right_banner_button_link = get_sub_field('right_banner_button_link');

    endwhile;
endif;


if( have_rows('banner_slider','option') ): 
    while( have_rows('banner_slider','option') ): the_row();
        $sliders[] = [
            'background' => $banner_background[] = get_sub_field('banner_background'),
            'title' => $banner_main_title[] = get_sub_field('banner_main_title'),
            'content' => $banner_content_text[] = get_sub_field('banner_content_text')
        ];
        
    endwhile;
endif;

// About Section
if( have_rows('about_section_group','option') ): 
    while( have_rows('about_section_group','option') ): the_row();
        $about_section_title = get_sub_field('about_section_title');
        $about_section_description = get_sub_field('about_section_description');
        $about_section_content = get_sub_field('about_section_content');
        $about_section_small_background = get_sub_field('about_section_small_background');
        $about_background = get_sub_field('about_section_small_background');

        function about_background_css() { 
            global $about_background;
            ?>
                <style>
                    .about-area::after {background: url(<?php echo $about_background['url']; ?>); }
                </style>
            <?php
        }
        add_action('wp_head', 'about_background_css');

        if( have_rows('about_section_button_settings','option') ): 
            while( have_rows('about_section_button_settings','option') ): the_row();
                $about_section_button_text_link = get_sub_field('about_section_button_text_link');
                $about_section_button_background = get_sub_field('about_section_button_background');
            endwhile;
        endif;
        

        if( have_rows('about_section_video_settings_group','option') ): 
            while( have_rows('about_section_video_settings_group','option') ): the_row();
                $about_section_video_thumbnail_image = get_sub_field('about_section_video_thumbnail_image');
                $about_section_video_url = get_sub_field('about_section_video_url');
            endwhile;
        endif;

        if( have_rows('about_section_button_settings','option') ): 
            while( have_rows('about_section_button_settings','option') ): the_row();
                $about_section_button_text_link = get_sub_field('about_section_button_text_link');
                $about_section_button_background = get_sub_field('about_section_button_background');
            endwhile;
        endif;

        if( have_rows('about_bottom_group','option') ): 
            while( have_rows('about_bottom_group','option') ): the_row();
                $about_bottoms[] = [

                'icon' => $about_bottom_icon[] = get_sub_field('about_bottom_icon'),
                'title' => $about_bottom_title[] = get_sub_field('about_bottom_title'),
                'content' => $about_bottom_content[] = get_sub_field('about_bottom_content')
            ];
            endwhile;
        endif;
        
    endwhile;
endif;

// Our Services Section

$our_services_title = get_field('our_services_title', 'option');
$our_services_description = get_field('our_services_description', 'option');

// Subscribe Section

if( have_rows('subscribe_section_group','option') ): 
    while( have_rows('subscribe_section_group','option') ): the_row();
        
        $subscribe_section_title = get_sub_field('subscribe_section_title');
        $subscribe_section_description = get_sub_field('subscribe_section_description');
        $subscribe_button_link = get_sub_field('subscribe_button_link');

    endwhile;
endif;

// Recent Projects
if( have_rows('recent_project','option') ): 
    while( have_rows('recent_project','option') ): the_row();
        
        $recent_project_air_cargos = get_sub_field('recent_project_air_cargo');
        $recent_project_sea_shippings = get_sub_field('recent_project_sea_shipping');
        $recent_project_road_transports = get_sub_field('recent_project_road_transport');
        $recent_project_lighter_ships = get_sub_field('recent_project_lighter_ship');

    endwhile;
endif;




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

// Our Blog Section

if( have_rows('our_recent_blog_section_group','option') ): 
    while( have_rows('our_recent_blog_section_group','option') ): the_row();

        $customize_recent_blog_section_title = get_sub_field('customize_recent_blog_section_title');
        $customize_recent_blog_section_description = get_sub_field('customize_recent_blog_section_description');

    endwhile;
endif;




}