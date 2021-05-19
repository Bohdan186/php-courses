<?php

$lb_pdo = new PDO( 'mysql:host=192.168.1.85;dbname=mvc_1', 'bohdan', 'bohdan' );

/**
 * Get all the data from the cafe table
 *
 * @return array
 */
function lb_get_all_data_from_cafe( $start_record ) {
	global $lb_pdo;
	$count_record = 5;
	
	$result = $lb_pdo->prepare( 'SELECT * FROM `cafe` LIMIT :start_record, :count_record' );
	
	$result->bindParam( ':start_record', $start_record, PDO::PARAM_INT );
	$result->bindParam( ':count_record', $count_record, PDO::PARAM_INT );
	
	$result->execute();
	
	return $result->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * Get the data of this institution from the table of the cafe
 *
 * @param int $id - identifier of this institution.
 * @return array
 */
function lb_get_this_cafe_from_cafe( $id ) {
	global $lb_pdo;
	
	$result = $lb_pdo->prepare( 'SELECT * FROM `cafe` WHERE id = :id' );
	
	$result->bindParam( ':id', $id );
	$result->execute();
	
	return $result->fetch( PDO::FETCH_ASSOC );
}

/**
 * The function updates the data on the record in the cafe table
 *
 * @param $data - parameters array.
 */
function lb_change_cafe_from_cafe( $data, $action ) {
	global $lb_pdo;
	
	if ( 'edit' === $action ) {
		$result = $lb_pdo->prepare( 'UPDATE `cafe` SET `name`=:name,`img`=:img,`type`=:type,`address`=:address,`rating`=:rating, `number_reviews`=:number_reviews,`time_work`=:time_work,`number`=:number WHERE `id` = :id' );
		$result->bindParam( ':id', $data['id'] );
	} else if ( 'add' === $action ) {
		$result = $lb_pdo->prepare( 'INSERT INTO `cafe` ( `name`, `img`, `type`, `address`, `rating`, `number_reviews`, `time_work`, `number` ) VALUES ( :name, :img, :type, :address, :rating, :number_reviews, :time_work, :number )' );
	} else {
		return;
	}
	
	$result->bindParam( ':name', $data['name'] );
	$result->bindParam( ':img', $data['img'] );
	$result->bindParam( ':type', $data['type'] );
	$result->bindParam( ':address', $data['address'] );
	$result->bindParam( ':rating', $data['rating'] );
	$result->bindParam( ':number_reviews', $data['number_reviews'] );
	$result->bindParam( ':time_work', $data['time_work'] );
	$result->bindParam( ':number', $data['number'] );
	
	return $result->execute();
}

/**
 * @param $id
 */
function lb_remove_this_cafe_from_cafe( $id ) {
	global $lb_pdo;
	
	$result = $lb_pdo->prepare( 'DELETE FROM `cafe` WHERE id = :id ' );
	
	$result->bindParam( ':id', $id );
	
	return $result->execute();
}

/**
 * @return mixed
 */
function lb_get_count_from_cafe() {
	global $lb_pdo;
	
	$result = $lb_pdo->prepare( 'SELECT COUNT(*) FROM `cafe`' );
	
	$result->execute();
	
	return $result->fetch( PDO::FETCH_NUM );
}

/**
 * Get the data of this user from the users table
 *
 * @param mixed $login - login of this user.
 * @return array
 */
function lb_get_user_data_from_users( $login ) {
	global $lb_pdo;
	
	$result = $lb_pdo->prepare( 'SELECT * FROM `users` WHERE `name` = :login' );
	
	$result->bindParam( ':login', $login );
	$result->execute();
	
	return $result->fetch( PDO::FETCH_ASSOC );
}

function lb_add_page( $title, $content ) {
	global $lb_pdo;
	
	
	$result = $lb_pdo->prepare( 'INSERT INTO `pages` ( `name`, `html`) VALUE (:name, :html)' );
	
	$result->bindParam( ':name', $title );
	$result->bindParam( ':html', $content );
	
	return $result->execute();
}