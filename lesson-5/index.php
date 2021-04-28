<h2>Завдання 1</h2>
<p>
	Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
	С помощью цикла foreach выведите эти слова в столбик.
</p>

<?php
function lb_todo_1() {
	$arr = array( 'html', 'css', 'php', 'js', 'jq' );

	foreach ( $arr as $value ) {
		echo $value . '<br>';
	}
}

	lb_todo_1();
?>

<h2>Завдання 2</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5.
	С помощью цикла foreach найдите сумму элементов этого массива.
	Запишите ее в переменную $result.
</p>

<?php
function lb_todo_2() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = 0;

	foreach ( $arr as $value ) {
		$result += $value;
	}

	echo $result;
}

	lb_todo_2();
?>

<h2>Завдання 3</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5.
	С помощью цикла foreach найдите сумму квадратов элементов этого массива.
	Результат запишите переменную $result.
</p>

<?php
function lb_todo_3() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = 0;

	foreach ( $arr as $value ) {
		$result += pow( $value, 2 );
	}

	echo $result;
}

	lb_todo_3();
?>

<h2>Завдання 4</h2>
<p>
	Дан массив $arr.
	С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.
</p>

<?php
function lb_todo_4() {
	$arr = array(
		'green' => 'зеленый',
		'red'   => 'красный',
		'blue'  => 'голубой',
	);

	foreach ( $arr as $key => $value ) {
		echo $key . ' - ' . $value . '<br>';
	}
}

	lb_todo_4();
?>

<h2>Завдання 5</h2>
<p>
	Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'.
	С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов.'.
</p>

<?php
function lb_todo_5() {
	$arr = array(
		'Коля' => '200',
		'Вася' => '300',
		'Петя' => '400',
	);

	foreach ( $arr as $key => $value ) {
		echo $key . ' - зарплата ' . $value . ' долларов.' . '<br>';
	}
}

	lb_todo_5();
?>

<h2>Завдання 6</h2>
<p>
	Выведите столбец чисел от 1 до 100.
</p>

<?php
function lb_todo_6_1() {
	$i = 1;

	while ( $i <= 100 ) {
		echo $i . '<br>';

		$i++;
	}
}

function lb_todo_6_2() {
	for ( $i = 1; $i <= 100; $i++ ) {
		echo $i . '<br>';
	}
}

	lb_todo_6_1();
	lb_todo_6_2();
?>

<h2>Завдання 7</h2>
<p>
	Выведите столбец чисел от 11 до 33.
</p>

<?php
function lb_todo_7_1() {
	$i = 11;

	while ( $i <= 33 ) {
		echo $i . '<br>';

		$i++;
	}
}

function lb_todo_7_2() {
	for ( $i = 11; $i <= 33; $i++ ) {
		echo $i . '<br>';
	}
}

	lb_todo_7_1();
	lb_todo_7_2();
?>

<h2>Завдання 8</h2>
<p>
	Выведите столбец четных чисел в промежутке от 0 до 100.
</p>

<?php
function lb_todo_8_1() {
	$i = 0;

	while ( $i <= 100 ) {
		if ( 0 === ( $i % 2 ) ) {
			echo $i . '<br>';
		}

		$i++;
	}
}

function lb_todo_8_2() {
	for ( $i = 0; $i <= 100; $i++ ) {
		if ( 0 === ( $i % 2 ) ) {
			echo $i . '<br>';
		}
	}
}

	lb_todo_8_1();
	lb_todo_8_2();
?>

<h2>Завдання 9</h2>
<p>
	С помощью цикла найдите сумму чисел от 1 до 100.
</p>

<?php
function lb_todo_9_1() {
	$result = 0;
	$i      = 0;

	while ( $i <= 100 ) {
		$result += $i;

		$i++;
	}

	echo $result . '<br>';
}

function lb_todo_9_2() {
	$result = 0;

	for ( $i = 0; $i <= 100; $i++ ) {
		$result += $i;
	}

	echo $result . '<br>';
}

	lb_todo_9_1();
	lb_todo_9_2();
?>

<h2>Завдання 10</h2>
<p>
	Дан массив с элементами 2, 5, 9, 15, 0, 4.
	С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива,
	которые больше 3-х, но меньше 10.
</p>

<?php
function lb_todo_10() {
	$arr = array( 2, 5, 9, 15, 0, 4 );

	foreach ( $arr as $value ) {
		if ( 3 < $value && $value < 10 ) {
			echo $value . '<br>';
		}
	}
}

	lb_todo_10();
?>

<h2>Завдання 11</h2>
<p>
	Дан массив с числами.
	Числа могут быть положительными и отрицательными.
	Найдите сумму положительных элементов этого массива.
</p>

<?php
function lb_todo_11() {
	$arr    = array( 2, 5, -9, -15, 0, 4 );
	$result = 0;

	foreach ( $arr as $value ) {
		if ( 0 <= $value ) {
			$result += $value;
		}
	}

	echo $result;
}

	lb_todo_11();
?>

<h2>Завдання 12</h2>
<p>
	Дан массив с элементами 1, 2, 5, 9, 4, 13, 4, 10.
	С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением, равным 4.
	Если есть - выведите на экран 'Есть!' и выйдите из цикла. Если нет - ничего делать не надо.
</p>

<?php
function lb_todo_12() {
	$arr = array( 1, 2, 5, 9, 4, 13, 4, 10 );

	foreach ( $arr as $value ) {
		if ( 4 === $value ) {
			echo 'Есть!' . '<br>';

			break;
		}
	}
}

	lb_todo_12();
?>

<h2>Завдання 13</h2>
<p>
	Дан массив числами, например: ['10', '20', '30', '50', '235', '3000'].
	Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.
</p>

<?php
function lb_todo_13() {
	$arr = array( '10', '20', '30', '50', '235', '3000' );

	foreach ( $arr as $value ) {
		if ( '1' === $value[0] || '2' === $value[0] || '5' === $value[0] ) {
			echo $value . '<br>';
		}
	}
}

	lb_todo_13();
?>

<h2>Завдання 14</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
	С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'.
</p>

<?php
function lb_todo_14() {
	$arr    = array( 1, 2, 3, 4, 5, 6, 7, 8, 9 );
	$result = '-';

	foreach ( $arr as $value ) {
		$result .= $value . '-';
	}

	echo $result;
}

	lb_todo_14();
?>

<h2>Завдання 15</h2>
<p>
	Составьте массив дней недели.
	С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.
</p>

<?php
function lb_todo_15() {
	$arr = array( 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье' );

	foreach ( $arr as $value ) {
		if ( 'Суббота' === $value || 'Воскресенье' === $value ) {
			echo '<strong>' . $value . '</strong>' . '<br>';
		} else {
			echo $value . '<br>';
		}
	}
}

	lb_todo_15();
?>

<h2>Завдання 16</h2>
<p>
	Составьте массив дней недели.
	С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
	Текущий день должен храниться в переменной $day.
</p>

<?php
function lb_todo_16() {
	$arr = array( 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье' );
	$day = 'Вторник';

	foreach ( $arr as $value ) {
		if ( $day === $value ) {
			echo '<i>' . $value . '</i>' . '<br>';
		} else {
			echo $value . '<br>';
		}
	}
}

	lb_todo_16();
?>

<h2>Завдання 17</h2>
<p>
	С помощью цикла for заполните массив числами от 1 до 100.
	То есть у вас должен получится массив [1, 2, 3... 100].
</p>

<?php
function lb_todo_17() {
	$arr = array();

	for ( $i = 1; $i <= 100; $i++ ) {
		$arr[] += $i;
	}

	var_dump( $arr );
}

	lb_todo_17();
?>

<h2>Завдання 18</h2>
<p>
	Дан массив $arr.
	С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.
</p>

<?php
function lb_todo_18() {
	$arr = array(
		'green' => 'зеленый',
		'red'   => 'красный',
		'blue'  => 'голубой',
	);
	$en  = array();
	$ru  = array();

	foreach ( $arr as $key => $value ) {
		$en[] = $key;
		$ru[] = $value;
	}

	var_dump( $en );
	var_dump( $ru );

}

	lb_todo_18();
?>

<h2>Завдання 19</h2>
<p>
	Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
	Какое число получится?
	Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла).
	Решите задачу сначала через цикл while, а потом через цикл for.
</p>

<?php
function lb_todo_19_1() {
	$num = 1000;
	$i   = 0;

	while ( $num > 50 ) {
		$num /= 2;

		$i++;
	}

	echo $num . '<br>';
	echo $i . '<br>';

}

function lb_todo_19_2() {
	$num = 1000;

	for ( $i = 0; $num > 50; $i++ ) {
		$num /= 2;
	}

	echo $num . '<br>';
	echo $i . '<br>';

}

	lb_todo_19_1();
	lb_todo_19_2();
?>
