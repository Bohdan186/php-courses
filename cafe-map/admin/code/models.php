<?php 

$lb_pdo = new PDO('mysql:host=192.168.1.85;dbname=mvc_1', 'bohdan', 'bohdan');

/**
 * Get all the data from the cafe table
 *
 * @return array
 */
function lb_get_all_data_from_cafe() {
	global $lb_pdo;

	$result = $lb_pdo->prepare('SELECT * FROM `cafe`');

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * Get the data of this institution from the table of the cafe
 *
 * @param  int $id - identifier of this institution.
 * @return array
 */
function lb_get_this_cafe_from_cafe( $id ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare('SELECT * FROM `cafe` WHERE id = :id');

	$result->bindParam( ':id', $id );
	$result->execute();

	return $result->fetch( PDO::FETCH_ASSOC );
}

/**
 * The function updates the data on the record in the cafe table
 *
 * @param  mixed $id - id.
 * @param  mixed $name - name.
 * @param  mixed $img - img.
 * @param  mixed $type - type.
 * @param  mixed $address - address.
 * @param  mixed $rating - rating.
 * @param  mixed $number_reviews - number_reviews.
 * @param  mixed $time_work - time_work.
 * @param  mixed $number - number.
 */
function lb_edit_this_cafe_from_cafe( $id, $name, $img, $type, $address, $rating, $number_reviews, $time_work, $number ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare('UPDATE `cafe` SET `name`=:name,`img`=:img,`type`=:type,`address`=:address,`rating`=:rating, `number_reviews`=:number_reviews,`time_work`=:time_work,`number`=:number WHERE `id` = :id');

	$result->bindParam( ':id', $id );
	$result->bindParam( ':name', $name );
	$result->bindParam( ':img', $img );
	$result->bindParam( ':type', $type );
	$result->bindParam( ':address', $address );
	$result->bindParam( ':rating', $rating );
	$result->bindParam( ':number_reviews', $number_reviews );
	$result->bindParam( ':time_work', $time_work );
	$result->bindParam( ':number', $number );
	
	$result->execute();
}

/**
 * Get the data of this user from the users table
 *
 * @param  mixed $login - login of this user.
 * @return array
 */
function lb_get_user_data_from_users( $login ) {
	global $lb_pdo;

	$result = $lb_pdo->prepare('SELECT * FROM `users` WHERE `name` = :login');

	$result->bindParam( ':login', $login );
	$result->execute();

	return $result->fetch( PDO::FETCH_ASSOC );
}