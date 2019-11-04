<?php 


if(function_exists('acf_add_local_field_group')){
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



}