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
	Заполните массив следующим образом:
	в первый элемент запишите 'x', во второй 'xx', в третий 'xxx' и так далее.
</p>

<?php
function lb_todo_1() {
	$count_el = 5;
	$arr      = array();

	for ( $i = 1; $i <= $count_el; $i++ ) {
		$arr[] = array_fill( 0, $i, 'x' );
	}

	ar( $arr );
}

	echo lb_todo_1();
?>

<h2>Завдання 2</h2>
<p> 
	С помощью двух вложенных циклов заполните массив следующим образом:
	в первый элемент запишите '1', во второй '22', в третий '333' и так далее.
</p>

<?php
function lb_todo_2() {
	$count_el = 5;
	$arr      = array();

	for ( $i = 0; $i <= $count_el; $i++ ) {
		for ( $j = 0; $j < $i; $j++ ) {
			$arr[ $i - 1 ] .= $i;
		}
	}

	ar( $arr );
}

	echo lb_todo_2();
?>

<h2>Завдання 3</h2>
<p> 
	Сделайте функцию arrayFill, которая будет заполнять массив заданными значениями.
	Первым параметром функция принимает значение, которым заполнять массив,
	а вторым - сколько элементов должно быть в массиве.
	Пример: arrayFill('x', 5) сделает массив ['x', 'x', 'x', 'x', 'x'].
</p>

<?php
function lb_todo_3( $sep, $count ) {
	$arr = array();

	for ( $i = 0; $i < $count; $i++ ) {
		$arr[ $i ] = $sep;
	}

	ar( $arr );
}

	echo lb_todo_3( 'x', 5 );
?>
<h2>Завдання 4</h2>
<p> 
	Дан массив с числами.
	Узнайте сколько элементов с начала массива надо сложить,
	чтобы в сумме получилось больше 10-ти.
	Считайте, что в массиве есть нужное количество элементов.
</p>

<?php
function lb_todo_4() {
	$arr  = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
	$summ = 0;
	$res  = 0;

	foreach ( $arr as $value ) {
		if ( 10 > $summ ) {
			$summ += $value;
			$res++;
		} elseif ( 10 < $summ ) {
			break;
		}
	}

	echo $res;
}

	echo lb_todo_4();
?>

<h2>Завдання 5</h2>
<p> 
	Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]].
	Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.
</p>

<?php
function lb_todo_5() {
	$arr  = array( array( 1, 2, 3 ), array( 4, 5 ), array( 6 ) );
	$summ = 0;

	foreach ( $arr as $el ) {
		$summ += array_sum( $el );
	}

	echo $summ;
}

	echo lb_todo_5();
?>

<h2>Завдання 6</h2>
<p> 
	Дан трехмерный массив с числами, например [[[1, 2], [3, 4]], [[5, 6], [7, 8]]].
	Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.
	</p>

<?php
function lb_todo_6() {
	$arr = array( array( array( 1, 2 ), array( 3, 4 ), array( 5, 6 ), array( 7, 8 ) ) );

	$summ = 0;

	foreach ( $arr as $el ) {
		foreach ( $el as $el2 ) {
			$summ += array_sum( $el2 );
		}
	}

	echo $summ;
}

	echo lb_todo_6();
?>

<h2>Завдання 7</h2>
<p> 
	С помощью двух циклов создайте массив [[1, 2, 3], [4, 5, 6], [7, 8, 9]].
</p>

<?php
function lb_todo_7() {
	$arr = array();

	for ( $i = 0; $i < 3; $i++ ) {
		for ( $j = 0; $j < 3; $j++ ) {
			$arr[ $i ] .= $j;
		}
	}

	ar( $arr );
}

	// echo lb_todo_7();
?>
