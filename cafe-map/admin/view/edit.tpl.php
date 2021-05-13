<?php $this_cafe = $data['this_cafe'] ?>

<section class="edit">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<form action="" method="post">
					<div class="card-body">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Назва та тип закладу	</span>
							</div>
							<input type="text" class="form-control" name="name" value="<?php echo $this_cafe['name']; ?>" aria-label="name"><br>
							<input type="text" class="form-control" name="type" value="<?php echo $this_cafe['type']; ?>" aria-label="type"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Шлях до фото на сервері</span>
							</div>
							<input type="text" class="form-control" name="img" value="<?php echo $this_cafe['img']; ?>" aria-label="image"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Рейтинг</span>
							</div>
							<input type="text" class="form-control" name="rating" value="<?php echo $this_cafe['rating']; ?>" aria-label="rating"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Адрес</span>
							</div>
							<input type="text" class="form-control" name="address" value="<?php echo $this_cafe['address']; ?>" aria-label="address"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Години роботи:</span>
							</div>
							<input type="text" class="form-control" name="time_work" value="<?php echo $this_cafe['time_work']; ?>" aria-label="time work"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Номер телефону</span>
							</div>
							<input type="text" class="form-control" name="number" value="<?php echo $this_cafe['number']; ?>" aria-label="number"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Кількість відгуків</span>
							</div>
							<input type="text" class="form-control" name="number_reviews" value="<?php echo $this_cafe['number_reviews']; ?>" aria-label="number reviews"><br>
						</div>

						<button name="save-edit" value="<?php echo $this_cafe['id']; ?>" class="btn btn-success">Зберегти</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>