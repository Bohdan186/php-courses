<?php
function esc_html( $data ) {
	$str = htmlspecialchars( trim( $data ) );

	return $str;
}
?>

<h2>Завдання 1</h2>
<p> 
	Выведите текущее время в формате timestamp.
</p>

<?php
function lb_todo_1() {
	echo time();
}

	lb_todo_1();
?>

<h2>Завдання 2</h2>
<p> 
	Выведите 1 марта 2025 года в формате timestamp.
</p>

<?php
function lb_todo_2() {
	echo mktime( 0, 0, 0, 8, 1, 2025 );
}

	lb_todo_2();
?>

<h2>Завдання 3</h2>
<p> 
	Выведите 31 декабря текущего года в формате timestamp.
	Скрипт должен работать независимо от года, в котором он запущен.
</p>

<?php
function lb_todo_3() {
	echo mktime( 0, 0, 0, 12, 31, 2021 );
}

	lb_todo_3();
?>

<h2>Завдання 4</h2>
<p> 
	Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года
	до настоящего момента времени.
</p>

<?php
function lb_todo_4() {
	echo mktime( 13, 12, 59, 8, 15, 2000 );
}

	lb_todo_4();
?>

<h2>Завдання 5</h2>
<p> 
	Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени.
</p>

<?php
function lb_todo_5() {
	$result = ( time() - mktime( 7, 23, 48, 4, 29, 2021 ) ) / 60 / 60;

	echo round( $result );
}

	lb_todo_5();
?>

<h2>Завдання 6</h2>
<p> 
	Выведите на экран текущий год, месяц, день, час, минуту, секунду.
</p>

<?php
function lb_todo_6() {
	echo date( 'Y-m-d H:i:s' );
}

	lb_todo_6();
?>

<h2>Завдання 7</h2>
<p> 
	Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.
</p>

<?php
function lb_todo_7() {
	echo date( 'Y-m-d' ) . '<br>';
	echo date( 'd.m.Y' ) . '<br>';
	echo date( 'y.m.d' ) . '<br>';
	echo date( 'H-i-s' ) . '<br>';
}

	lb_todo_7();
?>

<h2>Завдання 8</h2>
<p> 
	С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'.
</p>

<?php
function lb_todo_8() {
	echo date( 'd.m.Y', mktime( 0, 0, 0, 2, 12, 2025 ) );
}

	lb_todo_8();
?>

<h2>Завдання 9</h2>
<p> 
	Создайте массив дней недели $week.
	Выведите на экран название текущего дня недели с помощью массива $week и функции date.
	Узнайте какой день недели был 06.06.2006, в ваш день рождения.
</p>

<?php
function lb_todo_9() {
	$week = array( 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' );

	echo $week[ date( 'w' ) ] . '<br>';
	echo $week[ date( 'w', mktime( 0, 0, 0, 06, 06, 2006 ) ) ] . '<br>';
	echo $week[ date( 'w', mktime( 0, 0, 0, 06, 20, 1999 ) ) ] . '<br>';
}

	lb_todo_9();
?>

<h2>Завдання 10</h2>
<p> 
	Создайте массив месяцев $month.
	Выведите на экран название текущего месяца с помощью массива $month и функции date.
</p>

<?php
function lb_todo_10() {
	$month = array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );

	echo $month[ date( 'n' ) - 1 ] . '<br>';
}

	lb_todo_10();
?>

<h2>Завдання 11</h2>
<p> 
	Найдите количество дней в текущем месяце.
	Скрипт должен работать независимо от месяца, в котором он запущен.
</p>

<?php
function lb_todo_11() {
	echo date( 't' );
}

	lb_todo_11();
?>

<h2>Завдання 12</h2>
<p> 
	Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год.
</p>

<form action="#" method="GET">
	<input type="text" name="year">
	<input type="submit" name="btn-1">
</form>

<?php
function lb_todo_12() {
	if ( ! isset( $_GET['btn-1'] ) ) {
		return;
	}

	$year = esc_html( $_GET['year'] );

	if ( ! is_numeric( $year ) ) {
		echo 'Введите Год';
	} else {
		if ( date( 'L', mktime( 0, 0, 0, 1, 1, $year ) ) ) {
			echo 'Етот год Високосный' . '<br>';
		} else {
			echo 'Етот год Невисокосный' . '<br>';
		}
	}
}

	lb_todo_12();
?>

<h2>Завдання 13</h2>
<p> 
	Сделайте форму, которая спрашивает дату в формате '31.12.2025'.
	С помощью функций mktime и explode переведите эту дату в формат timestamp.
	Узнайте день недели (словом) за введенную дату.
</p>

<form action="#" method="GET">
	<input type="text" name="date2" placeholder="31.12.2025">
	<input type="submit" name="btn-2">
</form>

<?php
function lb_todo_13() {
	if ( ! isset( $_GET['btn-2'] ) ) {
		return;
	}

	$week  = array( 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' );
	$date2 = esc_html( $_GET['date2'] );

	if ( empty( $date2 ) ) {
		echo 'Введите дату';
	} else {
		$arr            = explode( '.', $date2 );
		$date_in_mktime = mktime( 0, 0, 0, $arr[1], $arr[0], $arr[2] );

		echo $week[ date( 'w', $date_in_mktime ) ];
	}
}

	lb_todo_13();
?>

<h2>Завдання 14</h2>
<p> 
	Сделайте форму, которая спрашивает дату в формате '2025-12-31'.
	С помощью функций mktime и explode переведите эту дату в формат timestamp.
	Узнайте месяц (словом) за введенную дату.
</p>

<form action="#" method="GET">
	<input type="text" name="date3" placeholder="2025-12-31">
	<input type="submit" name="btn-3">
</form>

<?php
function lb_todo_14() {
	if ( ! isset( $_GET['btn-3'] ) ) {
		return;
	}

	$month = array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );
	$date3 = esc_html( $_GET['date3'] );

	if ( empty( $date3 ) ) {
		echo 'Введите дату';
	} else {
		$arr            = explode( '-', $date3 );
		$date_in_mktime = mktime( 0, 0, 0, $arr[1], $arr[2], $arr[0] );

		echo $month[ date( 'n', $date_in_mktime ) - 1 ];
	}
}

	lb_todo_14();
?>

<h2>Завдання 15</h2>
<p> 
	Сделайте форму, которая спрашивает две даты в формате '2025-12-31'.
	Первую дату запишите в переменную $date1, а вторую в $date2.
	Сравните, какая из введенных дат больше. Выведите ее на экран.
</p>

<form action="#" method="GET">
	<input type="text" name="date4_1" placeholder="2025-12-31">
	<input type="text" name="date4_2" placeholder="2025-12-31">
	<input type="submit" name="btn-4">
</form>

<?php
function lb_todo_15() {
	if ( ! isset( $_GET['btn-4'] ) ) {
		return;
	}

	$date1 = esc_html( $_GET['date4_1'] );
	$date2 = esc_html( $_GET['date4_2'] );

	$arr1 = explode( '-', $date1 );
	$arr2 = explode( '-', $date2 );

	$date1_in_timestamp = mktime( 0, 0, 0, (int) $arr1[1], (int) $arr1[2], (int) $arr1[0] );
	$date2_in_timestamp = mktime( 0, 0, 0, (int) $arr2[1], (int) $arr2[2], (int) $arr2[0] );

	if ( $date1_in_timestamp > $date2_in_timestamp ) {
		echo $date1 . ' > ' . $date2;
	} elseif ( $date1_in_timestamp < $date2_in_timestamp ) {
		echo $date1 . ' < ' . $date2;
	}
}

	lb_todo_15();
?>

<h2>Завдання 16</h2>
<p> 
	Дана дата в формате '2025-12-31'.
	С помощью функции strtotime и функции date преобразуйте ее в формат '31-12-2025'.
</p>

<form action="#" method="GET">
	<input type="text" name="date5" placeholder="2025-12-31">
	<input type="submit" name="btn-5">
</form>

<?php
function lb_todo_16() {
	if ( ! isset( $_GET['btn-5'] ) ) {
		return;
	}

	$date = esc_html( $_GET['date5'] );

	echo date( 'd-m-Y', strtotime( $date ) );
}

	lb_todo_16();
?>

<h2>Завдання 17</h2>
<p> 
	Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'.
	С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025'.
</p>

<form action="#" method="GET">
	<input type="text" name="date6" placeholder="2025-12-31T12:13:59">
	<input type="submit" name="btn-6">
</form>

<?php
function lb_todo_17() {
	if ( ! isset( $_GET['btn-6'] ) ) {
		return;
	}

	$date = esc_html( $_GET['date6'] );

	echo date( 'H:i:s d-m-Y', strtotime( $date ) );
}

	lb_todo_17();
?>

<h2>Завдання 18</h2>
<p> 
	В переменной $date лежит дата в формате '2025-12-31'.
	Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.
</p>

<?php
function lb_todo_18() {
	$date = '2025-12-31';

	$obj_date = date_create( $date );
	date_modify( $obj_date, '2 days' );
	echo date_format( $obj_date, 'd.m.Y' ) . '<br>';

	date_modify( $obj_date, '3 days 1 month' );
	echo date_format( $obj_date, 'd.m.Y' ) . '<br>';

	date_modify( $obj_date, '-3 days' );
	echo date_format( $obj_date, 'd.m.Y' ) . '<br>';
}

	lb_todo_18();
?>

<h2>Завдання 19</h2>
<p> 
	Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году.
</p>

<?php
function lb_todo_19() {
	echo date( 'L' ) ? 366 - date( 'z' ) : 365 - date( 'z' );
}

	lb_todo_19();
?>

<h2>Завдання 20</h2>
<p> 
	Сделайте форму с одним полем ввода, в которое пользователь вводит год.
	Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат.
</p>

<form action="#" method="GET">
	<input type="text" name="date7" placeholder="2025">
	<input type="submit" name="btn-7">
</form>

<?php
function lb_todo_20() {
	if ( ! empty( $_GET['date7'] ) && is_numeric( $_GET['date7'] ) ) {
		$year       = esc_html( $_GET['date7'] );
		$friday_arr = array();

		for ( $month = 1; $month <= 12; $month++ ) {
			$count_days = date( 't', mktime( 0, 0, 0, $month, 1, $year ) );

			for ( $day = 1; $day <= $count_days; $day++ ) {
				$this_date = mktime( 0, 0, 0, $month, $day, $year );

				if ( '13' === date( 'j', $this_date ) && '5' === date( 'w', $this_date ) ) {
					$friday_arr[] = date( 'd.m.Y', $this_date );
				}
			}
		}

		echo '<pre>';
		print_r( $friday_arr );
		echo '</pre>';
	}
}

	lb_todo_20();
?>

<h2>Завдання 21</h2>
<p> 
	Узнайте какой день недели был 100 дней назад.
</p>

<?php
function lb_todo_21() {
	$week = array( 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' );
	$date = date_create( date( 'Y-m-d' ) );

	date_modify( $date, '-100 day' );

	echo $week[ date( 'w', strtotime( date_format( $date, 'd.m.Y' ) ) ) ];
}

	lb_todo_21();
?>
