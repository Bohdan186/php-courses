<h2>Завдання 1</h2>
<p>
	Дан массив $arr. Подсчитайте количество элементов этого массива.
</p>

<?php
function lb_todo_1() {
	$arr = array( 'a', 'b', 'c', 'd', 'e' );

	echo count( $arr );
}

	lb_todo_1();
?>

<h2>Завдання 2</h2>
<p>
	Дан массив $arr. С помощью функции count выведите последний элемент данного массива.
</p>

<?php
function lb_todo_2() {
	$arr = array( 'a', 'b', 'c', 'd', 'e' );

	echo $arr[ count( $arr ) - 1 ];
}

	lb_todo_2();
?>

<h2>Завдання 3</h2>
<p>
	Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.
</p>

<?php
function lb_todo_3() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo in_array( 3, $arr ) ? 'есть' : 'нет';

}

	lb_todo_3();
?>

<h2>Завдання 4</h2>
<p>
	Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.
</p>

<?php
function lb_todo_4() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo array_sum( $arr );
}

	lb_todo_4();
?>

<h2>Завдання 5</h2>
<p>
Дан массив [1, 2, 3, 4, 5]. Найдите произведение (умножение) элементов данного массива.
</p>

<?php
function lb_todo_5() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo array_product( $arr );
}

	lb_todo_5();
?>

<h2>Завдання 6</h2>
<p>
	Дан массив $arr.
	С помощью функций array_sum и count найдите среднее арифметическое элементов
	(сумма элементов делить на их количество) данного массива.
</p>

<?php
function lb_todo_6() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo array_sum( $arr ) / count( $arr );
}

	lb_todo_6();
?>

<h2>Завдання 7</h2>
<p>
	Создайте массив, заполненный числами от 1 до 100.
</p>

<?php
function lb_todo_7() {
	$arr = range( 1, 100 );

	var_dump( $arr );
}

	lb_todo_7();
?>

<h2>Завдання 8</h2>
<p>
	Создайте массив, заполненный буквами от 'a' до 'z'.
</p>

<?php
function lb_todo_8() {
	$arr = range( 'a', 'z' );

	var_dump( $arr );
}

	lb_todo_8();
?>

<h2>Завдання 9</h2>
<p>
	Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.
</p>

<?php
function lb_todo_9() {
	$arr = range( 1, 9 );

	echo implode( '-', $arr );
}

	lb_todo_9();
?>

<h2>Завдання 10</h2>
<p>
	Найдите сумму чисел от 1 до 100 не используя цикл.
</p>

<?php
function lb_todo_10() {
	echo array_sum( range( 1, 100 ) );
}

	lb_todo_10();
?>

<h2>Завдання 11</h2>
<p>
	Найдите произведение чисел от 1 до 10 не используя цикл.
</p>

<?php
function lb_todo_11() {
	echo array_product( range( 1, 10 ) );
}

	lb_todo_11();
?>

<h2>Завдання 12</h2>
<p>
	Даны два массива: первый с элементами 1, 2, 3,
	второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.
	</p>

<?php
function lb_todo_12() {
	$arr_1 = array( 1, 2, 3 );
	$arr_2 = array( 'a', 'b', 'c' );

	$result = array_merge( $arr_1, $arr_2 );

	var_dump( $result );
}

	lb_todo_12();
?>

<h2>Завдання 13</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5.
	С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4.
</p>

<?php
function lb_todo_13() {
	$arr = array( 1, 2, 3, 4, 5 );

	var_dump( array_slice( $arr, 1, 3 ) );
}

	lb_todo_13();
?>

<h2>Завдання 14</h2>
<p>
	Дан массив [1, 2, 3, 4, 5].
	С помощью функции array_splice преобразуйте массив в [1, 4, 5].
</p>

<?php
function lb_todo_14() {
	$arr = array( 1, 2, 3, 4, 5 );

	array_splice( $arr, 1, 2 );

	var_dump( $arr );
}

	lb_todo_14();
?>

<h2>Завдання 15</h2>
<p>
	Дан массив [1, 2, 3, 4, 5].
	С помощью функции array_splice запишите в новый массив элементы [2, 3, 4].
</p>

<?php
function lb_todo_15() {
	$arr = array( 1, 2, 3, 4, 5 );

	$new_array = array_splice( $arr, 1, 3 );

	var_dump( $new_array );
}

	lb_todo_15();
?>

<h2>Завдання 16</h2>
<p>
	Дан массив [1, 2, 3, 4, 5].
	С помощью функции array_splice сделайте из него массив [1, 2, 3, 'a', 'b', 'c', 4, 5].
</p>

<?php
function lb_todo_16() {
	$arr = array( 1, 2, 3, 4, 5 );

	array_splice( $arr, 3, 0, array( 'a', 'b', 'c' ) );

	var_dump( $arr );
}

	lb_todo_16();
?>

<h2>Завдання 17</h2>
<p>
	Дан массив [1, 2, 3, 4, 5].
	С помощью функции array_splice сделайте из него массив [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e'].
</p>

<?php
function lb_todo_17() {
	$arr = array( 1, 2, 3, 4, 5 );

	array_splice( $arr, 1, 0, array( 'a', 'b' ) );
	array_splice( $arr, 6, 0, array( 'c' ) );
	array_splice( $arr, 8, 0, array( 'e' ) );

	var_dump( $arr );
}

	lb_todo_17();
?>

<h2>Завдання 18</h2>
<p>
	Дан массив 'a'=>1, 'b'=>2, 'c'=>3'.
	Запишите в массив $keys ключи из этого массива, а в $values – значения.
</p>

<?php
function lb_todo_18() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);

	$keys = array_keys( $arr );

	var_dump( $keys );
}

	lb_todo_18();
?>


<h2>Завдання 19</h2>
<p>
	Даны два массива: ['a', 'b', 'c'] и [1, 2, 3].
	Создайте с их помощью массив 'a'=>1, 'b'=>2, 'c'=>3'.
</p>

<?php
function lb_todo_19() {
	$arr_1 = array( 'a', 'b', 'c' );
	$arr_2 = array( 1, 2, 3 );

	$result = array_combine( $arr_1, $arr_2 );

	var_dump( $result );
}

	lb_todo_19();
?>

<h2>Завдання 20</h2>
<p>
	Дан массив 'a'=>1, 'b'=>2, 'c'=>3.
	Поменяйте в нем местами ключи и значения.
</p>

<?php
function lb_todo_20() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);

	var_dump( array_flip( $arr ) );
}

	lb_todo_20();
?>

<h2>Завдання 21</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5.
	Сделайте из него массив с элементами 5, 4, 3, 2, 1.
</p>

<?php
function lb_todo_21() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo array_reverse( $arr );
}

	lb_todo_21();
?>

<h2>Завдання 22</h2>
<p>
	Дан массив ['a', '-', 'b', '-', 'c', '-', 'd'].
	Найдите позицию первого элемента '-'.
</p>

<?php
function lb_todo_22() {
	$arr = array( 'a', '-', 'b', '-', 'c', '-', 'd' );

	echo array_search( '-', $arr, true );
}

	lb_todo_22();
?>

<h2>Завдання 23</h2>
<p>
	Дан массив ['a', '-', 'b', '-', 'c', '-', 'd'].
	Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.
</p>

<?php
function lb_todo_23() {
	$arr = array( 'a', '-', 'b', '-', 'c', '-', 'd' );

	array_splice( $arr, array_search( '-', $arr, true ), 1 );

	var_dump( $arr );
}

	lb_todo_23();
?>

<h2>Завдання 24</h2>
<p>
	Дан массив ['a', 'b', 'c', 'd', 'e'].
	Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.
</p>

<?php
function lb_todo_24() {
	$arr = array( 'a', 'b', 'c', 'd', 'e' );

	var_dump( array_replace( $arr, array( 0 => '!!' ) ) );
}

	lb_todo_24();
?>

<h2>Завдання 25</h2>
<p>
	Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'.
	Попробуйте на нем различные типы сортировок.
</p>

<?php
function lb_todo_25() {
	$arr = array(
		'3' => 'a',
		'1' => 'c',
		'2' => 'e',
		'4' => 'b',
	);

	echo 'sort <br> <br>';
	sort( $arr );
	var_dump( $arr );
	echo '<br> <br>';

	echo 'rsort <br> <br>';
	rsort( $arr );
	var_dump( $arr );
	echo '<br> <br>';

	echo 'asort <br> <br>';
	asort( $arr );
	var_dump( $arr );
	echo '<br> <br>';

	echo 'arsort <br> <br>';
	arsort( $arr );
	var_dump( $arr );
	echo '<br> <br>';

	echo 'ksort <br> <br>';
	ksort( $arr );
	var_dump( $arr );
	echo '<br> <br>';

	echo 'krsort <br> <br>';
	krsort( $arr );
	var_dump( $arr );
	echo '<br> <br>';

	// usort( $arr );
	// uasort( $arr );
	// uksort( $arr );

	echo 'natsort <br> <br>';
	natsort( $arr );
	var_dump( $arr );
	echo '<br> <br>';
}

	lb_todo_25();
?>

<h2>Завдання 26</h2>
<p>
	Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3.
	Выведите на экран случайный ключ из данного массива.
</p>

<?php
function lb_todo_26() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);

	echo array_rand( $arr );
}

	lb_todo_26();
?>

<h2>Завдання 27</h2>
<p>
	Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3.
	Выведите на экран случайный элемент данного массива.
</p>

<?php
function lb_todo_27() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);

	$key = array_rand( $arr );

	echo $arr[ $key ];
}

	lb_todo_27();
?>

<h2>Завдання 28</h2>
<p>
	Дан массив $arr. Перемешайте его элементы в случайном порядке.
</p>

<?php
function lb_todo_28() {
	$arr = array( 1, 2, 3, 4, 5 );

	shuffle( $arr );

	var_dump( $arr );
}

	lb_todo_28();
?>

<h2>Завдання 29</h2>
<p>
	Заполните массив числами от 1 до 25 с помощью range,
	а затем перемешайте его элементы в случайном порядке.
</p>

<?php
function lb_todo_29() {
	$arr = range( 1, 25 );

	shuffle( $arr );

	var_dump( $arr );
}

	lb_todo_29();
?>

<h2>Завдання 30</h2>
<p>
	Создайте массив, заполненный буквами от 'a' до 'z' так,
	чтобы буквы шли в случайном порядке и не повторялись.
</p>

<?php
function lb_todo_30() {
	$arr = range( 'a', 'z' );

	shuffle( $arr );

	var_dump( $arr );
}

	lb_todo_30();
?>

<h2>Завдання 31</h2>
<p>
	Сделайте строку длиной 6 символов,
	состоящую из маленьких английских букв, расположенных в случайном порядке.
	Буквы не должны повторяться.
</p>

<?php
function lb_todo_31() {
	$arr = range( 'a', 'z' );

	shuffle( $arr );

	echo substr( implode( '', $arr ), 0, 6 );
}

	lb_todo_31();
?>

<h2>Завдання 32</h2>
<p>
	Дан массив с элементами 'a', 'b', 'c', 'b', 'a'.
	Удалите из него повторяющиеся элементы.
</p>

<?php
function lb_todo_32() {
	$arr = array( 'a', 'b', 'c', 'b', 'a' );

	var_dump( array_unique( $arr ) );
}

	lb_todo_32();
?>

<h2>Завдання 33</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5.
	Выведите на экран его первый и последний элемент, причем так, чтобы в исходном массиве они исчезли.
</p>

<?php
function lb_todo_33() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo array_shift( $arr ) . '<br>';
	echo array_pop( $arr ) . '<br>';
	var_dump( $arr );
}

	lb_todo_33();
?>

<h2>Завдання 34</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5.
	Добавьте ему в начало элемент 0, а в конец - элемент 6.
</p>

<?php
function lb_todo_34() {
	$arr = array( 1, 2, 3, 4, 5 );

	array_unshift( $arr, 0 ) . '<br>';
	array_push( $arr, 6 ) . '<br>';
	var_dump( $arr );
}

	lb_todo_34();
?>

<h2>Завдання 35</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8.
	С помощью цикла и функций array_shift и array_pop выведите на экран его элементы в следующем порядке: 18273645. 
</p>

<?php
function lb_todo_35() {
	$arr = array( 1, 2, 3, 4, 5, 6, 7, 8 );

	for ( $i = 0; $i <= count( $arr ) + 1; $i++ ) {
		echo array_shift( $arr ) . '<br>';
		echo array_pop( $arr ) . '<br>';
	}
}

	lb_todo_35();
?>

<h2>Завдання 36</h2>
<p>
	Дан массив с элементами 'a', 'b', 'c'. Сделайте из него массив с элементами 'a', 'b', 'c', '-', '-', '-'.
</p>

<?php
function lb_todo_36() {
	$arr = array( 'a', 'b', 'c' );

	var_dump( array_pad( $arr, 6, '-' ) );
}

	lb_todo_36();
?>

<h2>Завдання 37</h2>
<p>
	Заполните массив 10-ю буквами 'x'.
</p>

<?php
function lb_todo_37() {
	var_dump( array_fill( 0, 10, 'x' ) );
}

	lb_todo_37();
?>

<h2>Завдання 38</h2>
<p>
	Создайте массив, заполненный целыми числами от 1 до 20.
	С помощью функции array_chunk разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7, 8] и т.д.).
</p>

<?php
function lb_todo_38() {
	$arr = range( 1, 20 );

	$result = array_chunk( $arr, 4 );

	var_dump( $result );
}

	lb_todo_38();
?>

<h2>Завдання 39</h2>
<p>
	Дан массив с элементами 'a', 'b', 'c', 'b', 'a'.
	Подсчитайте сколько раз встречается каждая из букв.
</p>

<?php
function lb_todo_39() {
	$arr = array( 'a', 'b', 'c', 'b', 'a' );

	$array_count = array_count_values( $arr );

	foreach ( $array_count as $key => $value ) {
		echo $key . ' = ' . $value . '<br>';
	}
}

	lb_todo_39();
?>

<h2>Завдання 40</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5.
	Создайте новый массив, в котором будут лежать квадратные корни данных элементов.
</p>

<?php
function lb_todo_40() {
	$arr = array( 1, 2, 3, 4, 5 );

	$result = array_map( 'sqrt', $arr );
	var_dump( $result );
}

	lb_todo_40();
?>

<h2>Завдання 41</h2>
<p>
	Дан массив с элементами '<b>php</b>', '<i>html</i>'.
	Создайте новый массив, в котором из элементов будут удалены теги.
</p>

<?php
function lb_todo_41() {
	$arr = array( '<b>php</b>', '<i>html</i>' );

	var_dump( array_map( 'strip_tags', $arr ) );
}

	lb_todo_41();
?>

<h2>Завдання 42</h2>
<p>
	Дан массив с элементами ' a ', ' b ', ' с '.
	Создайте новый массив, в котором будут данные элементы без концевых пробелов.
</p>

<?php
function lb_todo_42() {
	$arr = array( ' a ', ' b ', ' с ' );

	var_dump( array_map( 'trim', $arr ) );
}

	lb_todo_42();
?>

<h2>Завдання 43</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7.
	Запишите в новый массив элементы, которые есть и в том, и в другом массиве.
</p>

<?php
function lb_todo_43() {
	$arr_1 = array( 1, 2, 3, 4, 5 );
	$arr_2 = array( 3, 4, 5, 6, 7 );

	var_dump( array_intersect( $arr_1, $arr_2 ) );
}

	lb_todo_43();
?>

<h2>Завдання 44</h2>
<p>
	Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7.
	Запишите в новый массив элементы, которые не присутствуют в обоих массивах одновременно.
</p>

<?php
function lb_todo_44() {
	$arr_1 = array( 1, 2, 3, 4, 5 );
	$arr_2 = array( 3, 4, 5, 6, 7 );

	var_dump( array_diff( $arr_1, $arr_2 ) );
}

	lb_todo_44();
?>

<h2>Завдання 45</h2>
<p>
	Дана строка '1234567890'.
	Найдите сумму цифр из этой строки не используя цикл.
</p>

<?php
function lb_todo_45() {
	$str = '1234567890';

	echo array_sum( str_split( $str, 1 ) );
}

	lb_todo_45();
?>

<h2>Завдання 46</h2>
<p>
	Создайте массив ['a'=>1, 'b'=2... 'z'=>26] не используя цикл.
</p>

<?php
function lb_todo_46() {
	$key_arr   = range( 'a', 'z' );
	$value_arr = range( 1, 26 );
	$result    = array_combine( $key_arr, $value_arr );

	var_dump( $result );
}

	lb_todo_46();
?>

<h2>Завдання 47</h2>
<p>
	Создайте массив вида [[1, 2, 3], [4, 5, 6], [7, 8, 9]] не используя цикл.
</p>

<?php
function lb_todo_47() {
	$arr = array_chunk( range( 1, 9 ), 3 );

	var_dump( $arr );
}

	lb_todo_47();
?>

<h2>Завдання 48</h2>
<p>
	Дан массив с элементами 1, 2, 4, 5, 5.
	Найдите второй по величине элемент. В нашем случае это будет 4.
</p>

<?php
function lb_todo_48() {
	$arr = array( 1, 2, 4, 5, 5 );
	
	array_unique($arr);
	rsort( $arr );

	echo $arr[1];
}

	lb_todo_48();
?>
