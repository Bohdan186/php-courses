<?php 

$lb_pdo = new PDO('mysql:host=192.168.1.85;dbname=mvc_1', 'bohdan', 'bohdan');

/**
 * Get all the data from the cafe table
 *
 * @return array
 */
function lb_get_all_data_from_cafe( $start_record ) {
    global $lb_pdo;
    $count_record = 5;

    $result = $lb_pdo->prepare('SELECT * FROM `cafe` LIMIT :start_record, :count_record');

    $result->bindParam( ':start_record', $start_record, PDO::PARAM_INT );
    $result->bindParam( ':count_record', $count_record, PDO::PARAM_INT );

    $result->execute();

    return $result->fetchAll( PDO::FETCH_ASSOC );
}

/**
 * @return mixed
 */
function lb_get_count_from_cafe() {
    global $lb_pdo;

    $result = $lb_pdo->prepare('SELECT COUNT(*) FROM `cafe`');

    $result->execute();

    return $result->fetch( PDO::FETCH_NUM );
}