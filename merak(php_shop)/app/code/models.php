<?php
/**
 * The file describes the functions for working with the database.
 *
 * @package models
 */

$lb_pdo = new PDO( 'mysql:host=192.168.1.79;dbname=merak_db', 'bohdan', 'bohdan' );

/**
 * This function return products data for home page.
 *
 * @return array
 */
function lb_get_products_data( $count_record = 1, $start_record = 0 ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		SELECT
			id,
			name,
			price,
			img_url
		FROM product
		ORDER BY id DESC
		LIMIT :start_record, :count_record;
	'
	);

	$result->bindParam( ':start_record', $start_record, PDO::PARAM_INT );
	$result->bindParam( ':count_record', $count_record, PDO::PARAM_INT );

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}


/**
 * This function return all products count from product table.
 *
 * @return array
 */
function lb_get_products_count() {
	global $lb_pdo;

	$result = $lb_pdo->prepare( 'SELECT COUNT(*) FROM product' );

	$result->execute();

	return $result->fetch( PDO::FETCH_NUM );
}

/**
 * This function return all products data by id from product table.
 *
 * @param int $product_id product id in product table.
 *
 * @return array
 */

function lb_get_product_data_by_id( $product_id ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		SELECT *
		FROM product
		WHERE id = :product_id;
	'
	);

	$result->bindParam( ':product_id', $product_id );

	$result->execute();

	return $result->fetch( PDO::FETCH_ASSOC );
}

/**
 * This function return some data for cart by id from product table.
 *
 * @param array $products_id products id in product table.
 *
 * @return array
 */
function lb_get_product_data_for_cart() {
	if ( empty( $_SESSION['cart'] ) ) {
		return;
	}

	$products_in_cart = $_SESSION['cart'];
	$products_id      = '';

	foreach ( $products_in_cart as $product ) {
		$products_id .= ' id = ' . $product['product_id'] . ' OR';
	}

	$id_list = substr( $products_id, 0, -2 );

	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		SELECT
			id,
			name,
			price,
			img_url
		FROM product
		WHERE' . $id_list
	);

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * This function return price by id from product table.
 *
 * @param array $product_id products id in product table.
 *
 * @return array
 */
function lb_get_product_price_by_id( $product_id ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		SELECT price
		FROM product
		WHERE id = :product_id
	'
	);

	$result->bindParam( ':product_id', $product_id );

	$result->execute();

	return $result->fetch( PDO::FETCH_NUM );
}

function lb_get_product_category_by_id( $product_id ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		SELECT category.name FROM `product_category`
			LEFT JOIN product ON product.id = product_category.product_id
			LEFT JOIN category ON category.id = product_category.category_id
		WHERE product.id = :product_id
	'
	);

	$result->bindParam( ':product_id', $product_id );

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

function lb_add_order_to_orders_table( $order_values ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		INSERT INTO `orders` ( first_name, last_name, telephone, address, email, city, region_id, zip, user_order ) VALUES ( :user_first_name, :user_last_nam, :telephone, :inputAddress, :email, :inputCity, :inputRegion, :inputZip, :user_order );
	'
	);

	$user_first_name = $order_values['user_first_name'];
	$user_last_name  = $order_values['user_last_name'];
	$telephone       = $order_values['telephone'];
	$inputAddress    = $order_values['inputAddress'];
	$email           = $order_values['email'];
	$inputCity       = $order_values['inputCity'];
	$inputRegion     = $order_values['inputRegion'];
	$inputZip        = $order_values['inputZip'];
	$user_order      = $order_values['user_order'];

	$result->bindParam( ':user_first_name', $user_first_name );
	$result->bindParam( ':user_last_name', $user_last_name );
	$result->bindParam( ':telephone', $telephone );
	$result->bindParam( ':inputAddress', $inputAddress );
	$result->bindParam( ':email', $email );
	$result->bindParam( ':inputCity', $inputCity );
	$result->bindParam( ':inputRegion', $inputRegion, PDO::PARAM_INT );
	$result->bindParam( ':inputZip', $inputZip, PDO::PARAM_INT );
	$result->bindParam( ':user_order', $user_order );

	$result->execute();
}
