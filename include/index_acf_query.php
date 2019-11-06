<?php 


if(function_exists('acf_add_local_field_group')){
// Header Section
if( have_rows('global_setting_group','option') ): 
    while( have_rows('global_setting_group','option') ): the_row();
        
        $theme_logo_setup = get_sub_field('theme_logo_setup');
        $you_want_service_section = get_sub_field('you_want_service_section');
    endwhile;
endif;


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



// Our Services Section

$our_services_title = get_field('our_services_title', 'option');
$our_services_description = get_field('our_services_description', 'option');


// Our Blog Section

if( have_rows('our_recent_blog_section_group','option') ): 
    while( have_rows('our_recent_blog_section_group','option') ): the_row();

        $customize_recent_blog_section_title = get_sub_field('customize_recent_blog_section_title');
        $customize_recent_blog_section_description = get_sub_field('customize_recent_blog_section_description');

    endwhile;
endif;






}