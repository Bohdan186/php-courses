<?php

function show_admin_page_action() {
	verify_user();
	
	show_templates(
		array(
			'name' => 'admin',
			'cafe' => get_all_data_from_cafe(),
			'count_records_from_cafe' => get_count_records_from_cafe()[0]['COUNT(*)'],
		)
	);
	logout();
}

function show_edit_page_action() {
	save_edit();

	show_templates(
		array(
			'name' => 'edit',
			'this_cafe' => get_this_cafe_from_cafe( $_GET['edit-id'] )[0],
		)
	);
}

function show_404_page_action() {
	$page_404_data         = array();
	$page_404_data['name'] = 'page_404';

	show_templates( $page_404_data );
}
