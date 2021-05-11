<?php 

function router() {
	if( ! isset( $_GET['action'] ) ) {
		set_link_controler( 'home' );
	}else if( 'contact-us' === $_GET['action'] ) {
		set_link_controler( 'contact-us' );
	}else {
		set_link_controler( 'page_404' );
	};
}