<h2>Завдання 1</h2>
<p> 
	С помощью цикла for сформируйте строку '123456789' и запишите ее в переменную $str.
</p>

<?php
function lb_todo_1() {
	$str = '';

	for ( $i = 1; $i < 10; $i++ ) {
		$str .= $i;
	}

	echo $str;
}

	echo lb_todo_1();
?>

<h2>Завдання 2</h2>
<p> 
	С помощью цикла for сформируйте строку '987654321' и запишите ее в переменную $str.
</p>

<?php
function lb_todo_2() {
	$str = '';

	for ( $i = 9; $i > 0; $i-- ) {
		$str .= $i;
	}

	echo $str;
}

	echo lb_todo_2();
?>

<h2>Завдання 3</h2>
<p> 
	С помощью цикла for сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str.
</p>

<?php
function lb_todo_3() {
	$str = '-';

	for ( $i = 1; $i < 10; $i++ ) {
		$str .= $i . '-';
	}

	echo $str;
}

	echo lb_todo_3();
?>
<h2>Завдання 4</h2>
<p> 
	Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5:
</p>

<?php
function lb_todo_4() {
	$str = 'x';
	$row = 20;

	for ( $i = 1; $i <= $row; $i++ ) {
		echo str_repeat( $str, $i ) . '<br>';
	}
}

	echo lb_todo_4();
?>

<h2>Завдання 5</h2>
<p> 
	С помощью двух вложенных циклов нарисуйте следующую пирамидку:
</p>

<?php
function lb_todo_5() {
	$row = 9;

	for ( $i = 1; $i <= $row; $i++ ) {
		for ( $j = 0; $j < $i; $j++ ) {
			echo $i;
		}
		echo '<br>';
	}
}

	echo lb_todo_5();
?>

<h2>Завдання 6</h2>
<p> 
	Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for:
</p>

<?php
function lb_todo_6() {
	$str = 'x';
	$row = 5;

	$j = 2;

	for ( $i = 1; $i <= $row; $i++ ) {
		echo str_repeat( $str, $j ) . '<br>';
		$j += 2;
	}
}

	echo lb_todo_6();
?>
