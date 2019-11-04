<?php 


// Team Member Section

$team_member_section_title = get_field('team_member_section_title', 'option');
$team_member_section_description = get_field('team_member_section_description', 'option');
$team_member_section_button = get_field('team_member_section_button', 'option');


if( have_rows('team_members_section','option') ): 
    while( have_rows('team_members_section','option') ): the_row();
        
        $members[] = [
        'photo' => $members_photo[] = get_sub_field('member_photo'),
        'name' => $members_names[] = get_sub_field('member_name'),
        'job' => $member_job_fields[] = get_sub_field('member_job_field'),

        'fb' => $members_facebook_profile_link[] = get_sub_field('member_facebook_profile_link'),
        'twitter' => $members_twitter_profile_link[] = get_sub_field('member_twitter_profile_link'),
        'google-plus' => $members_google_plus_profile_link[] = get_sub_field('member_google_plus_profile_link'),
        'website' => $member_website[] = get_sub_field('member_website')
    ];

    endwhile;
endif;
