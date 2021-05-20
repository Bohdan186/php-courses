<?php
/**
 * Function file for working with the site
 *
 * @package function.php
 */

/**
 * The function prepares the page for display.
 * Connects templates and transfers data from the array to them $data
 *
 * @param array $data an array with data for transfer to the created template.
 */
function lb_show_templates( $data ) {
	include 'view/header.tpl.php';
	include 'view/' . $data['name'] . '.tpl.php';
	include 'view/footer.tpl.php';
}
