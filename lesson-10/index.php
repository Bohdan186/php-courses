<?php require_once 'forms.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Forms</title>
</head>
<body>
	<h2>Завдання 1</h2>
	<p>
		Спросите имя пользователя с помощью формы.
		Результат запишите в переменную $name.
		Выведите на экран фразу 'Привет, %Имя%'
	</p>

	<form action="#" method="GET">
		<input type="text" name='name' placeholder="Your Name">
		<button name="btn-1">Send name</button>
	</form>

	<?php lb_todo_1(); ?>

	<h2>Завдання 2</h2>
	<p>
		Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea).
		Выведите эти данные на экран в формате, приведенном под данной задачей.
		Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.
	</p>

	<form action="#" method="POST">
		<input type="text" name='name2' placeholder="Your Name"><br><br>
		<input type="text" name='age2' placeholder="Your Age"><br><br>
		<textarea name="message2" cols="30" rows="10" placeholder="Message"></textarea><br><br>
		<button name="btn-2">Send</button>
	</form>
	
	<?php lb_todo_2(); ?>

	<h2>Завдання 3</h2>
	<p>
		Спросите возраст пользователя.
		Если форма была отправлена и введен возраст,
		то выведите его на экран, а форму уберите.
		Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее
	</p>

	<?php if ( empty( $_POST['age3'] ) ) { ?>

	<form action="#" method="POST">
		<input type="text" name='age3' placeholder="Your Age"><br><br>
		<button name="btn-3">Send name</button>
	</form>

	<?php } lb_todo_3(); ?>

	<h2>Завдання 4</h2>
	<p>
		Спросите у пользователя логин и пароль (в браузере должен быть звездочками).
		Сравните их с логином $login и паролем $pass, хранящихся в файле.
		Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'.
		Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.
	</p>

	<form action="#" method="POST">
		<input type="text" name='login4' placeholder="login"><br><br>
		<input type="password" name="pass4"><br><br>
		<button name="btn-4">Login</button>
	</form>

	<?php lb_todo_4(); ?>

	<h2>Завдання 5</h2>
	<p>
		Спросите имя пользователя с помощью формы. Результат запишите в переменную $name.
		Сделайте так, чтобы после отправки формы значения ее полей не пропадали. 
	</p>


	<form action="#" method="POST">
		<input type="text" name='name5' value="<?php lb_todo_5(); ?>"><br><br>
		<button name="btn-5">Send</button>
	</form>
	
	<h2>Завдання 6</h2>
	<p>
		Спросите у пользователя имя, а также попросите его ввести сообщение (textarea).
		Сделайте так, чтобы после отправки формы значения его полей не пропадали.
	</p>


	<form action="" method="POST">
		<input name="name6" value="<?php lb_todo_6( 'name' ); ?>"><br><br>
		<textarea name="message6" cols="30" rows="10">
			<?php lb_todo_6( 'message' ); ?>
		</textarea><br><br>
		<button name="btn-6">Send</button>
	</form>
</body>
</html>
