<section class="make-pages">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-2">
				<a href="?action=add_page" name="add-page" class="btn btn-success">Add new page</a>
			</div>
			<div class="col-md-8">
				<?php
				lb_print_notice( 'error' );
				lb_print_notice( 'success' );
				
				if( empty( $data['pages'] ) ):?>
				
				<h4>Не створено жодної сторінки</h4>
				
				<?php endif;
				
				foreach ( $data['pages'] as $page ): ?>
					<div class="card mb-3">
						<div class="row no-gutters align-items-center">
							<div class="col-md-9">
								<div class="card-body">
									<h5 class="card-title">
										<?php echo $page['name']; ?>
									</h5>
								</div>
							</div>
							<div class="col-md-3">
								<div class="btn-wrapper">
									<a href="?action=edit-page&id=<?php echo $page['id']; ?>" name="edit-page" class="btn btn-warning">Edit</a>
									<a href="?action=remove-page&id=<?php echo $page['id']; ?>" name="remove-page" class="btn btn-danger">Remove</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>