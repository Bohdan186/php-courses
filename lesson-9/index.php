<h2>Завдання 1</h2>
<p>
	Дан массив с числами.
	Найдите среднее арифметическое его элементов
	(сумма элементов делить на количество) не используя цикл.
</p>

<?php
function lb_todo_1() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo array_sum( $arr ) / count( $arr );
}

	lb_todo_1();
?>

<h2>Завдання 2</h2>
<p>
	Найдите сумму чисел от 1 до 100 не используя цикл.
</p>

<?php
function lb_todo_2() {
	echo array_sum( range( 1, 100 ) );
}

	lb_todo_2();
?>

<h2>Завдання 3</h2>
<p>
	Выведите столбец чисел от 1 до 100 не используя цикл.
</p>

<?php
function lb_todo_3() {
	$arr = range( 1, 100 );
	echo implode( '<br>', $arr );
}

	lb_todo_3();
?>

<h2>Завдання 4</h2>
<p>
	Заполните массив 10-ю иксами не используя цикл.
</p>

<?php
function lb_todo_4() {
	$arr = array_fill( 0, 10, 'x' );

	var_dump( $arr );
}

	lb_todo_4();
?>

<h2>Завдання 5</h2>
<p>
	Заполните массив 10-ю случайными числами от 1 до 10 так,
	чтобы они не повторялись. Цикл использовать нельзя.
</p>

<?php
function lb_todo_5() {
	$arr = range( 1, 10 );

	shuffle( $arr );

	var_dump( $arr );
}

	lb_todo_5();
?>

<h2>Завдання 6</h2>
<p>
	Найдите факториал заданного числа не используя цикл.
	Факториал - это произведение чисел от 1 до заданного числа включительно. 
</p>

<?php
function lb_todo_6( $numb ) {
	$numb_arr = range( 1, $numb );

	$result = array_product( $numb_arr );

	echo $result;
}

	lb_todo_6( 3 );
?>

<h2>Завдання 7</h2>
<p>
	Дано число. Найдите сумму цифр этого числа не используя цикл.
</p>

<?php
function lb_todo_7() {
	$num = 456;

	$arr = str_split( $num, 1 );

	echo array_sum( $arr );
}

	lb_todo_7();
?>

<h2>Завдання 8</h2>
<p>
	Дана строка. Сделайте заглавным последний символ этой строки не используя цикл.
</p>

<?php
function lb_todo_8( $str ) {
	echo strrev( ucfirst( strrev( $str ) ) );
}

	lb_todo_8( 'string' );
?>

<h2>Завдання 9</h2>
<p>
	Дан массив с числами. Получите из него массив с квадратными корнями этих чисел не используя цикл.
</p>

<?php
function lb_todo_9() {
	$arr = array( 1, 2, 3, 4, 5 );

	$new_arr = array_map( 'sqrt', $arr );

	var_dump( $new_arr );
}

	lb_todo_9();
?>

<h2>Завдання 10</h2>
<p>
	Заполните массив числами от 1 до 26 так
	чтобы ключами этих чисел были буквы английского алфавита:
	['a'=>1, 'b'=>2...]. Сделайте это не используя цикл.
</p>

<?php
function lb_todo_10() {
	$keys   = range( 'a', 'z' );
	$elems  = range( 1, 26 );
	$result = array_combine( $keys, $elems );

	var_dump( $result );
}

	lb_todo_10();
?>

<h2>Завдання 11</h2>
<p>
	Дана строка с числами '1234567890'.
	Найдите сумму пар чисел: 12+34+56+78+90.
	Решите задачу, не используя цикл
</p>

<?php
function lb_todo_11() {
	$str = '1234567890';

	echo array_sum( str_split( $str, 2 ) );
}

	lb_todo_11();
?>
