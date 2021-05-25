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
				<a href="?action=shop" class="link-hover">Shop</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="#" class="link-hover">Dress</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="?action=single_product&id=<?php echo lb_esc_html( $_GET['id'] ) ?>" class="link-hover">Dress with a floral print</a>
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
						<div class="swiper-slide"><a href="../img/products(compressed)/merak-product-3-0-min.jpg" data-width="890" data-height="1080"><img src="../img/products(compressed)/merak-product-3-0-min.jpg" alt=""></a></div>
						<div class="swiper-slide"><a href="../img/products(compressed)/merak-product-3-1-min.jpg" data-width="890" data-height="1080"><img src="../img/products(compressed)/merak-product-3-1-min.jpg" alt=""></a></div>
						<div class="swiper-slide"><a href="../img/products(compressed)/merak-product-3-2-min.jpg" data-width="890" data-height="1080"><img src="../img/products(compressed)/merak-product-3-2-min.jpg" alt=""></a></div>
						<div class="swiper-slide"><a href="../img/products(compressed)/merak-product-3-3-min.jpg" data-width="890" data-height="1080"><img src="../img/products(compressed)/merak-product-3-3-min.jpg" alt=""></a></div>
					</div>
					<a href=".car" class="three-sixty btn-popup" data-effect="mfp-move-horizontal"><img src="../img/360_icon.png" alt=""></a>
				</div>
				<div class="swiper-container gallery-thumbs" >
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="../img/products(compressed)/merak-product-3-0-min.jpg" alt=""></div>
						<div class="swiper-slide"><img src="../img/products(compressed)/merak-product-3-1-min.jpg" alt=""></div>
						<div class="swiper-slide"><img src="../img/products(compressed)/merak-product-3-2-min.jpg" alt=""></div>
						<div class="swiper-slide"><img src="../img/products(compressed)/merak-product-3-3-min.jpg" alt=""></div>
					</div>
				</div>
				<div class="navigation-product">
					<div class="navigation-product-title">Reviews (0)</div>
					<p>There are no reviews yet.</p>
					<div class="navigation-product-title">Be the first to review “Dress with a floral print”</div>
					<form>
						<div class="row">
							<div class="col-sm-12">
								<div class="rating">
									<span class="navigation-product-title-second">Your Rating</span>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
									<i class="far fa-star"></i>
								</div>
								<textarea name="" id="" rows="4" placeholder="Your Review"></textarea>
							</div>
							<div class="col-sm-12 col-md-6">
								<input type="text" placeholder="Your Name">
							</div>
							<div class="col-sm-12 col-md-6">
								<input type="email" placeholder="Your Email Address">
							</div>
							<div class="col-sm-12">
								<div class="choose-size">
									<span class="navigation-product-title-second">What size did you try on?</span>
									<select>
										<option>Choose Size</option>
										<option>Choose Size 1</option>
										<option>Choose Size 2</option>
									</select>
								</div>
								<button class="button button-extra-large button-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="product-page-text product-sticky">
					<h3>Dress with a floral print</h3>
					<div class="price">$142.50</div>
					<p>Silent sir say desire fat him letter. Whatever settling goodness too and honoured she building answered her. Strongly thoughts remember.</p>
					<div class="row">
						<div class="col-sm-6">
							<div class="sizes sizes-spacing">
								<div class="name">Size</div>
								<span class="not-available">S</span>
								<span class="active">M</span>
								<span>L</span>
							</div>
							<a href="#" class="size-guide link-hover"><i class="fal fa-ruler"></i> Size Guide</a>
						</div>
						<div class="col-sm-6">
							<div class="sizes color">
								<div class="name">Color</div>
								<span class="active"><i class="fal fa-check"></i></span>
								<span><i class="fal fa-check"></i></span>
							</div>
						</div>
					</div>
					<form class="add-to-card">
						<input type="number">
						<button class="button button-cart">Add to cart</button>
						<button class="button button-product button-border"><i class="far fa-heart"></i></button>
					</form>
					<div class="row sku-category">
						<div class="col-3"><span>SKU:</span></div>
						<div class="col-9"><span class="info">N/A</span></div>
						<div class="col-3"><span>Category:</span></div>
						<div class="col-9"><span class="info">Dress</span></div>
					</div>
					<div class="description">
						<select>
							<option>Description</option>
							<option>Description1</option>
							<option>Description2</option>
						</select>
					</div>
					<div class="share">
						<div class="name">Share</div>
						<div class="single-product-link">
							<a href="#" class="link-hover"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#" class="link-hover"><i class="fab fa-twitter"></i></a>
							<a href="#" class="link-hover"><i class="fab fa-instagram"></i></a>
							<a href="#" class="link-hover"><i class="fab fa-telegram"></i></a>
						</div>
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
			<div class="col-custom-20">
				<div class="product-box">
					<div class="product-foto">
						<img src="../img/products(compressed)/merak-product-13-1-min.jpg" alt="">
						<div class="product-foto-hover">
							<img src="../img/products(compressed)/merak-product-13-0-min.jpg" alt="">
							<a href="#" class="link-full"></a>
							<div class="button-product-wrapper">
								<a href="#" class="button button-product product-big"><span class="btn-text-span">Select option</span><span class="btn-plus">+</span> </a>
								<a href="#" class="button button-product btn-popup"><i class="fas fa-search"></i></a>
								<a href="#" class="button button-product"><i class="far fa-heart"></i></a>
							</div>
						</div>
					</div>
					<div class="product-text">
						<div class="product-text-inner">
							<h6><a href="#" class="link-hover">Dress with a floral print</a></h6>
							<div class="check-product">
								<div class="swatch black"></div>
								<div class="swatch pink"></div>
							</div>
						</div>
						<div class="price">$67.00</div>
					</div>
				</div>
			</div>
			<div class="col-custom-20">
				<div class="product-box">
					<div class="product-foto">
						<img src="../img/products(compressed)/merak-product-11-1-min.jpg" alt="">
						<div class="product-foto-hover">
							<img src="../img/products(compressed)/merak-product-11-0-min.jpg" alt="">
							<a href="#" class="link-full"></a>
							<div class="button-product-wrapper">
								<a href="#" class="button button-product product-big"><span class="btn-text-span">Select option</span><span class="btn-plus">+</span> </a>
								<a href="#" class="button button-product btn-popup"><i class="fas fa-search"></i></a>
								<a href="#" class="button button-product"><i class="far fa-heart"></i></a>
							</div>
						</div>
					</div>
					<div class="product-text">
						<div class="product-text-inner">
							<h6><a href="#" class="link-hover">Shirt with a print</a></h6>
							<div class="check-product">
								<div class="swatch blue"></div>
								<div class="swatch light-blue"></div>
								<div class="swatch black"></div>
							</div>
						</div>
						<div class="price">$58.00</div>
					</div>
				</div>
			</div>
			<div class="col-custom-20">
				<div class="product-box">
					<div class="product-foto">
						<img src="../img/products(compressed)/merak-product-6-0-min.jpg" alt="">
						<div class="product-foto-hover">
							<img src="../img/products(compressed)/merak-product-6-1-min.jpg" alt="">
							<a href="#" class="link-full"></a>
							<div class="button-product-wrapper">
								<a href="#" class="button button-product product-big"><span class="btn-text-span">Select option</span><span class="btn-plus">+</span> </a>
								<a href="#" class="button button-product btn-popup"><i class="fas fa-search"></i></a>
								<a href="#" class="button button-product"><i class="far fa-heart"></i></a>
							</div>
						</div>
					</div>
					<div class="product-text">
						<div class="product-text-inner">
							<h6><a href="#" class="link-hover">Heeled sandals</a></h6>
						</div>
						<div class="price">$48.00</div>
					</div>
				</div>
			</div>
			<div class="col-custom-20">
				<div class="product-box">
					<div class="product-foto">
						<img src="../img/products(compressed)/merak-product-4-2-min.jpg" alt="">
						<div class="product-foto-hover">
							<img src="../img/products(compressed)/merak-product-4-0-min.jpg" alt="">
							<a href="#" class="link-full"></a>
							<div class="button-product-wrapper">
								<a href="#" class="button button-product product-big"><span class="btn-text-span">Select option</span><span class="btn-plus">+</span> </a>
								<a href="#" class="button button-product btn-popup"><i class="fas fa-search"></i></a>
								<a href="#" class="button button-product"><i class="far fa-heart"></i></a>
							</div>
						</div>
					</div>
					<div class="product-text">
						<div class="product-text-inner">
							<h6><a href="#" class="link-hover">Light Mom-fit Jeans</a></h6>
							<div class="check-product">
								<div class="swatch light-blue"></div>
								<div class="swatch light"></div>
							</div>
						</div>
						<div class="price">$89.99</div>
					</div>
				</div>
			</div>
			<div class="col-custom-20">
				<div class="product-box">
					<div class="product-foto">
						<img src="../img/products(compressed)/merak-product-10-1-min.jpg" alt="">
						<div class="product-foto-hover">
							<img src="../img/products(compressed)/merak-product-10-0-min.jpg" alt="">
							<a href="#" class="link-full"></a>
							<div class="button-product-wrapper">
								<a href="#" class="button button-product product-big"><span class="btn-text-span">Select option</span><span class="btn-plus">+</span> </a>
								<a href="#" class="button button-product btn-popup"><i class="fas fa-search"></i></a>
								<a href="#" class="button button-product"><i class="far fa-heart"></i></a>
							</div>
						</div>
					</div>
					<div class="product-text">
						<div class="product-text-inner">
							<h6><a href="#" class="link-hover">Denim shorts</a></h6>
						</div>
						<div class="price">$32.00</div>
					</div>
				</div>
			</div>
			<div class="customers-arrow arrow-left"><i class="fas fa-chevron-left"></i></div>
			<div class="customers-arrow arrow-right"><i class="fas fa-chevron-right"></i></div>
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
