<?php
/**
 * Description of what this module (or file) is doing.
 *
 * @package lessons-20
 */

/**
 * Ar
 *
 * @param  mixed $data comment about this variable.
 * @param  mixed $production comment about this variable.
 *
 * @return void
 */
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
		echo '</pre>';
	}
}

/**
 * Esc_html
 *
 * @param  string $str - string.
 *
 * @return statement
 */
function esc_html( $str ) {
	$result = htmlspecialchars( trim( $str ) );

	return $result;
}
?>

<h2>Завдання 1</h2>
<p> 
	Спросите у пользователя имя с помощью формы.
	Сделайте чекбокс: если он отмечен, то поприветствуйте пользователя, если не отмечен - попрощайтесь с пользователем.
</p>

<form action="#" method="GET">
	<input type="text" name='name'>
	<input type="checkbox" name="say_hello" value="0">
	<input type="submit" name="submit" value="Submit">
</form>

<?php
/**
 * Lb_todo_1
 *
 * @return void
 */
function lb_todo_1() {
	if ( ! isset( $_GET['submit'] ) ) {
		return;
	}

	if ( ! empty( $_GET['name'] ) ) {
		$name = esc_html( $_GET['name'] );

		if ( isset( $_GET['say_hello'] ) ) {
			echo 'Hello ' . $name;
		} elseif ( ! isset( $_GET['say_hello'] ) ) {
			echo 'Goodby ' . $name;
		}
	} else {
		echo 'Enter your name!';
	}

}
	lb_todo_1();
?>

<h2>Завдання 2</h2>
<p> 
	Спросите у пользователя, какие из языков он знает: html, css, php, javascript.
	Выведите на экран те языки, которые знает пользователь.
</p>

<form action="#" method="GET">
	<input type="checkbox" name="languages[]" value="html">html <br>
	<input type="checkbox" name="languages[]" value="css">css <br>
	<input type="checkbox" name="languages[]" value="php">php <br>
	<input type="checkbox" name="languages[]" value="javascript">javascript <br>
	<input type="submit" name="submit-languages" value="Submit">
</form>

<?php
/**
 * Lb_todo_2
 *
 * @return void
 */
function lb_todo_2() {
	if ( ! isset( $_GET['submit-languages'] ) ) {
		return;
	}

	if ( isset( $_GET['languages'] ) ) {
		echo 'Вы знаете: ' . esc_html( implode( ', ', $_GET['languages'] ) );
	}
}
	lb_todo_2();
?>

<h2>Завдання 3</h2>
<p> 
	Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок.
	Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен. 
</p>

<form action="#" method="POST">
	<label for="you_know_php">Are you know php?</label><br>
	<input type="radio" name="you_know_php" value="Yes" checked> Yes	
	<input type="radio" name="you_know_php" value="No"> No <br>
	<input type="submit" name="submit-radio-1" value="submit">
</form>

<?php
/**
 * Lb_todo_3
 *
 * @return void
 */
function lb_todo_3() {
	if ( ! isset( $_POST['submit-radio-1'] ) ) {
		return;
	}

	if ( isset( $_POST['you_know_php'] ) ) {
		$course = esc_html( $_POST['you_know_php'] );

		if ( 'Yes' === $course ) {
			echo 'You know PHP !!!';
		} elseif ( 'No' === $course ) {
			echo 'You need learn PHP !!!';
		}
	}

}
	lb_todo_3();
?>

<h2>Завдання 4</h2>
<p> 
	Спросите у пользователя его возраст с помощью нескольких radio-кнопок.
	Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.
</p>

<form action="#" method="POST">
	<label for="user_age">How old are your?</label><br>

	<input type="radio" name="user_age" value="less-20"> less 20 <br>
	<input type="radio" name="user_age" value="20-25">20-25 <br>
	<input type="radio" name="user_age" value="26-30">26-30 <br>
	<input type="radio" name="user_age" value="more-30"> more 30 <br>

	<input type="submit" name="submit-radio-2" value="submit">
</form>

<?php
/**
 * Lb_todo_4
 *
 * @return void
 */
function lb_todo_4() {
	if ( ! isset( $_POST['submit-radio-2'] ) ) {
		return;
	}

	if ( isset( $_POST['user_age'] ) ) {
		$age = esc_html( $_POST['user_age'] );

		if ( 'less-20' === $age ) {
			echo 'You age: less 20';
		} elseif ( '20-25' === $age ) {
			echo 'You age: 20-25';
		} elseif ( '26-30' === $age ) {
			echo 'You age: 26-30';
		} elseif ( 'more-30' === $age ) {
			echo 'You age: more 30';
		}
	}

}
	lb_todo_4();
?>

<h2>Завдання 5</h2>
<p> 
	Спросите у пользователя его возраст с помощью select.
	Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.
</p>

<form action="#" method="POST">
	<label for="user_age_2">How old are your?</label><br>

	<select name="user_age_2">
		<option value="less-20">less 20</option>
		<option value="20-25">20-25</option>
		<option value="26-30">26-30</option>
		<option value="more-30">more 30</option>
	</select>

	<input type="submit" name="submit-radio-3" value="submit">
</form>

<?php
/**
 * Lb_todo_5
 *
 * @return void
 */
function lb_todo_5() {
	if ( ! isset( $_POST['submit-radio-3'] ) ) {
		return;
	}

	if ( isset( $_POST['user_age_2'] ) ) {
		$age = esc_html( $_POST['user_age_2'] );

		if ( 'less-20' === $age ) {
			echo 'You age: less 20';
		} elseif ( '20-25' === $age ) {
			echo 'You age: 20-25';
		} elseif ( '26-30' === $age ) {
			echo 'You age: 26-30';
		} elseif ( 'more-30' === $age ) {
			echo 'You age: more 30';
		}
	}

}
	lb_todo_5();
?>

<h2>Завдання 6</h2>
<p> 
	Спросите у пользователя с помощью мультиселекта, какие из языков он знает: html, css, php, javascript.
	Выведите на экран те языки, которые знает пользователь.
</p>

<form action="#" method="POST">
	<label for="languages_2">Select languages: </label><br>

	<select name="languages_2[]" multiple>
		<option value="html">html</option>
		<option value="css">css</option>
		<option value="php">php</option>
		<option value="javascript">javascript</option>
	</select>

	<input type="submit" name="submit-radio-4" value="submit">
</form>

<?php
/**
 * Lb_todo_6
 *
 * @return void
 */
function lb_todo_6() {
	if ( ! isset( $_POST['submit-radio-4'] ) ) {
		return;
	}

	if ( isset( $_POST['languages_2'] ) ) {
		echo 'Вы знаете: ' . esc_html( implode( ', ', $_POST['languages_2'] ) );
	}

}
	lb_todo_6();
?>

<h2>Завдання 7</h2>
<p> 
	Сделайте функцию, которая создает обычный текстовый инпут.
	Функция должна иметь следующие параметры: type, name, value.
</p>

<form action="#" method="POST">
	<?php echo lb_todo_7( 'text', 'simple_input', 'Your Name' ); ?>
	<input type="submit" value="submit">
</form>

<?php
/**
 * Lb_todo_7
 *
 * @return void
 */
function lb_todo_7( $type, $name, $value ) {
	return '<input type="' . $type . '" name="' . $name . '" value="' . $value . '">';
}

?>

<h2>Завдання 8</h2>
<p> 
	Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки.
</p>

<form action="#" method="POST">
	<?php echo lb_todo_8( 'text', 'simple_input_2', 'Your Name' ); ?>
	<input type="submit" value="submit">
</form>

<?php
/**
 * Lb_todo_8
 *
 * @return void
 */
function lb_todo_8( $type, $name, $value ) {
	if ( isset( $_POST[ $name ] ) ) {
		$value = $_POST[ $name ];
	}

	return '<input type="' . $type . '" name="' . $name . '" value="' . $value . '">';
}

?>

<h2>Завдання 9</h2>
<p> 
	Сделайте функцию, которая создает чекбокс.
	Если чекбокс не отмечен - функция должна отправлять 0
	(то есть нужно сделать hidden инпут), если отмечен - 1.
</p>

<form action="#" method="POST">
	<?php echo lb_todo_9( 'checkbox' ); ?>
</form>

<?php
/**
 * Lb_todo_9
 *
 * @return void
 */
function lb_todo_9( $name ) {
		return '
			<input type="hidden" name="' . $name . '" value="0">
			<input type="checkbox" name="' . $name . '" value="1">
		';
}

?>

<h2>Завдання 10</h2>
<p> 
	Напишите функцию, которая создает чекбокс и сохраняет его значение после отправки.
</p>

<form action="#" method="POST">
	<?php echo lb_todo_10( 'checkbox_2' ); ?>
</form>

<?php
/**
 * Lb_todo_10
 *
 * @return void
 */
function lb_todo_10( $name ) {
	if ( isset( $_POST[ $name ] ) && $_POST[ $name ] == 1 ) {
		$value = 'checked';
	} else {
		$value = '';
	}

	return '<input type="hidden" name="' . $name . '" value="0">
	<input type="checkbox" name="' . $name . '" value="1" ' . $value . '>';
}
?>
