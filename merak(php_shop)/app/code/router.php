<?php
/**
 * A file that describes the router function.
 *
 * @package router
 */

/**
 * This feature is a router
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

		case 'shop':
			lb_show_shop_page_action();
			break;

		case 'single_product':
			lb_show_single_product_page_action();
			break;

		case 'view_cart':
			lb_show_view_cart_page_action();
			break;
			
		case 'check_out':
			lb_show_check_out_page_action();
			break;
			
		case 'order_complete':
			lb_show_order_complete_page_action();
			break;
			
		default:
			lb_show_404_page_action();
			break;
	}
}
