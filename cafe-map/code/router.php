<?php 

function router() {

	$action = esc_html( $_GET['action'] );

	if( empty( $action ) ) {
		$action = 'home';
	}

	switch ( $action ) {
		case 'home':
			show_home_page_action();
			break;

		case 'contact-us':
			show_contact_us_page_action();
			break;
		
		default:
			show_404_page_action();
			break;
	}
}