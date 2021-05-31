<?php
/**
 * Header html file.
 *
 * @package templates
 */

lb_add_product_data_to_session();
lb_delete_product_data_from_session();
lb_add_product_count_in_session();
lb_add_product_count_in_session_on_view_cart();
$products_in_cart = lb_get_product_data_for_cart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> <!--fontawesome 5-->
	<script src="https://use.fontawesome.com/24f5e681bf.js"></script>  <!--fontawesome 4.7-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Archivo&family=Hind:wght@400;500;600&family=Spartan:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Merak</title>
</head>
<body>
<header class="header-main">
	<div class="top-bar">
		<div class="container">
			<div class="header-row color-schema-white">
				<div class="header-col-left">
					<a href="?action=admin" class="admin" data-effect="mfp-move-horizontal-right"><i class="far fa-user"></i>Admin Panel</a>
				</div>
				<div class="header-col-right"></div>
			</div>
		</div>
	</div>
	<div class="header-general">
		<div class="container">
			<div class="header-row">
				<div class="header-col-left">
					<a href="?action=home" class="logo-main"><img src="assets/img/merak-logo.svg" alt="merak"></a>
				</div>
				<div class="header-col-center"></div>
				<div class="header-col-right">
					<div class="header-link">
						<a href="?action=view_cart" class="btn-popup" data-effect="mfp-move-horizontal-right"><i class="icons-main-header fal fa-shopping-bag"></i> <?php echo lb_get_count_products_in_cart(); ?> <span>/ $<?php echo lb_get_price_product_in_cart(); ?></span></a>
						<div class="cart-dropdown">
							<?php if ( $products_in_cart ) : ?>
								<?php foreach ( $products_in_cart as $product_in_cart ): ?>
									<div class="cart-product">
										<div class="product_wrapper">
											<div class="product-img">
												<img src="<?php echo esc_html( $product_in_cart['img_url'] ); ?>" alt="<?php echo esc_html( $product_in_cart['name'] ); ?>">
											</div>
											<div class="product-body">
												<div class="product-name">
													<?php echo esc_html( $product_in_cart['name'] ); ?>
												</div>
												<div class="product-price">
													price for one:
													<strong>
														<?php echo esc_html( $product_in_cart['price'] ); ?> $
													</strong>
												</div>
												<div class="product-count">
													count:
													<strong>
														<?php echo lb_get_count_product_in_cart( $product_in_cart['id'] ); ?>
													</strong>
												</div>
											</div>
										</div>
										<a href="?action=<?php echo 'single_product' === $_GET['action'] ? $_GET['action'] . '&id=' . $_GET['id'] :  $_GET['action'];?>&delete_from_cart=<?php echo esc_html( $product_in_cart['id']  )?>" class="product-delete">
											<i class="fas fa-trash"></i>
										</a>
									</div>
								<?php endforeach; ?>
							<a class="button" href="?action=view_cart">View cart</a>
							<?php else: ?>
								<p>Not product</p>
							<?php endif; ?>
						</div>
					</div>
					<button class="button-burger"><i class="fas fa-bars"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="header-row">
				<div class="header-col-left">
				</div>
				<div class="header-col-center">
					<ul class="menu-main">
						<li>
							<a href="?action=home">
								<span class="menu-border <?php echo lb_check_active_page( 'home' ); ?>"> Home </span>
							</a>
						</li>
						<li>
							<a href="?action=shop">
								<span class="menu-border <?php echo lb_check_active_page( 'shop' ); ?>">Shop</span>
							</a>
						</li>
						<li><a href="?action=admin">
								<span class="menu-border ">Admin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>