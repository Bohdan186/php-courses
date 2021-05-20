<?php
/**
 * Controller receives the input data and converts it into commands for the model or view.
 *
 * @package controller.php
 */

/**
 * This function shows page 404.
 */
function lb_show_404_page_action() {
	lb_show_templates(
		array(
			'name' => 'page_404',
		)
	);
}

/**
 * This function shows home page.
 */
function lb_show_home_page_action() {
	lb_show_templates(
		array(
			'name' => 'home',
		)
	);
}

/**
 * This function shows cart page.
 */
function lb_show_cart_page_action() {
	lb_show_templates(
		array(
			'name' => 'cart',
		)
	);
}

/**
 * This function shows checkout page.
 */
function lb_show_checkout_page_action() {
	lb_show_templates(
		array(
			'name' => 'checkout',
		)
	);
}

/**
 * This function shows single product page.
 */
function lb_show_single_product_page_action() {
	lb_show_templates(
		array(
			'name' => 'single_product',
		)
	);
}

/**
 * This function shows shop page.
 */
function lb_show_shop_page_action() {
	lb_show_templates(
		array(
			'name' => 'shop',
		)
	);
}