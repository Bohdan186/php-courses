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
 */
function lb_show_add_page_action() {
	lb_show_templates(
		array(
			'name' => 'add_page',
		)
	);
}

/**
 * Add new page in database
 */
function lb_save_page() {
	if ( ! isset( $_POST['save_page'] ) ) {
		return;
	}

	$page_name = esc_html( $_POST['page_name'] );
	$page_content = $_POST['mytextarea'];

	if ( lb_add_page( $page_name, $page_content ) ) {
		lb_add_notice( 'success', 'Сторінку додано' );
	} else {
		lb_add_notice( 'error', 'Сторінку не додано' );
	}

	header( 'Location:?action=make_page' );
	die();
}

function lb_save_edit_page() {
	if ( ! isset( $_POST['save_edit_page'] ) ) {
		return;
	}

	$id           = esc_html( $_POST['save_edit_page'] );
	$page_name    = esc_html( $_POST['page_name'] );
	$page_content = $_POST['mytextarea'];

	if ( lb_edit_page( $id, $page_name, $page_content ) ) {
		lb_add_notice( 'success', 'Сторінку змінено' );
	} else {
		lb_add_notice( 'error', 'Сторінку не змінено' );
	}

	header( 'Location:?action=make_page' );
	die();
}

/**
 * Creates a 404 error page
 */
function lb_show_404_page_action() {
	lb_show_templates(
		array(
			'name' => 'page_404',
		)
	);
}

/**
 * Creates a make_page page
 */
function lb_show_make_page() {
	lb_show_templates(
		array(
			'name'  => 'make_page',
			'pages' => lb_get_all_pages_from_pages(),
		)
	);
}

function lb_show_edit_page_page_action() {
	$id = esc_html( $_GET['id'] );

	lb_show_templates(
		array(
			'name'  => 'edit_page',
			'page_data' => lb_get_this_page_data_from_pages( $id ),
		)
	);
}