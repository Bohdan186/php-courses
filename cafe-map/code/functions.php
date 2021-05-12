<?php
/**
 * Ar
 *
 * The function is intended for output of arrays.
 *
 * @param  mixed $data - Accepts the mass to be output.
 * @param  bool  $production - Takes a Boolean value. If the "True" parameter then the output of the array will be hidden,
 *                             to view it you will need to add "?x" to the url. Default parameter = "FALSE".
 */
function ar( $data, $production = false ) {
	if ( $production ) {
		if ( isset( $_GET['x'] ) ) {
			echo '<pre>';
			print_r( $data );
			echo '<pre>';
		}
	} else {
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
	}
}

/**
 * Esc_html
 *
 * Shields all threatening characters.
 *
 * @param  string $str - The tape to be shielded.
 *
 * @return statement
 */
function esc_html( $str ) {
	return htmlspecialchars( trim( $str ) );
}

function show_templates( $data ) {
	extract( $data );
	
	include 'view/header.tpl.php';
	include 'view/' . $name . '.tpl.php';
	include 'view/footer.tpl.php';
}

function verify_user() {
	if( ! isset( $_POST['login-btn'] ) || empty( $_POST['login'] ) || empty( $_POST['login'] ) ) {
		return;
	}

	$login = esc_html( $_POST['login'] );
	$password = esc_html( $_POST['password'] );

	$user_data = get_user_data_from_users( $login );

	if( password_verify( $login, $user_data['password'] ) ) {
		return true;
	}else {
		return false;
	}
	
}

function get_current_route() {
	return esc_html( $_GET['action'] );
}