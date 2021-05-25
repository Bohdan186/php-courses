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
			<div class="navigation-info">Showing 1–12 of 41 results</div>
		</div>
	</div>
</section>
<section class="shop-page-product">
	<div class="container">
		<div class="product-main-inner">
			<div class="shop-page-col-left">
				<a href="#" class="filter-link link-hover"><i class="fas fa-bars"></i> Filter by</a>
				<ul class="product-menu" id="filters">
					<li class="active" data-filter="*"><a href="#">All</a></li>
					
					<?php
					foreach ( $data['category_count'] as $category ): ?>
						<li data-filter=".<?php echo strtolower( lb_esc_html( $category['category_name'] ) ); ?>"><a href="#"><?php echo lb_esc_html( $category['category_name'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="row shop-product-grid">
			<?php
				foreach ( $data['products'] as $product ) :
				if ( ! empty( $product['category'] ) ) :
				foreach ( $product['category'] as $category ) :?>
					<div class="col-sm-12 col-md-6 col-lg-3 filter-grid <?php echo strtolower( lb_esc_html( $category ) ) ?>">
						<div class="product-box">
							<div class="product-foto">
								<img src="<?php echo lb_esc_html( $product['images'][0] )?>" alt="<?php echo lb_esc_html( $product['name'] )?>">
								<div class="product-foto-hover">
									<img src="<?php echo lb_esc_html( $product['images'][1] )?>" alt="<?php echo lb_esc_html( $product['name'] )?>">
									<a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ) ?>" class="link-full"></a>
									<div class="button-product-wrapper">
										<a href="?action=add_to_cart&id=<?php echo lb_esc_html( $product['id'] ) ?>" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Add to cart"><span class="btn-text-span">Add to cart</span><span class="btn-plus">+</span></a>
										<a href=".quick-view" class="button button-product btn-popup" data-effect="mfp-move-horizontal" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></a>
										<a href="#" class="button button-product" data-toggle="tooltip" data-placement="top" title="Like"><i class="far fa-heart"></i></a>
									</div>
								</div>
							</div>
							<div class="product-text">
								<div class="product-text-inner">
									<h6><a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ) ?>" class="link-hover"><?php echo lb_esc_html( $product['name'] )?></a></h6>
									<div class="check-product">
										<?php if ( ! empty( $product['colors']['0'] ) ) :
											foreach ( $product['colors'] as $color ) :
												?>
												<div class="swatch" style="background-color: <?php echo lb_esc_html( $color ); ?>;"></div>
											<?php endforeach;
										endif; ?>
									</div>
								</div>
								<div class="price">$<?php echo lb_esc_html( $product['price'] )?></div>
							</div>
						</div>
					</div>
				<?php endforeach;
				endif;
				endforeach; ?>
		</div>
		<div class="page-numbers">
			<?php
			$page_number = 1;
			
			for ( $i = 0; $i < $data['product_count'][0]; $i += 12 ): ?>
				
				<a href="?action=shop&start-record=<?php echo $i ?>" class="btn btn-primary btn-sm <?php echo lb_esc_html( $i === (int)$_GET['start-record'] ) ? 'active' : ''; ?>">
					<?php echo $page_number ?>
				</a>
				
				<?php
				$page_number++;
			endfor; ?>
		
		</div>
		
	</div>
</section>
<section class="subscribe">
	<div class="container">
		<div class="subscribe-inner">
			<div class="subscribe-text">
				<img src="../img/merak-icon-open-mail.svg" alt="">
				<div class="title-wrapper">
					<h2>Subscribe to us newslatter</h2>
					<h6>And get a 10% discount on your next purchase</h6>
				</div>
			</div>
			<form class="subscribe-form">
				<input type="text" placeholder="Your Email Address">
				<button class="button color-schema-white">Subscribe</button>
			</form>
		</div>
	</div>
</section>