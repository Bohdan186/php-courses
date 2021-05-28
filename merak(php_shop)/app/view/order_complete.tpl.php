<?php
/**
 * Order complete html file.
 *
 * @package templates
 */

ar( $data['order_complete'] );
?>

<section class="navigation-page single-product">
	<div class="container">
		<div class="navigation-page-inner single-product-inner">
			<div class="navigation-wrapper">
				<a href="?action=home" class="link-hover">Home</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="?action=shop" class="link-hover">Shop</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="<?php echo $_SERVER['QUERY_STRING']; ?>" class="link-hover">Order complete</a>
			</div>
		</div>
	</div>
</section>
<section class="product-main-page">
	<div class="container">
		<?php if( ! empty( $data['order_complete'] ) ): ?>
			<form action="" method="post">
				<div class="row product-center">
					<div class="col">
						<div class="product-page-text product-sticky">
							<table class="card-product-wrapper">
								<thead>
								<tr>
									<th class="product-photo"></th>
									<th class="product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal">Subtotal</th>
									<th class="product-remove"></th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ( $data['order_complete'] as $product ): ?>
									<tr>
										<th class="product-photo">
											<div class="swiper-container gallery-top btn-wrapper" >
												<div class="swiper-wrapper photo-swipe">
													<div class="swiper-slide">
														<a href="<?php echo esc_html( $product['img_url'] ); ?>" data-width="890" data-height="1080">
															<img src="<?php echo esc_html( $product['img_url'] ); ?>" alt="<?php echo esc_html( $product['name'] ); ?>">
														</a>
													</div>
												</div>
											</div>
										</th>
										<th class="product-name">
											<h3 class="title">
												<h3>
													<?php echo esc_html( $product['name'] ); ?>
												</h3>
											</h3>
										</th>
										<th class="product-price">
											<?php echo esc_html( $product['price'] ); ?>
										</th>
										<th class="product-quantity">
											<?php echo lb_get_count_product_in_cart( $product['id'] ); ?>">
										</th>
										<th class="product-subtotal">
											<?php echo lb_get_price_product_in_cart( false, $product['id'] )?>
										</th>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="total_price">
					<h5>Total:</h5>
					<?php echo lb_get_price_product_in_cart()?>
				</div>
				<div class="cart-button-wrapper">
					<button type="submit" name="update_cart" class="button button-cart">Update Cart</button>
					<a href="?action=check_out" class="button button-cart">Check Out</a>
				</div>
			</form>
		<?php endif; ?>
	</div>
</section>
