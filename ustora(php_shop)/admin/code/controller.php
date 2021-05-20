<?php
/**
 * Controller receives the input data and converts it into commands for the model or view.
 *
 * @package controller.php
 */

/**
 * This function shows page 404.
 */
function lb_show_404_page_action() {
	lb_show_templates(
		array(
			'name' => 'page_404',
		)
	);
}

/**
 * This function shows admin page.
 */
function lb_show_admin_page_action() {
	lb_show_templates(
		array(
			'name' => 'admin',
		)
	);
}

