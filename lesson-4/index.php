<h2>Завдання 1</h2>
<p> 
	Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 1, 0, -3.
</p>

<?php
function lb_todo_1( $a ) {
	echo ( 0 === $a ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_1( 1 );
	lb_todo_1( 0 );
	lb_todo_1( -3 );
?>

<h2>Завдання 2</h2>
<p> 
	Если переменная $a больше нуля, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 1, 0, -3.
</p>

<?php
function lb_todo_2( $a ) {
	echo ( 0 < $a ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_2( 1 );
	lb_todo_2( 0 );
	lb_todo_2( -3 );
?>

<h2>Завдання 3</h2>
<p> 
	Если переменная $a меньше нуля, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 1, 0, -3.
</p>

<?php
function lb_todo_3( $a ) {
	echo ( 0 > $a ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_3( 1 );
	lb_todo_3( 0 );
	lb_todo_3( -3 );
?>

<h2>Завдання 4</h2>
<p> 
	Если переменная $a больше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 1, 0, -3.
</p>

<?php
function lb_todo_4( $a ) {
	echo ( 0 <= $a ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_4( 1 );
	lb_todo_4( 0 );
	lb_todo_4( -3 );
?>

<h2>Завдання 5</h2>
<p> 
	Если переменная $a меньше или равна нулю, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 1, 0, -3.
</p>

<?php
function lb_todo_5( $a ) {
	echo ( 0 >= $a ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_5( 1 );
	lb_todo_5( 0 );
	lb_todo_5( -3 );
?>

<h2>Завдання 6</h2>
<p> 
	Если переменная $a не равна нулю, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 1, 0, -3.
</p>

<?php
function lb_todo_6( $a ) {
	echo ( 0 != $a ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_6( 1 );
	lb_todo_6( 0 );
	lb_todo_6( -3 );
?>

<h2>Завдання 7</h2>
<p> 
	Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 'test', 'тест', 3.
</p>

<?php
function lb_todo_7( $a ) {
	echo ( 'test' === $a ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_7( 'test' );
	lb_todo_7( 'тест' );
	lb_todo_7( 3 );
?>

<h2>Завдання 8</h2>
<p> 
	Если переменная $a равна '1' и по значению и по типу, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном '1', 1, 3.
</p>

<?php
function lb_todo_8( $a ) {
	echo ( '1' === $a ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_8( '1' );
	lb_todo_8( 1 );
	lb_todo_8( 3 );
?>

<h2>Завдання 9</h2>
<p> 
	Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.
</p>

<?php
function lb_todo_9( $a ) {
	echo ( empty( $a ) ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_9( 1 );
	lb_todo_9( 3 );
	lb_todo_9( -3 );
	lb_todo_9( 0 );
	lb_todo_9( null );
	lb_todo_9( true );
	lb_todo_9( '' );
	lb_todo_9( '0' );
?>

<h2>Завдання 10</h2>
<p> 
	Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'.
</p>

<?php
function lb_todo_10( $a ) {
	echo ( ! empty( $a ) ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_10( 1 );
	lb_todo_10( 3 );
	lb_todo_10( -3 );
	lb_todo_10( 0 );
	lb_todo_10( null );
	lb_todo_10( true );
	lb_todo_10( '' );
	lb_todo_10( '0' );
?>

<h2>Завдання 11</h2>
<p> 
	Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 3 и null.
</p>

<?php
function lb_todo_11( $a ) {
	echo ( isset( $a ) ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_11( 3 );
	lb_todo_11( null );
?>

<h2>Завдання 12</h2>
<p> 
	Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'.
</p>

<?php
function lb_todo_12( $a ) {
	echo ( ! isset( $a ) ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_12( 3 );
	lb_todo_12( null );
?>

<h2>Завдання 13</h2>
<p> 
	Если переменная $var равна true, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $var, равном true, false.
	Напишите два варианта скрипта - с короткой записью и с длинной.
</p>

<?php
function lb_todo_13( $var ) {
	echo ( true === $var ? 'Верно' : 'Неверно' ) . '<br>';
}

function lb_todo_13_2( $var ) {
	if ( true === $var ) {
		echo 'Верно' . '<br>';
	} else {
		echo 'Неверно' . '<br>';
	}
}

	lb_todo_13( true );
	lb_todo_13( false );
	lb_todo_13_2( true );
	lb_todo_13_2( false );
?>

<h2>Завдання 14</h2>
<p> 
	Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $var, равном true, false.
	Напишите два варианта скрипта - с короткой записью и с длинной.
</p>

<?php
function lb_todo_14( $var ) {
	echo ( true !== $var ? 'Верно' : 'Неверно' ) . '<br>';
}

function lb_todo_14_2( $var ) {
	if ( true !== $var ) {
		echo 'Верно' . '<br>';
	} else {
		echo 'Неверно' . '<br>';
	}
}

	lb_todo_14( true );
	lb_todo_14( false );
	lb_todo_14_2( true );
	lb_todo_14_2( false );
?>

<h2>Завдання 15</h2>
<p> 
	Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе выведите 'Неверно'.
	Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
</p>

<?php
function lb_todo_15( $a ) {
	echo ( 0 < $a && $a < 5 ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_15( 5 );
	lb_todo_15( 0 );
	lb_todo_15( -3 );
	lb_todo_15( 2 );
?>

<h2>Завдання 16</h2>
<p> 
	Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе поделите ее на 10.
	Выведите новое значение переменной на экран.
	Проверьте работу скрипта при $a, равном 5, 0, -3, 2.
</p>

<?php
function lb_todo_16( $a ) {
	echo ( 0 === $a || 2 === $a ? $a + 7 : $a / 10 ) . '<br>';
}

	lb_todo_16( 5 );
	lb_todo_16( 0 );
	lb_todo_16( -3 );
	lb_todo_16( 2 );
?>

<h2>Завдання 17</h2>
<p> 
	Если переменная $a равна или меньше 1, а переменная $b больше или равна 3,
	то выведите сумму этих переменных, иначе выведите их разность ( результат вычитания ).
	Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.
</p>

<?php
function lb_todo_17( $a, $b ) {
	echo ( 1 >= $a && 3 <= $b ? $a + $b : $a - $b ) . '<br>';
}

	lb_todo_17( 1, 3 );
	lb_todo_17( 0, 6 );
	lb_todo_17( 3, 5 );
?>

<h2>Завдання 18</h2>
<p> 
	Если переменная $a больше 2-х и меньше 11-ти,
	или переменная $b больше или равна 6-ти и меньше 14-ти,
	то выведите 'Верно', в противном случае выведите 'Неверно'.
</p>

<?php
function lb_todo_18( $a, $b ) {
	echo ( ( 2 < $a && $a < 11 ) || ( 6 <= $b && $b < 14 ) ? 'Верно' : 'Неверно' ) . '<br>';
}

	lb_todo_18( 1, 3 );
	lb_todo_18( 0, 6 );
	lb_todo_18( 3, 5 );
?>

<h2>Завдання 19</h2>
<p> 
	Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
	Если она имеет значение '1', то в переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее.
	Решите задачу через switch-case.
</p>

<?php
function lb_todo_19( $num ) {
	switch ( $num ) {
		case 1:
			echo 'зима' . '<br>';
			break;
		case 2:
			echo 'весна' . '<br>';
			break;
		case 3:
			echo 'лето' . '<br>';
			break;
		case 4:
			echo 'осінь' . '<br>';
			break;
	}
}

	lb_todo_19( 1 );
	lb_todo_19( 3 );
?>

<h2>Завдання 20</h2>
<p> 
	В переменной $day лежит какое-то число из интервала от 1 до 31.
	Определите в какую декаду месяца попадает это число ( в первую, вторую или третью ).
</p>

<?php
function lb_todo_20( $day ) {
	if ( 1 <= $day && $day <= 31 ) {
		if ( 1 <= $day && $day < 10 ) {
			echo 'первая декада месяца' . '<br>';
		} elseif ( 10 <= $day && $day < 20 ) {
			echo 'вторая декада месяца' . '<br>';
		} elseif ( 20 <= $day && $day < 31 ) {
			echo 'третья декада месяца' . '<br>';
		}
	}
}

	lb_todo_20( 1 );
	lb_todo_20( 21 );
?>

<h2>Завдання 21</h2>
<p> 
	В переменной $month лежит какое-то число из интервала от 1 до 12.
	Определите в какую пору года попадает этот месяц ( зима, лето, весна, осень ).
</p>

<?php
function lb_todo_21( $month ) {
	if ( 1 <= $month && $month <= 12 ) {
		if ( 12 === $month || 1 === $month || 2 === $month ) {
			echo 'ето зима' . '<br>';
		} elseif ( 3 === $month || 4 === $month || 5 === $month ) {
			echo 'ето весна' . '<br>';
		} elseif ( 6 === $month || 7 === $month || 8 === $month ) {
			echo 'ето лето' . '<br>';
		} elseif ( 9 === $month || 10 === $month || 11 === $month ) {
			echo 'ето осень' . '<br>';
		}
	}
}

	lb_todo_21( 1 );
	lb_todo_21( 6 );
?>

<h2>Завдання 22</h2>
<p> 
	В переменной $year хранится год. Определите, является ли он високосным (в таком году есть 29 февраля).
	Год будет високосным в двух случаях: либо он делится на 4, но при этом не делится на 100, либо делится на 400.
	Так, годы 1700, 1800 и 1900 не являются високосными, так как они делятся на 100 и не делятся на 400.
	Годы 1600 и 2000 - високосные, так как они делятся на 400.
</p>

<?php
function lb_todo_22( $year ) {
	if ( ( 0 === ( $year % 4 ) && 0 !== ( $year % 100 ) ) || 0 === ( $year % 400 ) ) {
		echo 'Етот год Високосный' . '<br>';
	} else {
		echo 'Етот год Невисокосный' . '<br>';
	}
}

	lb_todo_22( 1700 );
	lb_todo_22( 1800 );
	lb_todo_22( 1600 );
	lb_todo_22( 2000 );
?>

<h2>Завдання 23</h2>
<p> 
	Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'.
	Если это так - выведите 'да', в противном случае выведите 'нет'.
</p>

<?php
function lb_todo_23( $str ) {
	echo ( 'a' === $str[0] ? 'Да' : 'Нет' ) . '<br>';
}

	lb_todo_23( 'abcde' );
	lb_todo_23( 'bacde' );
?>

<h2>Завдання 24</h2>
<p> 
	Дана строка с цифрами, например, '12345'.
	Проверьте, что первым символом этой строки является цифра 1, 2 или 3.
	Если это так - выведите 'да', в противном случае выведите 'нет'.
</p>

<?php
function lb_todo_24( $str ) {
	if ( '1' === $str[0] || '2' === $str[0] || '3' === $str[0] ) {
		echo 'Да' . '<br>';
	} else {
		echo 'Нет' . '<br>';
	}
}

	lb_todo_24( '12345' );
	lb_todo_24( '22345' );
	lb_todo_24( '32345' );
	lb_todo_24( '412345' );
?>

<h2>Завдання 25</h2>
<p> 
	Дана строка из 3-х цифр. Найдите сумму этих цифр.
	То есть сложите как числа первый символ строки, второй и третий.
</p>

<?php
function lb_todo_25( $str ) {
	$result = 0;

	for ( $i = 0; $i < strlen( $str ); $i++ ) {
		$result += $str[ $i ];
	}

	echo $result;
}

	lb_todo_25( '12345' );
?>

<h2>Завдання 26</h2>
<p> 
	Дана строка из 6-ти цифр.
	Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр.
	Если это так - выведите 'да', в противном случае выведите 'нет'.
</p>

<?php
function lb_todo_26( $str ) {
	if ( 6 === strlen( $str ) ) {
		$str_first = $str[0] + $str[1] + $str[2];
		$str_last  = $str[3] + $str[4] + $str[5];

		if ( $str_first === $str_last ) {
			echo 'Да' . '<br>';
		} else {
			echo 'Нет' . '<br>';
		}
	}
}

	lb_todo_26( '123321' );
?>
