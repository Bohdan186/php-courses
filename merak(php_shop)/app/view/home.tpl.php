<?php
/**
 * Home html file.
 *
 * @package templates
 */
?>

<section class="product-main">
	<div class="container">
		<div class="product-main-inner with-animated">
			<div class="title-wrapper">
				<h6 class="sub-title">Clothes that you like</h6>
				<h2 class="title">Featured products</h2>
			</div>
			<ul class="product-menu">
				<li class="active" data-value="all"><a>All</a></li>
			</ul>
		</div>
		<div class="product-main-wrapper active with-animated" data-value="all">
			<div class="row">
				<?php
					foreach ( $data['products'] as $product ):
				?>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="product-box">
							<div class="product-foto">
								<img src="<?php echo lb_esc_html( $product['img_url'] ) ?>" alt="<?php echo lb_esc_html( $product['name'] ) ?>">
								<div class="product-foto-hover">
									<a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ) ?>" class="link-full"></a>
									<div class="button-product-wrapper">
										<a href="?action=home&add_to_cart=<?php echo lb_esc_html( $product['id'] ) ?>" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Add to cart"><span class="btn-text-span">Add to cart</span><span class="btn-plus">+</span> </a>
									</div>
								</div>
							</div>
							<div class="product-text">
								<div class="product-text-inner">
									<h6><a href="?action=home&add_to_cart=<?php echo lb_esc_html( $product['id'] ) ?>" class="link-hover"><?php echo lb_esc_html( $product['name'] ) ?></a></h6>
								</div>
								<div class="price">
									<?php echo lb_esc_html( $product['price'] ) ?>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<section class="promotions">
	<div class="container">
		<div class="block-title-center with-animated">
			<h6 class="sub-title">Clothes that you like</h6>
			<h2 class="title">Promotions and discounts</h2>
			<p>The clothes that you like. New collections of clothes for every taste for you and your family.</p>
		</div>
		<div class="promotions-inner customers-arrow-wrapper with-animated">
			<div class="swiper-container" data-option='{"loop":false, "navigation":true, "pagination":false, "slidesPerView": 5, "spaceBetween": 30}'>
				<div class="swiper-wrapper">
					<?php foreach ( $data['products'] as $product ): ?>
						<div class="swiper-slide">
							<div class="product-box">
									<div class="product-foto">
										<img src="<?php echo lb_esc_html( $product['img_url'] ) ?>" alt="<?php echo lb_esc_html( $product['name'] ) ?>">
										<div class="product-foto-hover">
											<a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ) ?>" class="link-full"></a>
											<div class="button-product-wrapper">
												<a href="?action=home&add_to_cart=<?php echo lb_esc_html( $product['id'] ) ?>" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Add to cart"><span class="btn-text-span">Add to cart</span><span class="btn-plus">+</span> </a>
											</div>
										</div>
									</div>
									<div class="product-text">
										<div class="product-text-inner">
											<h6>
												<a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ) ?>" class="link-hover">
													<?php echo lb_esc_html( $product['name'] ) ?>
												</a>
											</h6>
										</div>
										<div class="price">
											<?php echo lb_esc_html( $product['price'] ) ?>
										</div>
									</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="customers-arrow arrow-left slider-left"><i class="fas fa-chevron-left"></i></div>
			<div class="customers-arrow arrow-right slider-right"><i class="fas fa-chevron-right"></i></div>
		</div>
	</div>
</section>