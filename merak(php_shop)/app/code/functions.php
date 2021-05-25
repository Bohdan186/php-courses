<?php
/**
 * The file describes the main functions of the project.
 *
 * @package functions
 */

/**
 * The function prepares the page for display.
 * Connects templates and transfers data from the array to them $data
 *
 * @param array $data - an array with data for transfer to the created template
 */
function lb_show_templates( $data ) {
	 include 'app/view/header.tpl.php';
	include 'app/view/' . $data['name'] . '.tpl.php';
	 include 'app/view/footer.tpl.php';
}

function lb_isJSON($string){
	return is_string($string) && is_array(json_decode($string, true));
}

function lb_decode_json( $sql_response ) {
	$result = array();
	
	foreach ( $sql_response as $itemKey => $itemValue ){
		foreach ( $itemValue as $key => $value ) {
			if( lb_isJSON( $value )  ) {
				$result[$itemKey][$key] = json_decode( $value );
			}else{
				$result[$itemKey][$key] = $value;
			}
		}
	}
	
	return $result;
}

function lb_get_start_record() {
	if ( empty ( $_GET['start-record'] ) ) {
		return 0;
	}
	
	return lb_esc_html( $_GET['start-record'] );
}