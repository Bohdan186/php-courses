<?php
session_start();
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
	$login = esc_html( $_POST['login'] );
	$password = esc_html( $_POST['password'] );
	$user_data = get_user_data_from_users( $login );

	foreach( $user_data as $user ) {
		if( $login === $user['name'] && password_verify( $password, $user['password'] ) ) {
			$_SESSION['login'] = $login;
		}else {
			echo 'user not found';
		}
	}
}

function logout() {
	if( ! isset( $_GET['logout'] ) ) {
		return;
	}

	unset( $_SESSION['login'] );
}

function get_current_route() {
	return esc_html( $_GET['action'] );
}

function show_btn_logout() {
	if ( $_SESSION['login'] ) {
		?>
			<a href="?logout" class="btn btn-light">Logout</a>
		<?php
	}
}

function save_edit() {
	if( ! isset( $_POST['save-edit'] ) ) {
		return;
	}

	$cafe_id = (int)esc_html( $_POST['save-edit'] );
	$cafe_name = esc_html( $_POST['name'] );
	$cafe_img = esc_html( $_POST['img'] );
	$cafe_type = esc_html( $_POST['type'] );
	$cafe_rating = (float)esc_html( $_POST['rating'] );
	$cafe_address = esc_html( $_POST['address'] );
	$cafe_time_work = esc_html( $_POST['time_work'] );
	$cafe_number = (int)esc_html( $_POST['number'] );
	$cafe_number_reviews = (int)esc_html( $_POST['number_reviews'] );

	edit_this_cafe_from_cafe( $cafe_id, $cafe_name, $cafe_img, $cafe_type, $cafe_address, $cafe_rating, $cafe_number_reviews, $cafe_time_work, $cafe_number );
}