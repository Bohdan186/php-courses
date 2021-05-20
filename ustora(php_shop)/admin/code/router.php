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
		$action = 'admin';
	}

	switch ( $action ) {
		case 'admin':
			lb_show_admin_page_action();
			break;

		default:
			lb_show_404_page_action();
			break;
	}
}
