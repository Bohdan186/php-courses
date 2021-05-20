<section class="edit-page">
	<div class="container">
		<h3>Змінити сторінку</h3>
		
		<form method="post" action="?action=save_edit_page">
			<label for="page-name"> Заголовок сторінки </label>
			<input type="text" id="page-name" class="form-control" name="page_name" aria-label="page name" value="<?php echo $data['page_data']['name'] ?>"><br>
			
			<label for="mytextarea"> Контент сторінки </label>
			<textarea id="mytextarea" name="mytextarea">
				<?php echo $data['page_data']['html'] ?>
			</textarea>
			
			<button name="save_edit_page" value="<?php echo $data['page_data']['id'] ?>" type="submit" class="btn btn-primary">Зберегти</button>
		</form>
	</div>
</section>