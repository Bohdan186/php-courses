<?php
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
?>

<h2>Завдання 1</h2>
<p> 
	Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10.
	Если это так - пусть функция возвращает true, если не так - false.
</p>

<?php
function lb_get_todo_1( $numb ) {
	return $numb > 10;
}

	echo lb_get_todo_1( 43 );
?>

<h2>Завдання 2</h2>
<p> 
	Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти.
	Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.
</p>

<?php
function lb_get_todo_2( $numbs ) {
	$result = array();

	foreach ( $numbs as $value ) {
		if ( 0 < $value && $value < 10 ) {
			$result[] = $value;
		};
	}

	return $result;
}

	ar( lb_get_todo_2( array( 1, 2, 3, 4, 55, -20 ) ) );
?>

<h2>Завдання 3</h2>
<p> 
	Сделайте функцию getDigitsSum (digit - это цифра),
	которая параметром принимает целое число и возвращает сумму его цифр.
</p>

<?php
function lb_getDigitsSum( $numb ) {
	$result = array_sum( str_split( (string) $numb, 1 ) );

	return $result;
}

	echo lb_getDigitsSum( 123 );
?>
<h2>Завдання 4</h2>
<p> 
	Найдите все года от 1 до 2021, сумма цифр которых равна 13.
	Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.
</p>

<?php
function lb_get_todo_4() {
	$result = array();

	for ( $i = 1; $i <= 2021; $i++ ) {
		if ( 13 === lb_getDigitsSum( $i ) ) {
			$result[] = $i;
		}
	}

	return $result;
}

	ar( lb_get_todo_4() );
?>

<h2>Завдання 5</h2>
<p> 
	Сделайте функцию isEven() (even - это четный),
	которая параметром принимает целое число и проверяет:четное оно или нет.
	Если четное - пусть функция возвращает true, если нечетное - false.
</p>

<?php
function lb_isEven( $numb ) {
	$result = 0 === $numb % 2;

	return $result;
}

	echo lb_isEven( 14 );
?>

<h2>Завдання 6</h2>
<p> 
	Дан массив с целыми числами.
	Создайте из него новый массив, где останутся лежать только четные из этих чисел.
	Для этого используйте вспомогательную функцию isEven из предыдущей задачи.
</p>

<?php
function lb_get_todo_6( $arr ) {
	$even_arr = array();

	foreach ( $arr as $value ) {
		if ( lb_isEven( $value ) ) {
			$even_arr[] = $value;
		}
	}

	return $even_arr;
}

	ar( lb_get_todo_6( array( 1, 2, 3, 4, 5, 6, 7, 8, 9 ) ) );
?>

<h2>Завдання 7</h2>
<p> 
	Сделайте функцию getDivisors,которая параметром принимает число
	и возвращает массив его делителей (чисел, на которое делится данное число).
</p>

<?php
function lb_getDivisors( $numb ) {
	$result = array();

	for ( $i = 1; $i < $numb; $i++ ) {
		if ( 0 === $numb % $i ) {
			$result[] = $i;
		}
	}

	return $result;
}

	ar( lb_getDivisors( 10 ) );
?>

<h2>Завдання 8</h2>
<p> 
	Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей.
	Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.
</p>

<?php
function lb_getCommonDivisors( $numb1, $numb2 ) {
	$arr_1 = lb_getDivisors( $numb1 );
	$arr_2 = lb_getDivisors( $numb2 );

	$result = array_unique( array_merge( $arr_1, $arr_2 ) );

	return $result;
}

	ar( lb_getCommonDivisors( 10, 20 ) );
?>
