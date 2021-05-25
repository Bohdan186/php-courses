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
function lb_get_products_data( $count_record, $start_record = 0 ) {
	global $lb_pdo;
	
	$result = $lb_pdo->prepare("
		SELECT
			product.id,
			product.name,
			product.price,
			( SELECT JSON_ARRAYAGG( images.img_url )
			  FROM images WHERE images.product_id = product.id ) AS 'images',
			( SELECT JSON_ARRAYAGG( colors.hex )
			  FROM colors WHERE colors.product_id = product.id ) AS 'colors',
			( SELECT JSON_ARRAYAGG( tags.tag )
			  FROM product_tags
					   LEFT JOIN tags ON tags.id = product_tags.tag_id
			  WHERE product.id = product_tags.product_id )       AS 'tags',
			( SELECT JSON_ARRAYAGG( category.category )
			  FROM product_category
					   LEFT JOIN category ON category.id = product_category.category_id
			  WHERE product.id = product_category.product_id ) AS 'category'
		FROM product
		ORDER BY id DESC
		LIMIT :start_record, :count_record;
	");
	
	$result->bindParam( ':start_record', $start_record, PDO::PARAM_INT );
	$result->bindParam( ':count_record', $count_record, PDO::PARAM_INT );
	
	$result->execute();
	
	return lb_decode_json( $result->fetchAll( PDO::FETCH_ASSOC ) );
}

function lb_get_products_count() {
	global $lb_pdo;
	
	$result = $lb_pdo->prepare( 'SELECT COUNT(*) FROM product' );
	
	$result->execute();
	
	return $result->fetch( PDO::FETCH_NUM );
}

function lb_get_category_count() {
	global $lb_pdo;
	
	$result = $lb_pdo->prepare( "
		SELECT
			category.category AS 'category_name',
			COUNT(category.category) AS 'category_count'
		FROM product_category
		LEFT JOIN category ON category.id = product_category.category_id
		GROUP BY category
	" );
	
	$result->execute();
	
	return $result->fetchAll( PDO::FETCH_ASSOC );
}


function lb_get_tags() {
	global $lb_pdo;

	$result = $lb_pdo->prepare( "
	SELECT
		tags.tag AS 'tag_name',
		COUNT(tags.tag) AS 'tag_count'
	FROM product_tags
	LEFT JOIN tags ON tags.id = product_tags.tag_id
	GROUP BY tag;
	" );
	
	$result->execute();
	
	return $result->fetchAll( PDO::FETCH_ASSOC );
}