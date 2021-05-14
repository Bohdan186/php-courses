<?php
session_start();
/**
 * The function is intended for output of arrays.
 *
 * @param  mixed $data - Accepts the arrays to be output.
 * @param bool $production - Takes a Boolean value. If the "True" parameter then the output of the array will be hidden,
 *                             to view it you will need to add "?x" to the url. Default parameter = "FALSE".
 */
function ar($data, bool $production = false ) {
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
function esc_html(string $str ): string {
	return htmlspecialchars( trim( $str ) );
}

/**
 * The function prepares the page for display.
 * Connects templates and transfers data from the array to them $data
 * 
 * @param array $data - an array with data for transfer to the created template
 */
function lb_show_templates(array $data ) {
	include 'view/header.tpl.php';
	include 'view/' . $data['name'] . '.tpl.php';
	include 'view/footer.tpl.php';
}

/**
 * The function checks whether the user is authorized.
 * If not, it shows the authorization form, and returns 'false'.
 *
 * @return bool
 */
function check_login(): bool {
    $answer = true;

    if ( ! $_SESSION['login'] && ! $_POST ) {
        lb_show_templates(
            array(
                'name' => 'login_page',
            )
        );
        $answer = false;
    }else {
        lb_logout();
        lb_remove_record();
    }

    return $answer;
}

/**
 * Checks on which page the user , and adds the active class
 *
 * @param string $page_name - indicates why the action is equal to.
 * @return string
 */
function lb_get_current_route(string $page_name = '' ): string {
    if( $page_name === esc_html( $_GET['action'] ) ) {
        return 'active';
    }
    return '';
}

/**
 * Checks whether there is a user in the database with the login and password specified in the form.
 * If so, it creates an entry for the session called login and writes the user's login to it
 *
 */
function lb_verify_user() {
	$login = esc_html( $_POST['login'] );
	$password = esc_html( $_POST['password'] );
	$user_data = lb_get_user_data_from_users( $login );

	if( $login === $user_data['name'] && password_verify( $password, $user_data['password'] ) ) {
		$_SESSION['login'] = $login;
	}
}

/**
 * Shows the exit button if there is a login entry in the session.
 *
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
 *
 */
function lb_logout() {
	if( ! isset( $_GET['logout'] ) ) {
		return;
	}

	unset( $_SESSION['login'] );
    header( 'Location:?action=admin' );
}

/**
 * This function added new record to database.
 */
function lb_save_record() {
    if( ! isset( $_POST['add-record'] ) ) {
        return;
    }

    $data = array(
        'name' => esc_html( $_POST['name'] ),
        'img' => esc_html( $_POST['img'] ),
        'type' => esc_html( $_POST['type'] ),
        'rating' => (float)esc_html( $_POST['rating'] ),
        'address' => esc_html( $_POST['address'] ),
        'time_work' => esc_html( $_POST['time_work'] ),
        'number' => (int)esc_html( $_POST['number'] ),
        'number_reviews' => (int)esc_html( $_POST['number_reviews'] ),
    );

    lb_add_new_cafe_from_cafe( $data );

    header( 'Location:?action=admin' );
}

/**
 * Saves changes made to the record
 *
 */
function lb_save_edit() {
	if( ! isset( $_POST['save-edit'] ) ) {
		return;
	}

    $data = array(
	    'id' => (int)esc_html( $_POST['save-edit'] ),
        'name' => esc_html( $_POST['name'] ),
	    'img' => esc_html( $_POST['img'] ),
	    'type' => esc_html( $_POST['type'] ),
	    'rating' => (float)esc_html( $_POST['rating'] ),
	    'address' => esc_html( $_POST['address'] ),
	    'time_work' => esc_html( $_POST['time_work'] ),
	    'number' => (int)esc_html( $_POST['number'] ),
	    'number_reviews' => (int)esc_html( $_POST['number_reviews'] ),
    );

	lb_edit_this_cafe_from_cafe( $data );

	header( 'Location:?action=admin' );
}

/**
 * Remove record from database
 *
 */
function lb_remove_record() {
    if( 'remove-record' != esc_html( $_GET['action'] ) ) {
        return;
    }

    $id = esc_html( $_GET['remove-id'] );

    lb_remove_this_cafe_from_cafe( $id );

    header( 'Location:?action=admin' );
}

function lb_get_start_record() {
    if( empty( $_GET['start-record'] ) ) {
        return 0;
    }

    return esc_html( $_GET['start-record'] );
}