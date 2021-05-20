<?php

/**
 * This feature is a router
 *
 */
function lb_router() {
	
	$action = esc_html( $_GET['action'] );
	
	if ( empty( $action ) ) {
		$action = 'home';
	}
	
	switch ( $action ) {
		case 'home':
			lb_show_home_page_action();
			break;
		
		case 'page':
			lb_show_pages_action();
			break;
		
		default:
			lb_show_404_page_action();
			break;
	}
}