<?php

/**
 * This feature is a router
 *
 */
function lb_router() {

	$action = esc_html( $_GET['action'] );

	if( empty( $action ) ) {
		$action = 'home';
	}

	switch ( $action ) {
		case 'home':
			lb_show_home_page_action();
			break;

		case 'contact-us':
			lb_show_contact_us_page_action();
			break;
		
		default:
			lb_show_404_page_action();
			break;
	}
}