<?php
/**
 * A file that combines a response from a database and a page template.
 * The controller is an intermediary between models and Views.
 *
 * @package controller
 */

/**
 * Show page 404.
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
 */
function lb_show_home_page_action() {
	lb_show_templates(
		array(
			'name'     => 'home',
			'products' => lb_get_products_data( 8 ),
		)
	);
}

/**
 * Show shop page.
 */
function lb_show_shop_page_action() {

	$start_record = lb_get_start_record();

	lb_show_templates(
		array(
			'name'          => 'shop',
			'products'      => lb_get_products_data( 12, $start_record ),
			'product_count' => lb_get_products_count(),
		)
	);
}

/**
 * Show single product page.
 */
function lb_show_single_product_page_action() {
	$product_id = lb_esc_html( $_GET['id'] );
	lb_show_templates(
		array(
			'name'         => 'single_product',
			'products'     => lb_get_products_data( 5 ),
			'this_product' => lb_get_product_data_by_id( $product_id ),
		)
	);
}

/**
 * Show view cart page.
 */
function lb_show_view_cart_page_action() {
	lb_show_templates(
		array(
			'name' => 'view_cart',
		)
	);
}
