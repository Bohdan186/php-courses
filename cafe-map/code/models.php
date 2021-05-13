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