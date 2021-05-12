<?php

function show_home_page_action(  ) {
	$cafe_data = array();
	$cafe_data['cafe'] = get_all_data_from_cafe();
	$cafe_data['name'] = 'home';

	show_templates( $cafe_data );
}

function show_404_page_action() {
	$page_404_data = array();
	$page_404_data['name'] = 'page_404';

	show_templates( $page_404_data );
}

function show_contact_us_page_action() {
	$contact_as_data = array();
	$contact_as_data['name'] = 'contact-us';

	show_templates( $contact_as_data );
}