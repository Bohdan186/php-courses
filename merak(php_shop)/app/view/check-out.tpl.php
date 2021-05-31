<?php
/**
 * Check out html file.
 *
 * @package templates
 */
?>

<section class="navigation-page">
	<div class="container">
		<div class="navigation-page-inner navigation-page-border">
			<div class="navigation-wrapper">
				<h2>Check out</h2>
				<a href="?action=home" class="link-hover">Home</a>
				<span><i class="fas fa-chevron-right"></i></span>
				<a href="?action=check_out" class="link-hover">Check out</a>
			</div>
		</div>
	</div>
</section>
<section class="checkout-form">
	<div class="container">
		<div class="notice-wrapper">
			<?php lb_print_notice( 'error' );?>
		</div>
		<form method="post" action="">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="user-first-name">First Name <span>*</span></label>
					<input name="user_first_name" type="name" class="form-control" id="user-first-name" aria-label="first name" value="<?php echo ! empty( $_POST['user_first_name'] ) ? $_POST['user_first_name'] : '' ;?>">
				</div>
				<div class="form-group col-md-6">
					<label for="user-last-name">Last Name <span>*</span></label>
					<input name="user_last_name" type="text" class="form-control" id="user-last-name" value="<?php echo ! empty( $_POST['user_last_name'] ) ? $_POST['user_last_name'] : '' ;?>">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="telephone">Telephone <span>*</span></label>
					<input name="telephone" type="tel" class="form-control" id="telephone" aria-label="telephone" value="<?php echo ! empty( $_POST['telephone'] ) ? $_POST['telephone'] : '' ;?>">
				</div>
				<div class="form-group col-md-6">
					<label for="email">Email <span>*</span></label>
					<input name="email" type="email" class="form-control" id="email" value="<?php echo ! empty( $_POST['email'] ) ? $_POST['email'] : '' ;?>">
				</div>
			</div>
			<div class="form-group">
				<label for="input_address">Address <span>*</span></label>
				<input name="input_address" type="text" class="form-control" id="input_address" placeholder="1234 Main St" value="<?php echo ! empty( $_POST['input_address'] ) ? $_POST['input_address'] : '' ;?>">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="input_city">City <span>*</span></label>
					<input name="input_city" type="text" class="form-control" id="input_city" value="<?php echo ! empty( $_POST['input_city'] ) ? $_POST['input_city'] : '' ;?>">
				</div>
				<div class="form-group col-md-4">
					<label for="input_region">Region <span>*</span></label>
					<select name="input_region" id="input_region" class="form-control">
						<?php foreach ( $data['regions'] as $region ): ?>
							<option value="<?php echo $region['id'] ?>" <?php echo $region['id'] === $_POST['input_region'] ? 'selected' : ''; ?> >
								<?php echo $region['name'] ?>
							</option>
						<? endforeach; ?>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label for="input_zip">Zip <span>*</span></label>
					<input name="input_zip" type="text" class="form-control" id="input_zip" value="<?php echo ! empty( $_POST['input_zip'] ) ? $_POST['input_zip'] : '' ;?>">
				</div>
			</div>
			<button name="submit-check-out" type="submit" class="btn button button-cart">Sign in</button>
		</form>
	</div>
</section>
