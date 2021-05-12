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
							<input type="text" class="form-control" name="name" value="<?php echo $this_cafe['name']; ?>"><br>
							<input type="text" class="form-control" name="type" value="<?php echo $this_cafe['type']; ?>"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Шлях до фото на сервері</span>
							</div>
							<input type="text" class="form-control" name="img" value="<?php echo $this_cafe['img']; ?>"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Рейтинг</span>
							</div>
							<input type="text" class="form-control" name="rating" value="<?php echo $this_cafe['rating']; ?>"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Адрес</span>
							</div>
							<input type="text" class="form-control" name="address" value="<?php echo $this_cafe['address']; ?>"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Години роботи:</span>
							</div>
							<input type="text" class="form-control" name="time_work" value="<?php echo $this_cafe['time_work']; ?>"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Номер телефону</span>
							</div>
							<input type="text" class="form-control" name="number" value="<?php echo $this_cafe['number']; ?>"><br>
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Кількість відгуків</span>
							</div>
							<input type="text" class="form-control" name="number_reviews" value="<?php echo $this_cafe['number_reviews']; ?>"><br>
						</div>

						<button name="save-edit" value="<?php echo $this_cafe['id']; ?>" class="btn btn-success">Зберегти</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>