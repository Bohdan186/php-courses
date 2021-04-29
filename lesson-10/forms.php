<?php

// Base functions

function esc_html( $data ) {
	$str = htmlspecialchars( trim( $data ) );

	return $str;
}

function ar( $data, $production = false ) {
	if ( $production ) {
		if ( isset( $_GET['x'] ) ) {
			echo '<pre>';
			print_r( $data );
			echo '<pre>';
		}
	} else {
		echo '<pre>';
		print_r( $data );
		echo '<pre>';
	}
}

function chack_errors( $errors, $callback ) {
	if ( ! empty( $errors ) ) {
		foreach ( $errors as $value ) {
			echo '<strong>' . $value . '</strong> <br>';
		}
	} else {
		$callback();
	}
};

/*
	ЗАВДАННЯ 1

	Спросите имя пользователя с помощью формы.
	Результат запишите в переменную $name.
	Выведите на экран фразу 'Привет, %Имя%'
*/

function lb_todo_1() {
	if ( ! isset( $_GET['btn-1'] ) ) {
		return;
	}

	$errors = array();

	if ( empty( $_GET['name'] ) ) {
		$errors[] = 'Поле name пусте';
	}

	chack_errors(
		$errors,
		function() {
			$name = esc_html( $_GET['name'] );

			echo '<p> Привет, ' . $name . '</p>';
		}
	);
}

/*
	ЗАВДАННЯ 2

	Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea).
	Выведите эти данные на экран в формате, приведенном под данной задачей.
	Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.
*/

function lb_todo_2() {
	if ( ! isset( $_POST['btn-2'] ) ) {
		return;
	}

	$errors = array();

	if ( empty( $_POST['name2'] ) ) {
		$errors[] = 'Поле name2 пусте';
	}

	if ( empty( $_POST['age2'] ) ) {
		$errors[] = 'Поле age2 пусте';
	} elseif ( ! is_numeric( $_POST['age2'] ) ) {
		$errors[] = 'В полі age2 вказане НЕ число';
	}

	if ( empty( $_POST['message2'] ) ) {
		$errors[] = 'Поле message2 пусте';
	}

	chack_errors(
		$errors,
		function() {
			$name    = esc_html( $_POST['name2'] );
			$age     = esc_html( $_POST['age2'] );
			$message = esc_html( $_POST['message2'] );

			echo '<p> Привет, ' . $name . ', ' . $age . ' лет.' . '</p>';
			echo '<p> Твое сообщение: ' . $message . '</p>';
		}
	);
}

/*
	ЗАВДАННЯ 3

	Спросите возраст пользователя.
	Если форма была отправлена и введен возраст,
	то выведите его на экран, а форму уберите.
	Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее
*/

function lb_todo_3() {
	if ( ! isset( $_POST['btn-3'] ) ) {
		return;
	}

	$errors = array();

	if ( empty( $_POST['age3'] ) ) {
		$errors[] = 'Поле age3 пусте';
	}

	chack_errors(
		$errors,
		function() {
			$age = esc_html( $_POST['age3'] );

			echo '<p> Твой возраст, ' . $age . '</p>';
		}
	);
}

/*
	ЗАВДАННЯ 4

	Спросите у пользователя логин и пароль (в браузере должен быть звездочками).
	Сравните их с логином $login и паролем $pass, хранящихся в файле.
	Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'.
	Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.
*/

function lb_todo_4() {
	if ( ! isset( $_POST['btn-4'] ) ) {
		return;
	}

	$get_users_data = file_get_contents( 'db_users.txt' );
	$users_data     = json_decode( $get_users_data, true );
	$user_iset      = false;
	$login          = esc_html( $_POST['login4'] );
	$pass           = esc_html( $_POST['pass4'] );

	if ( empty( $login ) && empty( $pass ) ) {
		echo 'введіть логін і пароль <br>';
	} elseif ( empty( $login ) ) {
		echo 'введіть логін <br>';
	} elseif ( empty( $pass ) ) {
		echo 'введіть пароль <br>';
	}

	foreach ( $users_data as $user ) {
		if ( $login === $user['name'] ) {
			$user_iset = true;
			if ( $pass === $user['password'] ) {
				echo 'Доступ дозволенно <br>';
			} else {
				echo 'Пароль Невірний <br>';
			}
		}
	}

	if ( ! empty( $login ) && $user_iset === false ) {
		echo 'Логін Невірний <br>';
	}
}

/*
	ЗАВДАННЯ 5

	Спросите имя пользователя с помощью формы. Результат запишите в переменную $name.
	Сделайте так, чтобы после отправки формы значения ее полей не пропадали.
*/

function lb_todo_5() {
	if ( ! isset( $_POST['btn-5'] ) ) {
		return;
	}

	$name = esc_html( $_POST['name5'] );

	if ( isset( $_POST['name5'] ) ) {
		echo $name;
	}
}

function lb_todo_6( $item ) {
	if ( ! isset( $_POST['btn-6'] ) ) {
		return;
	}

	$name    = esc_html( $_POST['name6'] );
	$message = esc_html( $_POST['message6'] );

	if ( $item === 'name' ) {
		if ( isset( $_POST['name6'] ) ) {
			echo $name;
		}
	} elseif ( $item === 'message' ) {
		if ( isset( $_POST['message6'] ) ) {
			echo $message;
		}
	}
}
