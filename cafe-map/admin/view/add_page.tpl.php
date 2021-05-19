<section class="add-page">
	<div class="container">
		<h3>Створити сторінку</h3>

		<form method="post" action="?action=save_page">
			<label for="page-name"> Заголовок сторінки </label>
			<input type="text" id="page-name" class="form-control" name="page_name" aria-label="page name"><br>

			<label for="mytextarea"> Контент сторінки </label>
			<textarea id="mytextarea" name="mytextarea">
				Hello, World!
			</textarea>

			<button name="save_page" type="submit" class="btn btn-primary">Додати сторінку</button>
		</form>
	</div>
</section>