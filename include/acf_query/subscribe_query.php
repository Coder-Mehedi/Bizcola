<?php 

// Subscribe Section

if( have_rows('subscribe_section_group','option') ): 
    while( have_rows('subscribe_section_group','option') ): the_row();
        
        $subscribe_section_title = get_sub_field('subscribe_section_title');
        $subscribe_section_description = get_sub_field('subscribe_section_description');
        $subscribe_button_link = get_sub_field('subscribe_button_link');

    endwhile;
endif;