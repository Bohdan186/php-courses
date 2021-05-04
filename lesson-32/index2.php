<?php
/**
 * Description of what this module (or file) is doing.
 *
 * @package lessons-32
 */

session_start();

/**
 * Ar
 *
 * @param  mixed $data comment about this variable.
 * @param  mixed $production comment about this variable.
 *
 * @return void
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
 * @param  string $str - string.
 *
 * @return statement
 */
function esc_html( $str ) {
	$result = htmlspecialchars( trim( $str ) );

	return $result;
}

/**
 * Lb_todo_1
 *
 * @return void
 */
function lb_todo_1() {

	$_SESSION['test'] = 'test';

	if ( isset( $_GET['get_session_value'] ) ) {
		echo $_SESSION['test'];
	}

}

/**
 * Lb_todo_2
 *
 * @return void
 */
function lb_todo_2_write() {
	if ( ! isset( $_GET['write'] ) ) {
		return;
	}

	if ( ! empty( $_GET['write_session'] ) ) {
		$_SESSION['write'] = esc_html( $_GET['write_session'] );
	}
}

function lb_todo_2_ride() {
	if ( isset( $_SESSION['write'] ) ) {
		echo esc_html( $_SESSION['write'] );
	}
}

function lb_todo_3() {
	if ( ! isset( $_SESSION['counter'] ) ) {
		$_SESSION['counter'] = 1;
		echo 'вы еще не обновляли страницу <br>';
	} else {
		$_SESSION['counter'] +=  1;
	}

	echo 'Вы обновили эту страницу ' . $_SESSION['counter'] . ' раз! <br>';
}

function lb_todo_4_write_country() {
	if ( ! isset( $_GET['write_country'] ) ) {
		return;
	}

	if ( ! empty( $_GET['write_input_country'] ) ) {
		$_SESSION['write_session_country'] = esc_html( $_GET['write_input_country'] );
	}
}

function lb_todo_4_ride_country() {
	if ( isset( $_SESSION['write_session_country'] ) ) {
		echo esc_html( $_SESSION['write_session_country'] );
	}
}

function lb_todo_5() {

	if ( ! isset( $_SESSION['time_in_site'] ) ) {
		$_SESSION['time_in_site'] = time();
	}else {
		echo time() - $_SESSION['time_in_site'] . ' секунд назад пользователь зашел на сайт <br>';
	}

}

function lb_todo_6_w_email() {

	if ( ! isset( $_POST['w_email'] ) ) {
		return;
	}

	if ( ! empty( $_POST['user-email'] ) ) {
		$_SESSION['write_session_email'] = esc_html( $_POST['user-email'] );
	}

}

function lb_todo_6_get_email() {
	if ( isset( $_SESSION['write_session_email'] ) ) {
		return $_SESSION['write_session_email'];
	}
}