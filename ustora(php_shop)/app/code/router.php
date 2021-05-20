<?php
/**
 * The router.php file checks the url and depending on the GET request ( '?action=...' )
 * calls a function that will show the user the desired page.
 *
 * @package router.php
 */

/**
 * This feature is a router between the pages of the site.
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

		case 'cart':
			lb_show_cart_page_action();
			break;

		case 'checkout':
			lb_show_checkout_page_action();
			break;

		case 'single-product':
			lb_show_single_product_page_action();
			break;

		case 'shop':
			lb_show_shop_page_action();
			break;

		case 'admin':
			lb_redirect( 'admin' );
			break;

		default:
			lb_show_404_page_action();
			break;
	}
}
