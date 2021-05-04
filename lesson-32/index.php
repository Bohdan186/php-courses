<?php require_once 'index2.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP lesson 32</title>
</head>
<body>
	<h2>Завдання 1</h2>
	<p> 
		По заходу на страницу запишите в сессию текст 'test'.
		Затем обновите страницу и выведите содержимое сессии на экран.
	</p>

	<form action="#" method="get">
		<input type="submit" value="Get session value" name="get_session_value">
	</form>
	<?php lb_todo_1(); ?>

	<h2>Завдання 2</h2>
	<p> 
		Пусть у вас есть две страницы сайта.
		Запишите на первой странице что-нибудь в сессию, а затем выведите это при заходе на другую страницу.
	</p>

	<form action="#" method="get">
		<input type="text" name="write_session">
		<input type="submit" name="write">
	</form>
	<a href="page2.php">Page 2 </a>
	<?php lb_todo_2_write(); ?>

	<h2>Завдання 3</h2>
	<p> 
		Сделайте счетчик обновления страницы пользователем. Данные храните в сессии.
		Скрипт должен выводить на экран количество обновлений.
		При первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновляли страницу.
	</p>
	<?php lb_todo_3(); ?>

	<h2>Завдання 4</h2>
	<p> 
		Сделайте две страницы: index.php и test.php.
		При заходе на index.php спросите с помощью формы страну пользователя,
		запишите ее в сессию (форма при этом должна отправится на эту же страницу).
		Пусть затем пользователь зайдет на страницу test.php - выведите там страну пользователя.
	</p>

	<form action="#" method="get">
		<select name="write_input_country">
			<option value="Ukraine">Ukraine</option>
			<option value="USA">USA</option>
		</select>

		<input type="submit" name="write_country">
	</form>
	<a href="page2.php">Page 2 </a>
	<?php lb_todo_4_write_country(); ?>
	
	<h2>Завдання 5</h2>
	<p> 
		Запишите в сессию время захода пользователя на сайт.
		При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
	</p>
	<?php lb_todo_5(); ?>
	
	<h2>Завдання 6</h2>
	<p> 
		Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме
		(поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено.
	</p>
	<form action="#" method="post">
		<input type="text" name="user-first-name" placeholder="First Name"><br>
		<input type="text" name="user-last-name" placeholder="Last Name"><br>
		<input type="password" name="user-pass" placeholder="Password"><br>
		<input type="email" name="user-email" placeholder="Email"><br>

		<input type="submit" name="w_email"><br>
	</form>
	<a href="page2.php">Page 2 </a>
	<?php lb_todo_6_w_email(); ?>
</body>
</html>
