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
	$values = '';
	
	for( $i = 0; $i < count( $order_values['user_order'] ); $i++ ){
		$values .= "( LAST_INSERT_ID(), :product_id_$i, :count_$i ), ";
	};
	
	global $lb_pdo;

	$insert_to_data_orders = $lb_pdo->prepare(
		'
		INSERT INTO data_orders ( first_name, last_name, telephone, address, email, city, region_id, zip )
			VALUES ( :user_first_name,  :user_last_name,  :telephone,  :inputAddress,  :email,  :inputCity,  :inputRegion,  :inputZip );
	'
	);
	
	$insert_to_orders = $lb_pdo->prepare(
		'
		INSERT INTO
			orders ( order_id, product_id, count )
		VALUES' . substr( $values, 0, -2 )
	);
	
	$insert_to_data_orders->bindParam( ':user_first_name', $order_values['user_first_name'] );
	$insert_to_data_orders->bindParam( ':user_last_name', $order_values['user_last_name'] );
	$insert_to_data_orders->bindParam( ':telephone', $order_values['telephone']);
	$insert_to_data_orders->bindParam( ':inputAddress', $order_values['inputAddress'] );
	$insert_to_data_orders->bindParam( ':email', $order_values['email'] );
	$insert_to_data_orders->bindParam( ':inputCity', $order_values['inputCity'] );
	$insert_to_data_orders->bindParam( ':inputRegion', $order_values['inputRegion'], PDO::PARAM_INT );
	$insert_to_data_orders->bindParam( ':inputZip', $order_values['inputZip'], PDO::PARAM_INT );
	
	$i = 0;
	foreach ( $order_values['user_order'] as $order ){
		$insert_to_orders->bindParam( ":product_id_$i", $order['product_id'] );
		$insert_to_orders->bindParam( ":count_$i",  $order['product_count'] );
		
		$i++;
	}
	
	$insert_to_data_orders->execute();
	$insert_to_orders->execute();
	
	return $lb_pdo->lastInsertId();
}

function lb_get_order_from_orders_table_by_id( $id ) {
	global $lb_pdo;
	
	$result = $lb_pdo->prepare( '
	SELECT product.id, product.name, product.price, product.img_url FROM orders
	LEFT JOIN product ON product.id = orders.product_id
	GROUP BY product.id
' );
	$result->bindParam( ':id', $id );
	
	$result->execute();
	
	return $result->fetchAll( PDO::FETCH_ASSOC );
}