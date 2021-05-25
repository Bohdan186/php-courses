<?php
/**
 * A file that combines a response from a database and a page template.
 * The controller is an intermediary between models and Views.
 *
 * @package controller
 */


/**
 * Show page 404.
 *
 */
function lb_show_404_page_action() {
	lb_show_templates(
		array(
			'name' => 'page_404',
		)
	);
}

/**
 * Show home page.
 *
 */
function lb_show_home_page_action() {
	lb_show_templates(
		array(
			'name' => 'home',
			'products' => lb_get_products_data( 8 ),
			'tags' => lb_get_tags(),
		)
	);
}

/**
 * Show shop page.
 *
 */
function lb_show_shop_page_action() {
	$start_record = lb_get_start_record();
	
	lb_show_templates(
		array(
			'name' => 'shop',
			'products' => lb_get_products_data( 12, $start_record ),
			'product_count' => lb_get_products_count(),
			'category_count' => lb_get_category_count(),
		)
	);
}

function lb_show_single_product_page_action() {
	lb_show_templates(
		array(
			'name' => 'single_product',
		)
	);
}