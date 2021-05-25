<?php
/**
 * Home html file.
 *
 * @package templates
 */
?>

<section class="slider">
	<div class="container">
		<div class="row">
			<div class="offset-lg-4 col-lg-8 offset-xl-3 col-xl-9">
				<div class="slider-foto color-schema-white">
					<div class="swiper-container" data-option='{"loop":true, "navigation":true, "pagination":true, "slidesPerView": 1}'>
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="assets/img/merak-home-1-slider-1.jpg" alt="">
								<div class="slider-foto-inner">
									<h1>Beautiful Casual Summer Dress</h1>
									<p>Cultivated who resolution connection motionless did occasional. Journey promise if it colonel.</p>
									<div class="button-wrapper">
										<a href="#" class="button button-while">To Shop</a>
										<span class="button chech-product"></span>
										<span class="button chech-product chech-product-red"></span>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<img src="assets/img/merak-home-1-slider-2.jpg" alt="">
								<div class="slider-foto-inner">
									<h1>Beautiful Casual Summer Dress</h1>
									<p>Cultivated who resolution connection motionless did occasional. Journey promise if it colonel.</p>
									<div class="button-wrapper">
										<span class="button chech-product"></span>
										<a href="#" class="button button-while">To Shop</a>
										<span class="button chech-product chech-product-red"></span>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<img src="assets/img/merak-home-1-slider-3.jpg" alt="">
								<div class="slider-foto-inner">
									<h1>Beautiful Casual Summer Dress</h1>
									<p>Cultivated who resolution connection motionless did occasional. Journey promise if it colonel.</p>
									<div class="button-wrapper">
										<span class="button chech-product"></span>
										<span class="button chech-product chech-product-red"></span>
										<a href="#" class="button button-while">To Shop</a>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-numbers">
							<span class="slider-left"><i class="fas fa-chevron-left"></i></span>
							<div class="swiper-pagination"></div>
							<span class="slider-right"><i class="fas fa-chevron-right"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="product-main">
	<div class="container">
		<div class="product-main-inner with-animated">
			<div class="title-wrapper">
				<h6 class="sub-title">Clothes that you like</h6>
				<h2 class="title">Featured products</h2>
			</div>
			<ul class="product-menu">
				<li class="active" data-value="all"><a>All</a></li>
			<?php foreach ( $data['tags'] as $tag ) : ?>
				<li data-value="<?php echo strtolower( lb_esc_html( $tag['tag_name'] ) ); ?>"><a><?php echo lb_esc_html( $tag['tag_name'] ); ?></a></li>
			<?php endforeach; ?>
			</ul>
		</div>
		<div class="product-main-wrapper active with-animated" data-value="all">
			<div class="row">
				<?php foreach ( $data['products'] as $product ) :?>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="product-box">
							<div class="product-foto">
								<img src="<?php echo lb_esc_html( $product['images'][0] ); ?>" alt="<?php echo lb_esc_html( $product['name'] ); ?>">
								<div class="product-foto-hover">
									<img src="<?php echo lb_esc_html( $product['images'][1] ); ?>" alt="<?php echo lb_esc_html( $product['name'] ); ?>">
									<a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="link-full"></a>
									<div class="button-product-wrapper">
										<a href="?action=add_to_cart&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Add to cart"><span class="btn-text-span">Add to cart</span><span class="btn-plus">+</span> </a>
										<a href=".quick-view" class="button button-product btn-popup" data-effect="mfp-move-horizontal" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></a>
										<a href="#" class="button button-product" data-toggle="tooltip" data-placement="top" title="Like"><i class="far fa-heart"></i></a>
									</div>
								</div>
							</div>
							<div class="product-text">
								<div class="product-text-inner">
									<h6><a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="link-hover"><?php echo lb_esc_html( $product['name'] ); ?></a></h6>
									<div class="check-product">
										<?php if ( ! empty( $product['colors']['0'] ) ) :
											foreach ( $product['colors'] as $color ) : ?>
												<div class="swatch" style="background-color: <?php echo lb_esc_html( $color ); ?>;"></div>
										<?php endforeach;
										endif;?>
									</div>
								</div>
								<div class="price">$<?php echo lb_esc_html( $product['price'] ); ?></div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php foreach ( $data['tags'] as $tag ) :
			if ( 0 < $tag['tag_count'] ) :?>
				<div class="product-main-wrapper with-animated" data-value="<?php echo strtolower( lb_esc_html( $tag['tag_name'] ) ); ?>">
					<div class="row">
				<?php foreach ( $data['products'] as $product ) :
					foreach (  $product['tags'] as $product_tag ):
					 if ( $tag['tag_name'] === $product_tag ) : ?>
						<div class="col-sm-12 col-md-6 col-lg-3">
									<div class="product-box">
										<div class="product-foto">
											<img src="<?php echo lb_esc_html( $product['images'][0] ); ?>" alt="<?php echo lb_esc_html( $product['name'] ); ?>">
											<div class="product-foto-hover">
												<img src="<?php echo lb_esc_html( $product['images'][1] ); ?>" alt="<?php echo lb_esc_html( $product['name'] ); ?>">
												<a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="link-full"></a>
												<div class="button-product-wrapper">
													<a href="?action=add_to_cart&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Add to cart"><span class="btn-text-span">Add to cart</span><span class="btn-plus">+</span> </a>
													<a href=".quick-view" class="button button-product btn-popup" data-effect="mfp-move-horizontal" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></a>
													<a href="#" class="button button-product" data-toggle="tooltip" data-placement="top" title="Like"><i class="far fa-heart"></i></a>
												</div>
											</div>
										</div>
										<div class="product-text">
											<div class="product-text-inner">
												<h6><a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="link-hover"><?php echo lb_esc_html( $product['name'] ); ?></a></h6>
												<div class="check-product">
												<?php if ( ! empty( $product['colors']['0'] ) ) :
													foreach ( $product['colors'] as $color ) :
														?>
																<div class="swatch" style="background-color: <?php echo lb_esc_html( $color ); ?>;"></div>
													<?php endforeach;
													endif; ?>
												</div>
											</div>
											<div class="price">$<?php echo lb_esc_html( $product['price'] ); ?></div>
										</div>
									</div>
								</div>
					<?php endif; ?>
					<?php endforeach; ?>
					<?php endforeach; ?>

					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</section>
<section class="best-category with-animated">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-6 with-animated">
				<h6 class="sub-title">Clothes that you like</h6>
				<h2 class="title">Best on category</h2>
				<p>The clothes that you like. New collections of clothes for every taste for you and your family.</p>
				<div class="row spacing-30">
					<div class="col-sm-12 col-md-6">
						<div class="product-box">
							<div class="product-foto">
								<img src="assets/img/products(compressed)/merak-product-9-1-min.jpg" alt="">
								<div class="product-foto-hover">
									<img src="assets/img/products(compressed)/merak-product-9-0-min.jpg" alt="">
									<a href="#" class="link-full"></a>
									<div class="button-product-wrapper">
										<a href="#" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Select option"><span class="btn-text-span">Select option</span><span class="btn-plus">+</span></a>
										<a href=".quick-view" class="button button-product btn-popup" data-effect="mfp-move-horizontal" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></a>
										<a href="#" class="button button-product" data-toggle="tooltip" data-placement="top" title="Like"><i class="far fa-heart"></i></a>
									</div>
								</div>
							</div>
							<div class="product-text">
								<div class="product-text-inner">
									<h6><a href="#" class="link-hover">Knitted top</a></h6>
								</div>
								<div class="price">$65.00</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="product-box">
							<div class="product-foto">
								<img src="assets/img/products(compressed)/merak-product-8-0-min.jpg" alt="">
								<div class="product-foto-hover">
									<img src="assets/img/products(compressed)/merak-product-8-1-min.jpg" alt="">
									<a href="#" class="link-full"></a>
									<div class="button-product-wrapper">
										<a href="#" class="button button-product product-big" data-toggle="tooltip" data-placement="top" title="Select option"><span class="btn-text-span">Select option</span><span class="btn-plus">+</span></a>
										<a href=".quick-view" class="button button-product btn-popup" data-effect="mfp-move-horizontal" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></a>
										<a href="#" class="button button-product" data-toggle="tooltip" data-placement="top" title="Like"><i class="far fa-heart"></i></a>
									</div>
								</div>
							</div>
							<div class="product-text">
								<div class="product-text-inner">
									<h6><a href="#" class="link-hover">Shopper bag</a></h6>
								</div>
								<div class="price">$49.99</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 offset-lg-1 col-lg-5 with-animated">
				<div class="category-foto">
					<div class="swiper-container" data-option='{"loop":true, "navigation":true, "pagination":false, "slidesPerView": 1}'>
						<div class="swiper-wrapper">
							<div class="swiper-slide"><img src="assets/img/merak-banner-img-2.jpg" alt=""></div>
							<div class="swiper-slide"><img src="assets/img/merak-banner-img-1.jpg" alt=""></div>
						</div>
						<span class="arrow-category left slider-left"><i class="fas fa-chevron-left"></i></span>
						<span class="arrow-category right slider-right"><i class="fas fa-chevron-right"></i></span>
					</div>
					<div class="category-banner">
						<div class="category-banner-content">
							<h6 class="sub-title">The most fashionable bows</h6>
							<h3>What's popular this season?</h3>
							<a href="#" class="button button-medium">To Shop</a>
						</div>
					</div>

				</div>
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
					<?php foreach ( $data['products'] as $product ) :
					if ( ! empty( $product['tags'] ) ) :
					foreach ( $product['tags'] as $tag ) :
							if( 'Discount' === $tag ):?>
								<div class="swiper-slide">
									<div class="product-box">
										<div class="product-foto">
											<img src="<?php echo lb_esc_html( $product['images'][0] ); ?>" alt="<?php echo lb_esc_html( $product['name'] ); ?>">
											<div class="product-foto-hover">
												<img src="<?php echo lb_esc_html( $product['images'][1] ); ?>" alt="<?php echo lb_esc_html( $product['name'] ); ?>">
												<a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="link-full"></a>
												<div class="button-product-wrapper">
													<a href="?action=add_to_cart&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="button button-product" data-toggle="tooltip" data-placement="top" title="Add to cart" data-original-title="Add to cart"><i class="far fa-plus"></i></a>
													<a href=".quick-view" class="button button-product btn-popup" data-effect="mfp-move-horizontal" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></a>
													<a href="#" class="button button-product" data-toggle="tooltip" data-placement="top" title="Like"><i class="far fa-heart"></i></a>
												</div>
											</div>
										</div>
										<div class="product-text">
											<div class="product-text-inner">
												<h6><a href="?action=single_product&id=<?php echo lb_esc_html( $product['id'] ); ?>" class="link-hover"><?php echo lb_esc_html( $product['name'] ); ?></a></h6>
												<div class="check-product">
													<?php if ( ! empty( $product['colors']['0'] ) ) :
														foreach ( $product['colors'] as $color ) :
															?>
															<div class="swatch" style="background-color: <?php echo lb_esc_html( $color ); ?>;"></div>
													<?php endforeach;
													endif; ?>
												</div>
											</div>
											<div class="price">$<?php echo lb_esc_html( $product['price'] ); ?></div>
										</div>
									</div>
								</div>
						<?php endif;
						endforeach;
						endif;
						endforeach; ?>
				</div>
			</div>
			<div class="customers-arrow arrow-left slider-left"><i class="fas fa-chevron-left"></i></div>
			<div class="customers-arrow arrow-right slider-right"><i class="fas fa-chevron-right"></i></div>
		</div>
		<div class="row with-animated">
			<div class="col-md-12 col-lg-4">
				<div class="product-box">
					<div class="product-foto foto-hover-scale">
						<img src="assets/img/merak-banner-img-3.jpg" alt="">
						<div class="product-foto-title">
							<h6 class="sub-title">New in 2021</h6>
							<h3 class="title">Skirts and dresses</h3>
						</div>
						<a href="#" class="link-block-full"></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="product-box">
					<div class="product-foto foto-hover-scale">
						<img src="assets/img/merak-banner-img-4.jpg" alt="">
						<div class="product-foto-title">
							<h6 class="sub-title">Treat yourself</h6>
							<h3 class="title">Summer loafers</h3>
						</div>
						<a href="#" class="link-block-full"></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="product-box">
					<div class="product-foto foto-hover-scale">
						<img src="assets/img/merak-banner-img-5.jpg" alt="">
						<div class="product-foto-title">
							<h6 class="sub-title">Bestsellers</h6>
							<h3 class="title">Collection of bags</h3>
						</div>
						<a href="#" class="link-block-full"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="customers with-animated">
	<div class="container">
		<div class="block-title-center with-animated">
			<h6 class="sub-title">Clothes that you like</h6>
			<h2 class="title">Customers reviews</h2>
			<p>The clothes that you like. New collections of clothes for every taste for you and your family.</p>
		</div>
		<div class="customers-arrow-wrapper with-animated">
			<div class="swiper-container" data-option='{"loop":false, "navigation":true, "pagination":false, "slidesPerView": 3, "spaceBetween": 30}'>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-wrapper">
							<div class="testimonial">
								<div class="testimonial-foto">
									<img src="assets/img/merak-testimonials-1.jpg" alt="">
								</div>
								<div class="testimonial-about">
									<h4>Jennie Edwards</h4>
									<h6 class="sub-title">Customer</h6>
								</div>
							</div>
							<div class="testimonial-text">
								<p>Adapted as smiling of females oh me journey exposed concern. Met come add cold calm rose mile what. Tiled manor court built.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-wrapper">
							<div class="testimonial">
								<div class="testimonial-foto">
									<img src="assets/img/merak-testimonials-2.jpg" alt="">
								</div>
								<div class="testimonial-about">
									<h4>Kristin Watson </h4>
									<h6 class="sub-title">Customer</h6>
								</div>
							</div>
							<div class="testimonial-text">
								<p>Adapted as smiling of females oh me journey exposed concern. Met come add cold calm rose mile what. Tiled manor court built.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-wrapper">
							<div class="testimonial">
								<div class="testimonial-foto">
									<img src="assets/img/merak-testimonials-3.jpg" alt="">
								</div>
								<div class="testimonial-about">
									<h4>Courtney Henry</h4>
									<h6 class="sub-title">Customer</h6>
								</div>
							</div>
							<div class="testimonial-text">
								<p>Adapted as smiling of females oh me journey exposed concern. Met come add cold calm rose mile what. Tiled manor court built.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-wrapper">
							<div class="testimonial">
								<div class="testimonial-foto">
									<img src="assets/img/merak-testimonials-4.jpg" alt="">
								</div>
								<div class="testimonial-about">
									<h4>Watson Kristin</h4>
									<h6 class="sub-title">Customer</h6>
								</div>
							</div>
							<div class="testimonial-text">
								<p>Adapted as smiling of females oh me journey exposed concern. Met come add cold calm rose mile what. Tiled manor court built.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="customers-arrow arrow-left slider-left"><i class="fas fa-chevron-left"></i></div>
			<div class="customers-arrow arrow-right slider-right"><i class="fas fa-chevron-right"></i></div>
		</div>
</section>
<section class="articles">
	<div class="container">
		<div class="block-title-center with-animated">
			<h6 class="sub-title">Clothes that you like</h6>
			<h2 class="title">Our articles</h2>
			<p>The clothes that you like. New collections of clothes for every taste for you and your family.</p>
		</div>
		<div class="row spacing-bottom-65 with-animated">
			<div class="col-md-12 col-lg-4">
				<div class="articles-category">
					<div class="articles-category-foto">
						<img src="assets/img/blog/merak-blog-1.jpg" alt="">
						<a href="#" class="banner-category">Category</a>
					</div>
					<div class="articles-category-text">
						<h4><a href="#" class="link-hover">Title for the blog,	and the second line is here.</a></h4>
						<div class="articles-category-about">
							<span class="spacing-right"> Mar 07, 2021 • 7 Mins Reading </span>
							<div class="articles-category-author spacing-right"><img src="assets/img/merak-testimonials-3.jpg" alt=""></div>
							<span class="spacing-right"> By <span class="author-name">Mr. Mackay</span></span>
						</div>
						<a href="#" class="link-hover">Continue reading <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="articles-category">
					<div class="articles-category-foto">
						<img src="assets/img/blog/merak-blog-2.jpg" alt="">
						<div class="banner-play"><i class="fal fa-play"></i></div>
						<a href="#" class="banner-category">Category</a>
					</div>
					<div class="articles-category-text">
						<h4><a href="#" class="link-hover">Title for the blog,	and the second line is here.</a></h4>
						<div class="articles-category-about">
							<span class="spacing-right"> Mar 07, 2021 • 7 Mins Reading </span>
							<div class="articles-category-author spacing-right"><img src="assets/img/merak-testimonials-3.jpg" alt=""></div>
							<span class="spacing-right"> By <span class="author-name">Mr. Mackay</span></span>
						</div>
						<a href="#" class="link-hover">Continue reading <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="articles-category">
					<div class="articles-category-foto">
						<img src="assets/img/blog/merak-blog-3.jpg" alt="">
						<a href="#" class="banner-category">Category</a>
					</div>
					<div class="articles-category-text">
						<h4><a href="#" class="link-hover">Title for the blog,	and the second line is here.</a></h4>
						<div class="articles-category-about">
							<span class="spacing-right"> Mar 07, 2021 • 7 Mins Reading </span>
							<div class="articles-category-author spacing-right"><img src="assets/img/merak-testimonials-3.jpg" alt=""></div>
							<span class="spacing-right"> By <span class="author-name">Mr. Mackay</span></span>
						</div>
						<a href="#" class="link-hover">Continue reading <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row instagram-page with-animated">
			<div class="col-md-12 col-lg-4">
				<div class="instagram-text">
					<i class="fab fa-instagram"></i>
					<a href="#" class="instagram-link link-hover">@merak_fashion</a>
					<p>The clothes that you like. New collections of clothes.</p>
					<a href="#" class="button button-subscribe button-border">Subscribe</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-2">
				<div class="instagram-foto">
					<img src="assets/img/merak-instagram-1.jpg" alt="">
					<div class="instagram-info">
						<span><i class="far fa-heart"></i>4K</span>
						<span><i class="far fa-comment"></i>32</span>
					</div>
					<a href="#" class="link-full"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-2">
				<div class="instagram-foto">
					<img src="assets/img/merak-instagram-2.jpg" alt="">
					<div class="instagram-info">
						<span><i class="far fa-heart"></i>4K</span>
						<span><i class="far fa-comment"></i>32</span>
					</div>
					<a href="#" class="link-full"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-2">
				<div class="instagram-foto">
					<img src="assets/img/merak-instagram-3.jpg" alt="">
					<div class="instagram-info">
						<span><i class="far fa-heart"></i>4K</span>
						<span><i class="far fa-comment"></i>32</span>
					</div>
					<a href="#" class="link-full"></a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-2">
				<div class="instagram-foto">
					<img src="assets/img/merak-instagram-4.jpg" alt="">
					<div class="instagram-info">
						<span><i class="far fa-heart"></i>4K</span>
						<span><i class="far fa-comment"></i>32</span>
					</div>
					<a href="#" class="link-full"></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="subscribe with-animated">
	<div class="container">
		<div class="subscribe-inner">
			<div class="subscribe-text">
				<img src="assets/img/merak-icon-open-mail.svg" alt="">
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
