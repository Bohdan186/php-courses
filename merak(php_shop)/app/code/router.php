<?php
/**
 * A file that describes the router function.
 *
 * @package router
 */

/**
 * This feature is a router
 *
 */
function lb_router() {
	$action = lb_esc_html( $_GET['action'] );
	
	if ( empty( $action ) ) {
		$action = 'home';
	}
	
	switch ( $action ) {
		case 'home':
			lb_show_home_page_action();
			break;
		
		case 'shop':
			lb_show_shop_page_action();
			break;
			
		case 'single_product':
			lb_show_single_product_page_action();
			break;
		
		default:
			lb_show_404_page_action();
			break;
	}
}