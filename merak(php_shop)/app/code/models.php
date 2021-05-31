<?php
/**
 * The file describes the functions for working with the database.
 *
 * @package models
 */

$lb_pdo = new PDO( 'mysql:host=192.168.1.78;dbname=merak_db', 'bohdan', 'bohdan' );

/**
 * This function return products data for home page.
 *
 * @param int $count_record How many products to take.
 * @param int $start_record From which product to start taking. The default is 0.
 *
 * @return array
 */
function lb_get_products_data( $count_record = 1, $start_record = 0 ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		SELECT id, name, price, img_url
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
 * @param int $product_id Product id in product table.
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
 * @return array
 */
function lb_get_product_data_for_cart() {
	if ( empty( $_SESSION['cart'] ) ) {
		return array();
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
		SELECT id, name, price, img_url
		FROM product
		WHERE' . $id_list
	);

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * This function return price by id from product table.
 *
 * @param array $product_id Products id in product table.
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

/**
 * This function return product category where product.id = $product_id .
 *
 * @param int $product_id Id product of which category you need to find.
 *
 * @return array
 */
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

/**
 * This function accepts data from the order form, and (after verification) adds them to the database.
 * Return last order (string)id.
 *
 * @param array $order_values Data from the order form.
 *
 * @return string
 */
function lb_add_order_to_orders_table( $order_values ) {
	$values = '';

	for ( $i = 0; $i < count( $order_values['user_order'] ); $i++ ) {
		$values .= "( LAST_INSERT_ID(), :product_id_$i, :count_$i ), ";
	};

	global $lb_pdo;

	$insert_to_data_orders = $lb_pdo->prepare(
		'
		INSERT INTO data_orders ( first_name, last_name, telephone, address, email, city, region_id, zip )
			VALUES ( :user_first_name,  :user_last_name,  :telephone,  :input_address,  :email,  :input_city,  :input_region,  :input_zip );
	'
	);

	$insert_to_orders = $lb_pdo->prepare(
		'
		INSERT INTO orders ( order_id, product_id, count )
		VALUES' . substr( $values, 0, -2 )
	);

	$insert_to_data_orders->bindParam( ':user_first_name', $order_values['user_first_name'] );
	$insert_to_data_orders->bindParam( ':user_last_name', $order_values['user_last_name'] );
	$insert_to_data_orders->bindParam( ':telephone', $order_values['telephone'] );
	$insert_to_data_orders->bindParam( ':input_address', $order_values['input_address'] );
	$insert_to_data_orders->bindParam( ':email', $order_values['email'] );
	$insert_to_data_orders->bindParam( ':input_city', $order_values['input_city'] );
	$insert_to_data_orders->bindParam( ':input_region', $order_values['input_region'], PDO::PARAM_INT );
	$insert_to_data_orders->bindParam( ':input_zip', $order_values['input_zip'], PDO::PARAM_INT );

	$i = 0;
	foreach ( $order_values['user_order'] as $order ) {
		$insert_to_orders->bindParam( ":product_id_$i", $order['product_id'] );
		$insert_to_orders->bindParam( ":count_$i", $order['product_count'] );

		$i++;
	}

	$insert_to_data_orders->execute();

	$order_id = $lb_pdo->lastInsertId();

	$insert_to_orders->execute();

	return $order_id;
}

/**
 * Takes data from the database about the last added order, by id
 *
 * @param int $id Id of the last added order.
 *
 * @return array
 */
function lb_get_order_from_orders_table_by_id( $id ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		SELECT product.id, product.name, product.price, product.img_url, count FROM orders
		LEFT JOIN product ON product.id = orders.product_id
		WHERE orders.order_id = :id;
'
	);
	$result->bindParam( ':id', $id );

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * Returns all data from the region table.
 *
 * @return array
 */
function lb_get_region() {
	global $lb_pdo;

	$result = $lb_pdo->prepare( 'SELECT * FROM region' );

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}
