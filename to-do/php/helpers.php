<?php
/**
 * Ar
 *
 * The function is intended for output of arrays.
 *
 * @param  mixed $data - Accepts the mass to be output.
 * @param  bool  $production - Takes a Boolean value. If the "True" parameter then the output of the array will be hidden,
 *                             to view it you will need to add "?x" to the url. Default parameter = "FALSE".
 */
function ar( $data, $production = false ) {
	if ( $production ) {
		if ( isset( $_GET['x'] ) ) {
			echo '<pre>';
			print_r( $data );
			echo '<pre>';
		}
	} else {
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
	}
}

/**
 * Esc_html
 *
 * Shields all threatening characters.
 *
 * @param  string $str - The tape to be shielded.
 *
 * @return statement
 */
function esc_html( $str ) {
	return htmlspecialchars( trim( $str ) );
}

/**
 * Connect_db
 * Returns an instance of the PDO class.
 *
 * @return void
 */
function connect_db() {
	return new PDO( 'mysql:host=localhost;dbname=to-do', 'root', 'root' );
}

/**
 * Lb_get_data
 *
 * The function outputs data from the database using the "ar" function.
 *
 * @param  string $sql - query to the database.
 * @param  array  $values -  optional parameter array of variable values (default empty array).
 * @param  string $type_values - optional parameter type of variables passed by the third parameter (default empty string).
 */
function lb_db_query( $sql, $do = 'change', $values = array(), $type_values = array() ) {
	$pdo = connect_db();

	$result = $pdo->prepare( $sql );

	if ( isset( $values ) ) {
		$j = 1;

		foreach ( $values as $item ) {
			$result->bindValue( $j, $item, 1 === count( $type_values ) ? $type_values[0] : $type_values[ $j - 1 ] );

			$j++;
		}
	}

	$result->execute();

	if ( 'get' === $do ) {
		return $result->fetchAll( PDO::FETCH_ASSOC );
	}
}