<?php

/**
 * Creates home page
 *
 */
function lb_show_home_page_action() {
	lb_show_templates(
		array(
			'name' => 'home',
			'cafe' => lb_get_all_data_from_cafe(),
		)
	);
}

/**
 * Creates 'contact us' page
 *
 */
function lb_show_contact_us_page_action() {
	lb_show_templates(
		array(
			'name' => 'contact-us',
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