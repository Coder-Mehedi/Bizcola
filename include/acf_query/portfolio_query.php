<?php 


// Recent Projects || portfolio
$recent_project_section_title = get_field('recent_project_section_title', 'option');
$recent_project_section_description = get_field('recent_project_section_description', 'option');


if( have_rows('recent_project','option') ): 
    while( have_rows('recent_project','option') ): the_row();
        
        $recent_project_air_cargos = get_sub_field('recent_project_air_cargo');
        $recent_project_sea_shippings = get_sub_field('recent_project_sea_shipping');
        $recent_project_road_transports = get_sub_field('recent_project_road_transport');
        $recent_project_lighter_ships = get_sub_field('recent_project_lighter_ship');

    endwhile;
endif;

