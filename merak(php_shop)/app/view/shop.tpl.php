<?php
/**
 * Shop html file.
 *
 * @package templates
 */
?>

<section class="navigation-page">
	<div class="container">
		<div class="navigation-page-inner navigation-page-border">
			<div class="navigation-wrapper">
				<h2>Shop</h2>
				<a href="?action=home" class="link-hover">Home</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="?action=shop" class="link-hover">Shop</a>
			</div>
		</div>
	</div>
</section>
<section class="shop-page-product">
	<div class="container">
		<div class="row shop-product-grid">
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
									<a href="?action=shop&add_to_cart=<?php echo lb_esc_html( $product['id'] ) ?>" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Add to cart"><span class="btn-text-span">Add to cart</span><span class="btn-plus">+</span> </a>
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
		<div class="page-numbers">
			<?php $page_number = 1;
				for ( $i = 0; $i < $data['product_count'][0]; $i += 12 ): ?>
					<a href="?action=shop&start-record=<?php echo $i ?>" class="btn btn-primary btn-sm <?php echo lb_esc_html( $i === (int)$_GET['start-record'] ) ? 'active' : ''; ?>">
						<?php echo $page_number ?>
					</a>
				<?php $page_number++;
			endfor; ?>
		</div>
	</div>
</section>