<?php 

$pdo = new PDO('mysql:host=192.168.1.85;dbname=mvc_1', 'bohdan', 'bohdan');

function get_all_data_from_cafe() {
	global $pdo;

	$result = $pdo->prepare('SELECT * FROM `cafe`');

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

function get_count_records_from_cafe() {
	global $pdo;

	$result = $pdo->prepare('SELECT COUNT(*) FROM `cafe`');

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

function get_this_cafe_from_cafe( $id ) {
	global $pdo;

	$result = $pdo->prepare('SELECT * FROM `cafe` WHERE id = :id');

	$result->bindParam( ':id', $id );
	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

function edit_this_cafe_from_cafe( $id, $name, $img, $type, $address, $rating, $number_reviews, $time_work, $number ) {
	global $pdo;

	$result = $pdo->prepare('UPDATE `cafe` SET `name`=:name,`img`=:img,`type`=:type,`address`=:address,`rating`=:rating, `number_reviews`=:number_reviews,`time_work`=:time_work,`number`=:number WHERE `id` = :id');

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

function get_user_data_from_users( $login ) {
	global $pdo;

	$result = $pdo->prepare('SELECT * FROM `users` WHERE `name` = :login');

	$result->bindParam( ':login', $login );
	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}