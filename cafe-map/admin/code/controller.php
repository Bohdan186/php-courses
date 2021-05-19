<?php

/**
 * Creates admin page
 *
 */
function lb_show_admin_page_action() {
	lb_verify_user();
	
	$start_record = lb_get_start_record();
	
	lb_show_templates(
		array(
			'name'  => 'admin',
			'cafe'       => lb_get_all_data_from_cafe( $start_record ),
			'cafe_count' => lb_get_count_from_cafe(),
		)
	);
}

/**
 * Creates an add record page for the selected entry
 *
 */
function lb_show_add_record_page_action() {
	lb_show_templates(
		array(
			'name' => 'add',
		)
	);
}

/**
 * Creates an edit page for the selected entry
 *
 */
function lb_show_edit_page_action() {
	lb_show_templates(
		array(
			'name'      => 'edit',
			'this_cafe' => lb_get_this_cafe_from_cafe( $_GET['edit-id'] ),
		)
	);
}

/**
 * Show admin page
 *
 */
function lb_show_add_page_action() {
	lb_show_templates(
		array(
			'name' => 'add_page',
		)
	);
}

function lb_save_page() {
	if( !isset( $_POST['save_page'] ) ) {
		return;
	}

	$page_name = esc_html( $_POST['page_name'] );
	$page_content = $_POST['mytextarea'];

	if( lb_add_page( $page_name, $page_content ) ) {
		lb_add_notice( 'success', 'Сторінку додано' );
	}else {
		lb_add_notice( 'error', 'Сторінку не додано' );
	}

	header( 'Location:?action=admin' );
	die();
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
