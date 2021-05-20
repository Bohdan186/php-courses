<?php

/**
 * This feature is a router
 *
 */
function lb_router() {
	$action = esc_html( $_GET['action'] );
	
	if ( empty( $action ) ) {
		$action = 'admin';
	}
	
	if ( ! $_SESSION['login'] && ! $_POST ) {
		lb_show_templates(
			array(
				'name' => 'login_page',
			)
		);
		
		return;
	} else {
		lb_logout();
		lb_remove_record();
		lb_remove_page();
	}
	
	switch ( $action ) {
		case 'admin':
			lb_show_admin_page_action();
			break;
			
		case 'make_page':
			lb_show_make_page();
			break;
		
		case 'add_page':
			lb_show_add_page_action();
			break;

		case 'save_page':
			lb_save_page();
			break;
			
		case 'save_edit_page':
			lb_save_edit_page();
			break;
			
		case 'edit-page':
			lb_show_edit_page_page_action();
			break;

		case 'add_record':
			lb_show_add_record_page_action();
			break;

		case 'save_record':
			lb_save_record();
			break;

		case 'edit':
			lb_show_edit_page_action();
			break;

		case 'save_edit':
			lb_save_edit();
			break;
			
		default:
			lb_show_404_page_action();
			break;
	}
}
