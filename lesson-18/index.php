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
	Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.
</p>

<?php
function lb_get_todo_1( $str, $translite_to = 'eng' ) {
	$result = '';

	$ukr = array(
		'а',
		'б',
		'в',
		'г',
		'д',
		'е',
		'є',
		'ж',
		'з',
		'і',
		'ї',
		'й',
		'к',
		'л',
		'м',
		'н',
		'о',
		'п',
		'р',
		'с',
		'т',
		'у',
		'ф',
		'х',
		'ц',
		'ч',
		'ш',
		'щ',
		'и',
		'ь',
		'ю',
		'я',
		'А',
		'Б',
		'В',
		'Г',
		'Д',
		'Е',
		'Є',
		'Ж',
		'З',
		'И',
		'Ї',
		'Й',
		'К',
		'Л',
		'М',
		'Н',
		'О',
		'П',
		'Р',
		'С',
		'Т',
		'У',
		'Ф',
		'Х',
		'Ц',
		'Ч',
		'Ш',
		'Щ',
		'И',
		'Ь',
		'Ю',
		'Я',
		' ',
		"'",
	);

	$eng = array(
		'a',
		'b',
		'v',
		'g',
		'd',
		'e',
		'je',
		'zh',
		'z',
		'i',
		'ji',
		'j',
		'k',
		'l',
		'm',
		'n',
		'o',
		'p',
		'r',
		's',
		't',
		'u',
		'f',
		'kh',
		'ts',
		'ch',
		'sh',
		'sch',
		'y',
		"'",
		'yu',
		'ya',
		'A',
		'B',
		'V',
		'G',
		'D',
		'E',
		'Je',
		'Zh',
		'Z',
		'I',
		'Ji',
		'J',
		'K',
		'L',
		'M',
		'N',
		'O',
		'P',
		'R',
		'S',
		'T',
		'U',
		'F',
		'Kh',
		'Ts',
		'Ch',
		'Sh',
		'Sch',
		'Y',
		"'",
		'Yu',
		'Ya',
		' ',
		'j',
	);

	if ( 'eng' === $translite_to ) {
		$result = str_replace( $ukr, $eng, $str );

		return $result;
	} elseif ( 'ukr' === $translite_to ) {
		$result = str_replace( $eng, $ukr, $str );

		return $result;
	}
}

	echo lb_get_todo_1( 'Якийсь текст на українській' );
?>

<h2>Завдання 2</h2>
<p> 
	Сделайте функцию, которая возвращает множественное или единственное число существительного.
	Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок.
	Функция первым параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два,
	три, четыре и для чисел, больших четырех, например, func(3, 'яблоко', 'яблока', 'яблок').
</p>

<?php
function lb_get_todo_2( $numb, $str1, $str2, $str3 ) {
	switch ( $numb ) {
		case 1:
			return $numb . ' ' . $str1;

		case ( 2 || 3 || 4 ):
			return $numb . ' ' . $str2;

		case ( $numb >= 4 ):
			return $numb . ' ' . $str3;
	}
}

	echo lb_get_todo_2( 1, 'яблоко', 'яблока', 'яблок' );
?>

<h2>Завдання 3</h2>
<p> 
	Найдите все счастливые билеты.
	Счастливый билет - это билет, в котором сумма первых трех цифр его номера равна сумме вторых трех цифр его номера.
</p>

<?php
function lb_get_todo_3( $count ) {
	if ( strlen( $count ) < 6 ) {
		return;
	}

	$result = array();

	for ( $i = 100000; $i < $count; $i++ ) {

		$first_3_numbs = substr( (string) $i, 0, 3 );
		$last_3_numbs  = substr( (string) $i, 3, 3 );

		$first_3_numbs_summ = array_sum( str_split( $first_3_numbs, 1 ) );
		$last_3_numbs_summ  = array_sum( str_split( $last_3_numbs, 1 ) );

		if ( $first_3_numbs_summ === $last_3_numbs_summ ) {
			$result[] = $i;
		}
	}

	return $result;

}

	ar( lb_get_todo_3( 101000 ) );
?>

<h2>Завдання 4</h2>
<p> 
	Дружественные числа - два различных числа, для которых сумма всех собственных делителей первого числа равна
	второму числу и наоборот,
	сумма всех собственных делителей второго числа равна первому числу.

	Например, 220 и 284. Делители для 220 это 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 и 110,
	сумма делителей равна 284.
	Делители для 284 это 1, 2, 4, 71 и 142, их сумма равна 220.

	Задача: найдите все пары дружественных чисел в промежутке от 1 до 10000.
	Для этого сделайте вспомогательную функцию, которая находит все делители числа и возвращает их в виде массива.
	Также сделайте функцию, которая параметром принимает массив, а возвращает его сумму.
</p>

<?php
function lb_get_divisors( $numb ) {
	if ( $numb < 1 ) {
		return;
	}

	$result = array();

	for ( $i = 1; $i < $numb; $i++ ) {
		if ( 0 === $numb % $i ) {
			$result[] = $i;
		}
	}

	return $result;
}

function lb_get_array_summ( $arr ) {
	$result = 0;

	foreach ( $arr as $value ) {
		$result += $value;
	}

	return $result;
}

function lb_get_todo_4() {
	$result = array();

	for ( $i = 2; $i < 10; $i++ ) {

		for ( $j = 0; $j <= lb_get_array_summ( lb_get_divisors( $i ) ); $j++ ) {

			if ( lb_get_array_summ( lb_get_divisors( $i ) ) === $j ) {
				$result[] = $i;
			}
		}
	}
}
	// ar( lb_get_todo_4() );
?>
