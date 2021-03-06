<?php
session_start();
/**
 * The function is intended for output of arrays.
 *
 * @param mixed $data - Accepts the arrays to be output.
 * @param bool  $production - Takes a Boolean value. If the "True" parameter then the output of the array will be hidden,
 *                                to view it you will need to add "?x" to the url. Default parameter = "FALSE".
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
 * Shields all threatening characters.
 *
 * @param string $str - The tape to be shielded.
 *
 * @return string
 */
function esc_html( $str ) {
	return htmlspecialchars( trim( $str ) );
}

/**
 * The function prepares the page for display.
 * Connects templates and transfers data from the array to them $data
 *
 * @param array $data - an array with data for transfer to the created template
 */
function lb_show_templates( $data ) {
	include 'view/header.tpl.php';
	include 'view/' . $data['name'] . '.tpl.php';
	include 'view/footer.tpl.php';
}

/**
 * Checks on which page the user , and adds the active class
 *
 * @param string $page_name - indicates why the action is equal to.
 * @return string
 */
function lb_get_current_route( $page_name = '' ) {
	if ( $page_name === esc_html( $_GET['action'] ) ) {
		return 'active';
	}
	return '';
}

/**
 * Checks whether there is a user in the database with the login and password specified in the form.
 * If so, it creates an entry for the session called login and writes the user's login to it
 */
function lb_verify_user() {
	if ( empty( $_POST['login'] ) && empty( $_POST['password'] ) ) {
		return;
	}

	$login     = esc_html( $_POST['login'] );
	$password  = esc_html( $_POST['password'] );
	$user_data = lb_get_user_data_from_users( $login );

	if ( $login === $user_data['name'] && password_verify( $password, $user_data['password'] ) ) {
		$_SESSION['login'] = $login;
	} else {
		if ( $login != $user_data['name'] ) {
			lb_add_notice( 'error', '?????????? ????????????????!' );
		} elseif ( empty( $login ) && empty( $password ) ) {
			lb_add_notice( 'error', '?????????????? ?????????? ???? ????????????!' );
		} elseif ( empty( $login ) ) {
			lb_add_notice( 'error', '?????????????? ??????????!' );
		} elseif ( empty( $password ) ) {
			lb_add_notice( 'error', '?????????????? ????????????!' );
		}

		header( 'Location: index.php' );
		die();
	}
}

/**
 * Shows the exit button if there is a login entry in the session.
 */
function lb_show_btn_logout() {
	if ( $_SESSION['login'] ) {
		?>
		<a href="?logout" class="btn btn-light">Logout</a>
		<?php
	}
}

/**
 * If the logout button is pressed then the login entry will be deleted from the session.
 */
function lb_logout() {
	if ( ! isset( $_GET['logout'] ) ) {
		return;
	}

	unset( $_SESSION['login'] );
	header( 'Location:?action=admin' );
	die();
}

/**
 * This function added new record to database.
 */
function lb_save_record() {
	if ( ! isset( $_POST['save-record'] ) ) {
		return;
	}

	if ( empty( $_POST['name'] ) ) {
		lb_add_notice( 'error', '?????????????? ??????????' );
	}
	if ( empty( $_POST['type'] ) ) {
		lb_add_notice( 'error', '?????????????? ?????? ??????????????' );
	}
	if ( empty( $_POST['img'] ) ) {
		lb_add_notice( 'error', '?????????????? ???????? ???? ????????????????' );
	}
	if ( empty( $_POST['address'] ) ) {
		lb_add_notice( 'error', '?????????????? ????????????' );
	}
	if ( empty( $_POST['time_work'] ) ) {
		lb_add_notice( 'error', '?????????????? ???????????? ????????????' );
	}
	if ( empty( $_POST['number'] ) ) {
		lb_add_notice( 'error', '?????????????? ?????????? ????????????????' );
	}

	if ( ! empty( $_SESSION['notice']['error'] ) ) {
		header( 'Location:?action=add_record' );
		return;
	} else {

		$data = array(
			'name'           => esc_html( $_POST['name'] ),
			'type'           => esc_html( $_POST['type'] ),
			'img'            => esc_html( $_POST['img'] ),
			'address'        => esc_html( $_POST['address'] ),
			'time_work'      => esc_html( $_POST['time_work'] ),
			'rating'         => (float) esc_html( $_POST['rating'] ),
			'number'         => (int) esc_html( $_POST['number'] ),
			'number_reviews' => (int) esc_html( $_POST['number_reviews'] ),
		);

		if ( lb_change_cafe_from_cafe( $data, 'add' ) ) {
			lb_add_notice( 'success', '?????????? ?????????????? ????????????!' );
		} else {
			lb_add_notice( 'error', '?????????? ???? ????????????!' );
		}

		header( 'Location:?action=admin' );
		die();
	}
}

/**
 * Saves changes made to the record
 */
function lb_save_edit() {
	if ( ! isset( $_POST['save-edit'] ) ) {
		return;
	}

	if ( empty( $_POST['name'] ) ) {
		lb_add_notice( 'error', '?????????????? ??????????' );
	}
	if ( empty( $_POST['type'] ) ) {
		lb_add_notice( 'error', '?????????????? ?????? ??????????????' );
	}
	if ( empty( $_POST['img'] ) ) {
		lb_add_notice( 'error', '?????????????? ???????? ???? ????????????????' );
	}
	if ( empty( $_POST['address'] ) ) {
		lb_add_notice( 'error', '?????????????? ????????????' );
	}
	if ( empty( $_POST['time_work'] ) ) {
		lb_add_notice( 'error', '?????????????? ???????????? ????????????' );
	}
	if ( empty( $_POST['number'] ) ) {
		lb_add_notice( 'error', '?????????????? ?????????? ????????????????' );
	}

	if ( ! empty( $_SESSION['notice']['error'] ) ) {
		header( 'Location:?action=edit&edit-id=' . $_POST['save-edit'] );
		return;
	}

	$data = array(
		'id'             => (int) esc_html( $_POST['save-edit'] ),
		'name'           => esc_html( $_POST['name'] ),
		'img'            => esc_html( $_POST['img'] ),
		'type'           => esc_html( $_POST['type'] ),
		'rating'         => (float) esc_html( $_POST['rating'] ),
		'address'        => esc_html( $_POST['address'] ),
		'time_work'      => esc_html( $_POST['time_work'] ),
		'number'         => (int) esc_html( $_POST['number'] ),
		'number_reviews' => (int) esc_html( $_POST['number_reviews'] ),
	);

	if ( lb_change_cafe_from_cafe( $data, 'edit' ) ) {
		lb_add_notice( 'success', '?????????? ?????????????? ????????????????!' );
	} else {
		lb_add_notice( 'error', '?????????? ???? ????????????????!' );
	}

	header( 'Location:?action=admin' );
	die();
}

/**
 * Remove record from database
 */
function lb_remove_record() {
	if ( 'remove-record' != esc_html( $_GET['action'] ) ) {
		return;
	}

	$id = esc_html( $_GET['remove-id'] );

	if ( lb_remove_this_cafe_from_cafe( $id ) ) {
		lb_add_notice( 'success', '?????????? ?????????????? ????????????????!' );
	} else {
		lb_add_notice( 'error', '?????????? ???? ????????????????!' );
	}

	header( 'Location:?action=admin' );
	die();
}

/**
 * Remove page from database
 */
function lb_remove_page() {
	if ( 'remove-page' !== esc_html( $_GET['action'] ) ) {
		return;
	}

	$id = esc_html( $_GET['id'] );

	if ( lb_remove_this_page_from_pages( $id ) ) {
		lb_add_notice( 'success', '?????????? ?????????????? ????????????????!' );
	} else {
		lb_add_notice( 'error', '?????????? ???? ????????????????!' );
	}

	header( 'Location:?action=make_page' );
	die();
}

/**
 * add active class
 *
 * @return int|string
 */
function lb_get_start_record() {
	if ( empty( $_GET['start-record'] ) ) {
		return 0;
	}

	return esc_html( $_GET['start-record'] );
}

/**
 * Add notice in Session['notice'].
 *
 * @param string $type type.
 * @param string $message message.
 */
function lb_add_notice( $type, $message ) {
	$_SESSION['notice'][ $type ][] = $message;
}

/**
 *
 *
 * @param $type
 */
function lb_print_notice( $type ) {
	if ( 'error' === $type && ! empty( $_SESSION['notice']['error'] ) ) :
		?>

		<div class="alert alert-danger" role="alert">
			<?php
			foreach ( $_SESSION['notice']['error'] as $error ) {
				echo $error . '<br>';
			}
			?>
		</div>
		<?php
		unset( $_SESSION['notice']['error'] );
	endif;

	if ( 'success' === $type && ! empty( $_SESSION['notice']['success'] ) ) :
		?>
		<div class="alert alert-success" role="alert">
			<?php
			foreach ( $_SESSION['notice']['success'] as $success ) {
				echo $success . '<br>';
			}
			?>
		</div>
		<?php
		unset( $_SESSION['notice']['success'] );
	endif;
}
