<?php 
if(function_exists('acf_add_local_field_group')){

// Contact Section
$contact_title = get_field('contact_title', 'option');
$contact_info_description = get_field('contact_info_description', 'option');
$contact_address = get_field('contact_address', 'option');
$contact_info_phone = get_field('contact_info_phone', 'option');
$contact_email = get_field('contact_email', 'option');
$contact_info_fax = get_field('contact_info_fax', 'option');

$company_facebook = get_field('company_facebook', 'option');
$company_twitter = get_field('company_twitter', 'option');
$company_google_plus = get_field('company_google_plus', 'option');
$company_website = get_field('company_website', 'option');



// Footer Section
$customize_copyright_text = get_field('customize_copyright_text', 'option');







}