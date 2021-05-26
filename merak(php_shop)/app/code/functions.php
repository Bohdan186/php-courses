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

	return lb_esc_html( $_GET['start-record'] );
}

/**
 * The function add product data to session
 */
function lb_add_product_data_to_session() {
	if ( ! isset( $_GET['add_to_cart'] ) ) {
		return;
	}

	$product_id = lb_esc_html( $_GET['add_to_cart'] );
	$flag       = false;

	foreach ( $_SESSION['cart'] as $key => $product ) {
		if ( $product_id === $product['product_id'] ) {
			$_SESSION['cart'][ $key ]['product_count'] += 1;
			$flag                                       = true;
		}
	}

	if ( ! $flag ) {
		$add_product = array(
			'product_id'    => $product_id,
			'product_count' => 1,
		);

		$_SESSION['cart'][] = $add_product;
	}

	header( 'Location: ?action=' . lb_esc_html( $_GET['action'] ) );
	die();
}

/**
 * The function delete product data to session
 */
function lb_delete_product_data_from_session() {
	if ( ! isset( $_GET['delete_from_cart'] ) ) {
		return;
	}

	$product_id = lb_esc_html( $_GET['delete_from_cart'] );

	foreach ( $_SESSION['cart'] as $key => $product ) {
		if ( $product_id === $product['product_id'] ) {
			unset( $_SESSION['cart'][ $key ] );
		}
	}

	header( 'Location: ?action=' . lb_esc_html( $_GET['action'] ) );
	die();
}

/**
 * The function return products id from session
 *
 * @return string
 */
function lb_get_products_id_from_session() {
	$products_in_cart = $_SESSION['cart'];
	$products_id      = '';

	foreach ( $products_in_cart as $product ) {
		$products_id .= ' id = ' . $product['product_id'] . ' OR';
	}

	return substr( $products_id, 0, -2 );
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

	foreach ( $_SESSION['cart'] as $product ) {
		if ( true === $getAll ) {
			foreach ( lb_get_product_price_by_id( $product['product_id'] ) as $price ) {
				$product_price += $price * $product['product_count'];
			}
		} else {

			foreach ( lb_get_product_price_by_id( $id ) as $price ) {
				$product_price = $price * $product['product_count'];
			}
		}
		$count += $product['product_count'];

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
