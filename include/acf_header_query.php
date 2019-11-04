<?php




if(function_exists('acf_add_local_field_group')){
// Header Section
if( have_rows('global_setting_group','option') ): 
    while( have_rows('global_setting_group','option') ): the_row();
        
        $theme_logo_setup = get_sub_field('theme_logo_setup');

    endwhile;
endif;

}