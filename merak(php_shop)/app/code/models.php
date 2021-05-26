<?php
/**
 * The file describes the functions for working with the database.
 *
 * @package models
 */

$lb_pdo = new PDO( 'mysql:host=192.168.1.85;dbname=merak_db', 'bohdan', 'bohdan' );

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
function lb_get_product_data_for_cart( $products_id ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare(
		'
		SELECT
			id,
			name,
			price,
			img_url
		FROM product
		WHERE' . $products_id
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
