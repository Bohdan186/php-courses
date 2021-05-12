<?php

function router() {

	$action = esc_html( $_GET['action'] );

	if ( empty( $action ) ) {
		$action = 'admin';
	}

	if ( ! $_SESSION['login'] && ! $_POST ) {
		show_templates(
			array(
				'name' => 'login_page',
			)
		);
		return;
	}

	switch ( $action ) {
		case 'admin':
			show_admin_page_action();
			break;

		case 'edit':
			show_edit_page_action();
			break;
			
		default:
			show_404_page_action();
			break;
	}
}
