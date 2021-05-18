<?php
/** @var $data - array data from database cafe */ ?>

<section class = "content">
	<div class = "container-fluid">
		<div class = "row">
			<div class = "col-md-4">
				<?php
				foreach ( $data['cafe'] as $this_cafe ):
					?>
					<div class = "card mb-3" style = "max-width: 540px;">
						<div class = "row no-gutters">
							<div class = "col-md-9">
								<div class = "card-body">
									<h5 class = "card-title">
										<?php
										echo $this_cafe['name']; ?>
									</h5>
									<p class = "card-text"><small class = "text-muted">
											<?php
											echo $this_cafe['type']; ?>
										</small></p>
									<p class = "card-text">Рейтинг:
										<?php
										echo $this_cafe['rating']; ?>
									</p>
									<p class = "card-text">Адреса:
										<?php
										echo $this_cafe['address']; ?>
									</p>
									<p class = "card-text">Години:
										<?php
										echo $this_cafe['time_work']; ?>
									</p>
									<p class = "card-text">Номер телефону:
										<?php
										echo $this_cafe['number']; ?>
									</p>
									<p class = "card-text">Кількість відгуків:
										<?php
										echo $this_cafe['number_reviews']; ?>
									</p>
								</div>
							</div>
							<div class = "col-md-3">
								<div class = "img-wrapper">
									<img src = "<?php
									echo $this_cafe['img']; ?>" class = "cafe-img"
										 alt = "<?php
										 echo $this_cafe['name']; ?>">
								</div>
							</div>
						</div>
					</div>
				<?php
				endforeach;
				?>
				<div class = "pagination">
					<?php
					$page_number = 1;

					for ( $i = 0; $i < $data['cafe_count'][0]; $i += 5 ):
						?>

						<a href = "?start-record=<?php
						echo $i ?>"
						   class = "btn btn-primary btn-sm <?php
						   echo esc_html( $i === (int)$_GET['start-record'] ) ? 'active' : ''; ?>">
							<?php
							echo $page_number ?>
						</a>

						<?php
						$page_number++;
					endfor;
					?>
				</div>

			</div>
			<div class = "col-md-8">

			</div>
		</div>
	</div>
</section>
