<?php 

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
