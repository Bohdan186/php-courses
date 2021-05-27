<?php
/**
 * Single product html file.
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
				<a href="?action=shop&start-record=0" class="link-hover">Shop</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="?action=single_product&id=<?php echo esc_html( $_GET['id'] ); ?>" class="link-hover">Dress with a floral print</a>
			</div>
		</div>
	</div>
</section>
<section class="product-main-page">
	<div class="container">
		<div class="row product-main-page-inner">
			<div class="col-md-12 col-lg-8">
				<div class="swiper-container gallery-top btn-wrapper" >
					<div class="swiper-wrapper photo-swipe">
						<div class="swiper-slide"><a href="<?php echo esc_html( $data['this_product']['img_url'] ); ?>" data-width="890" data-height="1080"><img src="<?php echo esc_html( $data['this_product']['img_url'] ); ?>" alt="<?php echo esc_html( $data['this_product']['name'] ); ?>"></a></div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="product-page-text product-sticky">
					<h3>
						<?php echo esc_html( $data['this_product']['name'] ); ?>
					</h3>
					<div class="price">
						<?php echo esc_html( $data['this_product']['price'] ); ?>
					</div>
					<p>
						<?php echo esc_html( $data['this_product']['short_description'] ); ?>
					</p>
					<form class="add-to-card" method="post" action="">
						<input type="number" name="add_product_count" value="1">
						<button name="add_to_cart" value="<?php echo esc_html( $data['this_product']['id'] ); ?>" class="button button-cart">Add to cart</button>
					</form>
					<div class="row sku-category">
						<div class="col-3"><span>SKU:</span></div>
						<div class="col-9">
							<span class="info">
								<?php echo esc_html( $data['this_product']['SKU'] ); ?>
							</span>
						</div>
						<?php if ( ! empty( $data['category'] ) ): ?>
							<div class="col-3"><span>Category:</span></div>
							<div class="col-9">
								<?php foreach ( $data['category'] as $one_category ): ?>
									<span class="info">
										<?php echo $one_category['name'] ?>
									</span>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="description">
						<h4>Description</h4>
						<p>
							<?php echo esc_html( $data['this_product']['description'] ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	
	</div>
</section>
<section class="promotions">
	<div class="container">
		<div class="block-title-center">
			<h6 class="sub-title">Clothes that you like</h6>
			<h2 class="title">Promotions and discounts</h2>
			<p>The clothes that you like. New collections of clothes for every taste for you and your family.</p>
		</div>
		<div class="row promotions-inner customers-arrow-wrapper">
			<?php foreach ( $data['products'] as $product ) : ?>
				<div class="col-custom-20">
					<div class="product-box">
						<div class="product-foto">
							<img src="<?php echo esc_html( $product['img_url'] ); ?>" alt="<?php echo esc_html( $product['name'] ); ?>">
							<div class="product-foto-hover">
								<a href="?action=single_product&id=<?php echo esc_html( $product['id'] ); ?>" class="link-full"></a>
								<div class="button-product-wrapper">
									<a href="?action=add_to_cart&id=<?php echo esc_html( $product['id'] ); ?>" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Add to cart"><span class="btn-text-span">Add to cart</span><span class="btn-plus">+</span> </a>
								</div>
							</div>
						</div>
						<div class="product-text">
							<div class="product-text-inner">
								<h6><a href="?action=single_product&id=<?php echo esc_html( $product['id'] ); ?>" class="link-hover"><?php echo esc_html( $product['name'] ); ?></a></h6>
							</div>
							<div class="price">
								<?php echo esc_html( $product['price'] ); ?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

			<div class="customers-arrow arrow-left"><i class="fas fa-chevron-left"></i></div>
			<div class="customers-arrow arrow-right"><i class="fas fa-chevron-right"></i></div>
		</div>
	</div>
</section>
