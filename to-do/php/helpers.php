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