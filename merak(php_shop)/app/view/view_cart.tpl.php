<?php
/**
 * View cart html file.
 *
 * @package templates
 */
?>

<section class="navigation-page single-product">
	<div class="container">
		<div class="navigation-page-inner single-product-inner">
			<div class="navigation-wrapper">
				<a href="?action=home" class="link-hover">Home</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="?action=shop" class="link-hover">Shop</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="?action=view_cart" class="link-hover">Cart</a>
			</div>
		</div>
	</div>
</section>
<section class="product-main-page">
	<div class="container">
		<?php foreach ( $products_in_cart as $product ): ?>
			<div class="row product-center">
				<div class="col-md-12 col-lg-2">
					<div class="swiper-container gallery-top btn-wrapper" >
						<div class="swiper-wrapper photo-swipe">
							<div class="swiper-slide"><a href="<?php echo lb_esc_html( $product['img_url'] ); ?>" data-width="890" data-height="1080"><img src="<?php echo lb_esc_html( $product['img_url'] ); ?>" alt="<?php echo lb_esc_html( $product['name'] ); ?>"></a></div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-10">
					<div class="product-page-text product-sticky">
						<h3>
							<?php echo lb_esc_html( $product['name'] ); ?>
						</h3>
						<div class="price">
							<?php echo lb_esc_html( $product['price'] ); ?>
						</div>
						<form class="add-to-card">
							<input type="number">
						</form>
<!--						<div class="price2">-->
<!--							--><?php //echo lb_get_price_product_in_cart( false, $product['id'] )?>
<!--						</div>-->
						<a href="?action=view_cart&delete_from_cart=<?php echo lb_esc_html( $product['id']  )?>" class="button">Delete</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<div class="total_price">
			<h5>Total:</h5>
			<?php echo lb_get_price_product_in_cart()?>
		</div>
		
		<div class="update-cart">
			<a href="?action=update_cart" class="button">Update Cart</a>
		</div>
		<div class="check-out">
			<a href="?action=check_out" class="button">Check Out</a>
		</div>
	</div>
</section>
