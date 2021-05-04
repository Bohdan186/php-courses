<?php
/**
 * Description of what this module (or file) is doing.
 *
 * @package lessons-33
 */

ob_start();

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
	По заходу на страницу запишите в куку с именем test текст '123'.
	Затем обновите страницу и выведите содержимое этой куки на экран.
</p>

<?php
/**
 * Lb_todo_1
 *
 * @return void
 */
function lb_todo_1() {
	if ( ! isset( $_COOKIE['test'] ) ) {
		setcookie( 'test', '123' );
	} else {
		echo $_COOKIE['test'];
	}
}

lb_todo_1();
?>

<h2>Завдання 2</h2>
<p> 
	Удалите куку с именем test.
</p>

<?php
/**
 * Lb_todo_2
 *
 * @return void
 */
function lb_todo_2() {
	setcookie( 'test', '', time() );
}

lb_todo_2();
?>

<h2>Завдання 3</h2>
<p> 
	Сделайте счетчик посещения сайта посетителем.
	Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.
</p>

<?php
/**
 * Lb_todo_3
 *
 * @return void
 */
function lb_todo_3() {
	if ( ! isset( $_COOKIE['counter'] ) ) {
		$counter = 0;
		echo 'Вы посетили наш сайт ' . $counter . ' раз!';
	} else {
		$counter = ++$_COOKIE['counter'];
		echo 'Вы посетили наш сайт ' . $counter . ' раз!';
	}

	setcookie( 'counter', $counter );
}

	lb_todo_3();
?>
<!-- 
<h2>Завдання 4</h2>
<p> 
	Спросите дату рождения пользователя.
	При следующем заходе на сайт напишите сколько дней осталось до его дня рождения.
	Если сегодня день рождения пользователя - поздравьте его!
</p>

<form action="#" method="get">
	<input type="text" name='birthday' placeholder='birthday'>
	<input type="submit" value="Submit" name="birthday-btn">
</form>

<?php
/**
 * Lb_todo_4
 *
 * @return void
 */
function lb_todo_4() {
	if ( ! isset( $_GET['birthday-btn'] ) ) {
		return;
	}

	if ( ! isset( $_COOKIE['birthday_in_cookie'] ) ) {
		setcookie( 'birthday_in_cookie', strtotime( esc_html( $_GET['birthday'] ) ) );
	} else {
		$birthday = mktime( 0, 0, 0, date( 'm', $_COOKIE['birthday_in_cookie'] ), date( 'j', $_COOKIE['birthday_in_cookie'] ), date( 'Y', time() ) );

		echo date( 'd', $result ) . ' дней осталось до вашего дня рождения';
	}

}

	lb_todo_4();
?>
 -->
