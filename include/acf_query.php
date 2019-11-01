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
                $about_bottom_icon[] = get_sub_field('about_bottom_icon');
                $about_bottom_title[] = get_sub_field('about_bottom_title');
                $about_bottom_content[] = get_sub_field('about_bottom_content');
            endwhile;
        endif;
        
    endwhile;
endif;











}