<?php

/**
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
 * Shields all threatening characters.
 *
 * @param  string $str - The tape to be shielded.
 *
 * @return string
 */
function esc_html( $str ) {
	return htmlspecialchars( trim( $str ) );
}

/**
 * The function prepares the page for display.
 * Connects templates and transfers data from the array to them $data
 * 
 * @param  array $data - an array with data for transfer to the created template
 */
function lb_show_templates( $data ) {
	include 'view/header.tpl.php';
	include 'view/' . $data['name'] . '.tpl.php';
	include 'view/footer.tpl.php';
}

/**
 * Checks on which page the user , and adds the active class
 *
 * @param  string $page_name - indicates why the action is equal to.
 * @return string
 */
function lb_get_current_route( $page_name = '' ) {
	if( $page_name === esc_html( $_GET['action'] ) ){
		echo 'active';
	}
}