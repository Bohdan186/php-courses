<?php 

$pdo = new PDO('mysql:host=192.168.1.85;dbname=mvc_1', 'bohdan', 'bohdan');

function get_all_data_from_cafe() {
	global $pdo;

	$result = $pdo->prepare('SELECT * FROM `cafe`');

	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}

function get_user_data_from_users( $login ) {
	global $pdo;

	$result = $pdo->prepare('SELECT * FROM `users` WHERE `login` = `:login`');

	$result->bindParam( ':login', $login );
	$result->execute();

	return $result->fetchAll( PDO::FETCH_ASSOC );
}