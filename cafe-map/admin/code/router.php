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
	}

	switch ( $action ) {
		case 'admin':
			lb_show_admin_page_action();
			break;

		case 'edit':
			lb_show_edit_page_action();
			break;
			
		default:
			lb_show_404_page_action();
			break;
	}
}
