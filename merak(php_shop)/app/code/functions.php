<?php
/**
 * The file describes the main functions of the project.
 *
 * @package functions
 */

session_start();

/**
 * The function prepares the page for display.
 * Connects templates and transfers data from the array to them $data
 *
 * @param array $data - an array with data for transfer to the created template
 */
function lb_show_templates( $data ) {
	include 'app/view/header.tpl.php';
	include 'app/view/' . $data['name'] . '.tpl.php';
	include 'app/view/footer.tpl.php';
}

/**
 * The function returns the initial index from the GET request for pagination
 *
 * @return int
 */
function lb_get_start_record() {
	if ( empty( $_GET['start-record'] ) ) {
		return 0;
	}

	return esc_html( $_GET['start-record'] );
}

/**
 * The function add product data to session
 */
function lb_add_product_data_to_session() {
	if ( ! isset( $_GET['add_to_cart'] ) ) {
		return;
	}

	$product_id = esc_html( $_GET['add_to_cart'] );
	$flag       = false;

	if ( isset( $_SESSION['cart'] ) ) {
		foreach ( $_SESSION['cart'] as $key => $product ) {
			if ( $product_id === $product['product_id'] ) {
				$_SESSION['cart'][ $key ]['product_count'] += 1;
				$flag                                       = true;
			}
		}
	}

	if ( ! $flag ) {
		$add_product = array(
			'product_id'    => $product_id,
			'product_count' => 1,
		);

		$_SESSION['cart'][] = $add_product;
	}

	if ( 'single_product' === $_GET['action'] ) {
		lb_redirect( '?action=' . esc_html( $_GET['action'] ) . '&id=' . esc_html( $_GET['id'] ) );
	} else {
		lb_redirect( '?action=' . esc_html( $_GET['action'] ) );
	}

}

/**
 * The function delete product data to session
 */
function lb_delete_product_data_from_session() {
	if ( ! isset( $_GET['delete_from_cart'] ) ) {
		return;
	}

	$product_id = esc_html( $_GET['delete_from_cart'] );

	foreach ( $_SESSION['cart'] as $key => $product ) {
		if ( $product_id === $product['product_id'] ) {
			unset( $_SESSION['cart'][ $key ] );
		}
	}

	header( 'Location: ?action=' . esc_html( $_GET['action'] ) );
	die();
}

/**
 * The function return count products in cart
 *
 * @return int
 */
function lb_get_count_products_in_cart() {
	if ( ! $_SESSION['cart'] ) {
		return 0;
	}

	$count = 0;

	foreach ( $_SESSION['cart'] as $product ) {
		$count += $product['product_count'];
	}

	return $count;
}

function lb_add_product_count_in_session() {
	if ( ! isset( $_POST['add_to_cart'] ) || ! $_SESSION['cart'] ) {
		return;
	}

	$add_count  = esc_html( $_POST['add_product_count'] );
	$product_id = esc_html( $_POST['add_to_cart'] );

	foreach ( $_SESSION['cart'] as &$product ) {
		if ( $product['product_id'] === $product_id ) {
			$product['product_count'] = lb_get_count_product_in_cart( $product_id ) + (int) $add_count;
		}
	}
}

/**
 * The function return count product in cart
 *
 * @param int $id id.
 *
 * @return int
 */
function lb_get_count_product_in_cart( $id ) {
	if ( ! $_SESSION['cart'] ) {
		return 0;
	}

	$count = 0;

	foreach ( $_SESSION['cart'] as $product ) {
		if ( $id === $product['product_id'] ) {
			$count = $product['product_count'];
		}
	}

	return $count;
}

/**
 * The function return price product in cart
 *
 * @param bool $getAll default true. If true - count sum all product, if false - count sum by $id.
 * @param int  $id default (int)0. If $getAll = false - you need set product id!
 *
 * @return int
 */
function lb_get_price_product_in_cart( $getAll = true, $id = 0 ) {
	if ( ! $_SESSION['cart'] ) {
		return 0;
	}

	$product_price = 0;
	$count         = 0;

	if ( true === $getAll ) {
		foreach ( $_SESSION['cart'] as $product ) {
			foreach ( lb_get_product_price_by_id( $product['product_id'] ) as $price ) {
				$product_price += $price * $product['product_count'];
			}

			$count += $product['product_count'];
		}
	} else {
		foreach ( lb_get_product_price_by_id( $id ) as $price ) {
			foreach ( $_SESSION['cart'] as $product ) {
				if ( $product['product_id'] === $id ) {
					$product_price = $price * $product['product_count'];
				}
			}
		}
	}

	return $product_price;
}

/**
 * The function check active page and if true - return string 'active'
 *
 * @param string $action page.
 *
 * @return string
 */
function lb_check_active_page( $action ) {
	if ( $action === $_GET['action'] ) {
		return 'active';
	} else {
		return '';
	}
}


function lb_submit_check_out_form() {
	if ( ! isset( $_POST['submit-check-out'] ) ) {
		return;
	}

	lb_add_order_to_orders_table(
		array(
			'user_first_name' => esc_html( $_POST['user_first_name'] ),
			'user_last_name'  => esc_html( $_POST['user_last_name'] ),
			'telephone'       => esc_html( $_POST['telephone'] ),
			'inputAddress'    => esc_html( $_POST['inputAddress'] ),
			'email'           => esc_html( $_POST['email'] ),
			'inputCity'       => esc_html( $_POST['inputCity'] ),
			'inputRegion'     => esc_html( $_POST['inputRegion'] ),
			'inputZip'        => esc_html( $_POST['inputZip'] ),
			'user_order'      => 'data',
		)
	);

}
