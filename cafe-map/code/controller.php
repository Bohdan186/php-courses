<?php

/**
 * Creates home page
 *
 */
function lb_show_home_page_action() {
	$start_record = lb_get_start_record();
	
	lb_show_templates(
		array(
			'name'       => 'home',
			'cafe'       => lb_get_all_data_from_cafe( $start_record ),
			'cafe_count' => lb_get_count_from_cafe(),
			'pages'      => lb_get_all_pages_from_pages(),
		)
	);
}

/**
 * Creates a 404 error page
 *
 */
function lb_show_404_page_action() {
	lb_show_templates(
		array(
			'name' => 'page_404',
		)
	);
}