<h2>Завдання 1</h2>
<p>
	Дана строка 'php'. Сделайте из нее строку 'PHP'.
</p>

<?php
function lb_todo_1() {
	$str = 'php';

	echo strtoupper( $str );
}

	lb_todo_1();
?>

<h2>Завдання 2</h2>
<p>
	Дана строка 'PHP'. Сделайте из нее строку 'php'.
</p>

<?php
function lb_todo_2() {
	$str = 'PHP';

	echo strtolower( $str );
}

	lb_todo_2();
?>

<h2>Завдання 3</h2>
<p>
	Дана строка 'london'. Сделайте из нее строку 'London'.
</p>

<?php
function lb_todo_3() {
	$str = 'london';

	echo ucfirst( $str );
}

	lb_todo_3();
?>

<h2>Завдання 4</h2>
<p>
	Дана строка 'London'. Сделайте из нее строку 'london'.
</p>

<?php
function lb_todo_4() {
	$str = 'London';

	echo lcfirst( $str );
}

	lb_todo_4();
?>

<h2>Завдання 5</h2>
<p>
	Дана строка 'london is the capital of great britain'.
	Сделайте из нее строку 'London Is The Capital Of Great Britain'.
</p>

<?php
function lb_todo_5() {
	$str = 'london is the capital of great britain';

	echo ucwords( $str );
}

	lb_todo_5();
?>

<h2>Завдання 6</h2>
<p>
	Дана строка 'LONDON'. Сделайте из нее строку 'London'.
</p>

<?php
function lb_todo_6() {
	$str = 'LONDON';

	echo ucfirst( strtolower( $str ) );
}

	lb_todo_6();
?>

<h2>Завдання 7</h2>
<p>
	Дана строка 'html css php'. Найдите количество символов в этой строке.
</p>

<?php
function lb_todo_7() {
	$str = 'html css php';

	echo strlen( $str );
}

	lb_todo_7();
?>

<h2>Завдання 8</h2>
<p>
	Дана переменная $password, в которой хранится пароль пользователя.
	Если количество символов пароля больше 5-ти и меньше 10-ти,
	то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том,
	что нужно придумать другой пароль.
</p>

<?php
function lb_todo_8() {
	$password = 'asdfghj';

	if ( 5 < strlen( $password ) && strlen( $password ) < 10 ) {
		echo 'пароль подходит <br>';
	} else {
		echo 'нужно придумать другой пароль <br>';
	}
}

	lb_todo_8();
?>

<h2>Завдання 9</h2>
<p>
	Дана строка 'html css php'.
	Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
</p>

<?php
function lb_todo_9() {
	$str = 'html css php';

	echo substr( $str, 0, 4 ) . '<br>';
	echo substr( $str, 5, 3 ) . '<br>';
	echo substr( $str, 9, 3 ) . '<br>';
}

	lb_todo_9();
?>

<h2>Завдання 10</h2>
<p>
	Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
</p>

<?php
function lb_todo_10() {
	$str = 'html css php';

	echo substr( $str, -3, 3 ) . '<br>';
}

	lb_todo_10();
?>

<h2>Завдання 11</h2>
<p>
	Дана строка. Проверьте, что она начинается на 'http://'.
	Если это так, выведите 'да', если не так - 'нет'.
</p>

<?php
function lb_todo_11() {
	$str = 'http://test.ua';

	if ( 'http://' === substr( $str, 0, 7 ) ) {
		echo 'да <br>';
	} else {
		echo 'нет <br>';
	}
}

	lb_todo_11();
?>

<h2>Завдання 12</h2>
<p>
	Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'.
	Если это так, выведите 'да', если не так - 'нет'.
</p>

<?php
function lb_todo_12() {
	$str = 'https://test.ua';

	if ( 'http://' === substr( $str, 0, 7 ) || 'https://' === substr( $str, 0, 8 ) ) {
		echo 'да <br>';
	} else {
		echo 'нет <br>';
	}
}

	lb_todo_12();
?>

<h2>Завдання 13</h2>
<p>
	Дана строка. Проверьте, что она заканчивается на '.png'.
	Если это так, выведите 'да', если не так - 'нет'.
</p>

<?php
function lb_todo_13() {
	$str = 'asdfgfdujghfgdsfaddvfbgnhyjhdgsz.png';

	if ( '.png' === substr( $str, -4, 4 ) ) {
		echo 'да <br>';
	} else {
		echo 'нет <br>';
	}
}

	lb_todo_13();
?>

<h2>Завдання 14</h2>
<p>
	Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'.
	Если это так, выведите 'да', если не так - 'нет'.
</p>

<?php
function lb_todo_14() {
	$str = 'asdfgfdujghfgdsfaddvfbgnhyjhdgsz.jpg';

	if ( '.png' === substr( $str, -4, 4 ) || '.jpg' === substr( $str, -4, 4 ) ) {
		echo 'да <br>';
	} else {
		echo 'нет <br>';
	}
}

	lb_todo_14();
?>

<h2>Завдання 15</h2>
<p>
	Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов,
	добавьте троеточие в конец и выведите на экран.
	Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
</p>

<?php
function lb_todo_15() {
	$str = 'asdfgfdu jghfgd sfaddvfbgnhyjhdgsz';

	if ( 5 < strlen( $str ) ) {
		echo substr( $str, 0, 5 ) . '...';
	} else {
		echo $str;
	}
}

	lb_todo_15();
?>

<h2>Завдання 16</h2>
<p>
	Дана строка '31.12.2013'. Замените все точки на дефисы.
</p>

<?php
function lb_todo_16() {
	$str = '31.12.2013';

	echo str_replace( '.', '-', $str );
}

	lb_todo_16();
?>

<h2>Завдання 17</h2>
<p>
	Дана строка $str.
	Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
</p>

<?php
function lb_todo_17() {
	$str = 'asdvbbvcdcabascbbacabcb';

	echo str_replace( array( 'a', 'b', 'c' ), array( 1, 2, 3 ), $str );
}

	lb_todo_17();
?>

<h2>Завдання 18</h2>
<p>
	Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
	Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.
</p>

<?php
function lb_todo_18() {
	$str = '1a2b3c4b5d6e7f8g9h0';

	echo str_replace( array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 0 ), '', $str );
}

	lb_todo_18();
?>

<h2>Завдання 19</h2>
<p>
	Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
	Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).
</p>

<?php
function lb_todo_19() {
	$str = 'aaaabbbbcccccc';

	echo strtr(
		$str,
		array(
			'a' => '1',
			'b' => '2',
			'c' => '3',
		)
	) . '<br>';
	echo strtr( $str, 'abc', '123' ) . '<br>';
}

	lb_todo_19();
?>

<h2>Завдання 20</h2>
<p>
	Дана строка $str.
	Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
</p>

<?php
function lb_todo_20() {
	$str = 'abc abc abc';

	echo substr_replace( $str, '!!!', 2, 5 );
}

	lb_todo_20();
?>

<h2>Завдання 21</h2>
<p>
	Дана строка 'abc abc abc'.
	Определите позицию первой буквы 'b'.
</p>

<?php
function lb_todo_21() {
	$str = 'abc abc abc';

	echo strpos( $str, 'b' );
}

	lb_todo_21();
?>

<h2>Завдання 22</h2>
<p>
	Дана строка 'abc abc abc'.
	Определите позицию последней буквы 'b'.
</p>

<?php
function lb_todo_22() {
	$str = 'abc abc abc';

	echo strrpos( $str, 'b' );
}

	lb_todo_22();
?>

<h2>Завдання 23</h2>
<p>
	Дана строка 'abc abc abc'.
	Определите позицию первой найденной буквы 'b',
	если начать поиск не с начала строки, а с позиции 3.
</p>

<?php
function lb_todo_23() {
	$str = 'abc abc abc';

	echo strpos( $str, 'b', 3 );
}

	lb_todo_23();
?>

<h2>Завдання 24</h2>
<p>
	Дана строка 'aaa aaa aaa aaa aaa'.
	Определите позицию второго пробела.
</p>

<?php
function lb_todo_24() {
	$str = 'aaa aaa aaa aaa aaa';

	echo strpos( $str, ' ', 4 );
}

	lb_todo_24();
?>

<h2>Завдання 25</h2>
<p>
	Проверьте, что в строке есть две точки подряд.
	Если это так - выведите 'есть', если не так - 'нет'.
</p>

<?php
function lb_todo_25() {
	$str = '..aaa aaaaa aaa aaa';

	echo strpos( $str, '..' ) || 0 === strpos( $str, '..' ) ? 'есть' : 'нет';
}

	lb_todo_25();
?>

<h2>Завдання 26</h2>
<p>
	Проверьте, что строка начинается на 'http://'.
	Если это так - выведите 'да', если не так - 'нет'.
</p>

<?php
function lb_todo_26() {
	$str = 'http://test.ua';

	echo strpos( $str, 'http://' ) == 0 ? 'да' : 'нет';
}

	lb_todo_26();
?>

<h2>Завдання 27</h2>
<p>
	Дана строка 'html css php'.
	С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
</p>

<?php
function lb_todo_27() {
	$str = 'html css php';

	$arr = explode( ' ', $str );

	var_dump( $arr );
}

	lb_todo_27();
?>

<h2>Завдання 28</h2>
<p>
	Дан массив с элементами 'html', 'css', 'php'.
	С помощью функции implode создайте строку из этих элементов, разделенных запятыми.
</p>

<?php
function lb_todo_28() {
	$arr = array( 'html', 'css', 'php' );

	$str = implode( ' ', $arr );

	echo $str;
}

	lb_todo_28();
?>

<h2>Завдання 29</h2>
<p>
	В переменной $date лежит дата в формате '2013-12-31'.
	Преобразуйте эту дату в формат '31.12.2013'.
</p>

<?php
function lb_todo_29() {
	$date = '2013-12-31';

	$new_date = implode( '.', array_reverse( explode( '-', $date ) ) );

	echo $new_date;
}

	lb_todo_29();
?>

<h2>Завдання 30</h2>
<p>
	Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
</p>

<?php
function lb_todo_30() {
	$str = '1234567890';

	$arr = str_split( $str, 2 );

	var_dump( $arr );

}

	lb_todo_30();
?>

<h2>Завдання 31</h2>
<p>
	Дана строка '1234567890'.
	Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
</p>

<?php
function lb_todo_31() {
	$str = '1234567890';

	$arr = str_split( $str, 1 );

	var_dump( $arr );
}

	lb_todo_31();
?>

<h2>Завдання 32</h2>
<p>
	Дана строка '1234567890'.
	Сделайте из нее строку '12-34-56-78-90' не используя цикл.
</p>

<?php
function lb_todo_32() {
	$str = '1234567890';

	$new_str = implode( '-', str_split( $str, 2 ) );

	echo $new_str;
}

	lb_todo_32();
?>

<h2>Завдання 33</h2>
<p>
	Дана строка. Очистите ее от концевых пробелов.
</p>

<?php
function lb_todo_33() {
	$str = '     Я удалил пробели       ';

	echo trim( $str );
}

	lb_todo_33();
?>

<h2>Завдання 34</h2>
<p>
	Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
</p>

<?php
function lb_todo_34() {
	$str = '/php/';

	echo trim( $str, '/' );
}

	lb_todo_34();
?>

<h2>Завдання 35</h2>
<p>
	Дана строка 'слова слова слова.'.
	В конце этой строки может быть точка, а может и не быть.
	Сделайте так, чтобы в конце этой строки гарантировано стояла точка.
	То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать.
	Задачу решите через rtrim без всяких ифов.
</p>

<?php
function lb_todo_35() {
	$str = 'слова слова слова';

	echo rtrim( $str ) . '.';
}

	lb_todo_35();
?>

<h2>Завдання 36</h2>
<p>
	Дана строка '12345'. Сделайте из нее строку '54321'.
</p>

<?php
function lb_todo_36() {
	$str = '12345';

	echo strrev( $str );
}

	lb_todo_36();
?>

<h2>Завдання 37</h2>
<p>
	Проверьте, является ли слово палиндромом
	(одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).
</p>

<?php
function lb_todo_37() {
	$str = 'madam';

	echo strrev( $str ) === $str ? 'слово палиндромом !' : 'слово НЕ палиндромом!';
}

	lb_todo_37();
?>

<h2>Завдання 38</h2>
<p>
	Дана строка. Перемешайте символы этой строки в случайном порядке.
</p>

<?php
function lb_todo_38() {
	$str = 'word word word word ';

	echo str_shuffle( $str );
}

	lb_todo_38();
?>

<h2>Завдання 39</h2>
<p>
	Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись.
	Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.
</p>

<?php
function lb_todo_39() {
	$base = 'qwertyuiopasdfghjklzxcvbnm';
	$str  = substr( str_shuffle( $base ), 0, 6 );

	echo $str;

}

	lb_todo_39();
?>

<h2>Завдання 40</h2>
<p>
	Дана строка '12345678'. Сделайте из нее строку '12 345 678'.
</p>

<?php
function lb_todo_40() {
	$str = '12345678';

	echo number_format( $str, 0, '.', ' ' );
}

	lb_todo_40();
?>

<h2>Завдання 41</h2>
<p>
	Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
	Решите задачу с помощью одного цикла и функции str_repeat.
</p>

<?php
function lb_todo_41() {
	$str = 'x';
	$row = 9;

	for ( $i = 1; $i <= $row; $i++ ) {
		echo str_repeat( $str, $i ) . '<br>';
	}

}

	lb_todo_41();
?>

<h2>Завдання 42</h2>
<p>
	Нарисуйте пирамиду, как показано на рисунке.
	Решите задачу с помощью одного цикла и функции str_repeat.
</p>

<?php
function lb_todo_42() {
	$row = 9;

	for ( $i = 1; $i <= $row; $i++ ) {
		echo str_repeat( $i, $i ) . '<br>';
	}

}

	lb_todo_42();
?>

<h2>Завдання 43</h2>
<p>
	Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.
</p>

<?php
function lb_todo_43() {
	$str = 'html, <b>php</b>, js';

	echo strip_tags( $str );
}

	lb_todo_43();
?>

<h2>Завдання 44</h2>
<p>
	Дана строка $str. Удалите все теги из этой строки, кроме тегов <\b> и <\i>.
</p>

<?php
function lb_todo_44() {
	$str = '<mark>html</mark>, <b>php</b>, <i>js</i>';

	echo strip_tags( $str, '<b><i>' );
}

	lb_todo_44();
?>

<h2>Завдання 45</h2>
<p>
	Дана строка 'html, <b>php</b>, js'.
	Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <\b> в жирный.
</p>

<?php
function lb_todo_45() {
	$str = 'html, <b>php</b>, js';

	echo htmlspecialchars( $str );
}

	lb_todo_45();
?>

<h2>Завдання 46</h2>
<p>
	Узнайте код символов 'a', 'b', 'c', пробела.
</p>

<?php
function lb_todo_46() {
	echo 'a: ' . ord( 'a' ) . '<br>';
	echo 'b: ' . ord( 'b' ) . '<br>';
	echo 'c: ' . ord( 'c' ) . '<br>';
}

	lb_todo_46();
?>

<h2>Завдання 47</h2>
<p>
	Изучите таблицу ASCII.
	Определите границы, в которых располагаются буквы английского алфавита.
</p>

<?php
function lb_todo_47() {
	for ( $i = 65; $i <= 90; $i++ ) {
		echo 'Код символа ' . chr( $i ) . ' = ' . ord( chr( $i ) ) . '<br>';
	}

	for ( $i = 97; $i <= 122; $i++ ) {
		echo 'Код символа ' . chr( $i ) . ' = ' . ord( chr( $i ) ) . '<br>';
	}
}

	lb_todo_47();
?>

<h2>Завдання 48</h2>
<p>
	Выведите на экран символ с кодом 33.
</p>

<?php
function lb_todo_48() {
	echo chr( 33 );
}

	lb_todo_48();
?>

<h2>Завдання 49</h2>
<p>
	Запишите в переменную $str случайный символ - большую букву латинского алфавита. 

	Подсказка:
	с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.
</p>

<?php
function lb_todo_49() {
	$str = chr( mt_rand( 65, 90 ) );

	echo $str;
}

	lb_todo_49();
?>

<h2>Завдання 50</h2>
<p>
	Запишите в переменную $str случайную строку $len длиной,
	состоящую из маленьких букв латинского алфавита.

	Подсказка:
	воспользуйтесь циклом for или while.
</p>

<?php
function lb_todo_50() {
	$str = '';

	for ( $i = 97; $i <= 122; $i++ ) {
		$str .= chr( $i );
	}

	echo str_shuffle( $str );
}

	lb_todo_50();
?>

<h2>Завдання 51</h2>
<p>
	Дана буква английского алфавита. Узнайте, она маленькая или большая.
</p>

<?php
function lb_todo_51() {
	$symbol = 'a';

	if ( 65 <= ord( $symbol ) && ord( $symbol ) <= 90 ) {
		echo 'большая <br>';
	} elseif ( 97 <= ord( $symbol ) && ord( $symbol ) <= 122 ) {
		echo 'маленькая <br>';
	}
}

	lb_todo_51();
?>

<h2>Завдання 52</h2>
<p>
	Дана строка 'ab-cd-ef'.
	С помощью функции strchr выведите на экран строку '-cd-ef'.
</p>

<?php
function lb_todo_52() {
	$str = 'ab-cd-ef';

	echo strchr( $str, '-' );
}

	lb_todo_52();
?>

<h2>Завдання 53</h2>
<p>
	Дана строка 'ab-cd-ef'.
	С помощью функции strrchr выведите на экран строку '-ef'.
</p>

<?php
function lb_todo_53() {
	$str = 'ab-cd-ef';

	echo strrchr( $str, '-' );
}

	lb_todo_53();
?>

<h2>Завдання 54</h2>
<p>
	Дана строка 'ab--cd--ef'.
	С помощью функции strstr выведите на экран строку '--cd--ef'.
</p>

<?php
function lb_todo_54() {
	$str = 'ab--cd--ef';

	echo strchr( $str, '--' );
}

	lb_todo_54();
?>

<h2>Завдання 55</h2>
<p>
	Преобразуйте строку 'var_test_text' в 'varTestText'.
	Скрипт, конечно же, должен работать с любыми аналогичными строками.
</p>

<?php
function lb_todo_55( $str ) {
	echo lcfirst( str_replace( ' ', '', ucwords( implode( ' ', explode( '_', $str ) ) ) ) );
}

	lb_todo_55( 'var_test_text' );
?>

<h2>Завдання 56</h2>
<p>
	Дан массив с числами.
	Выведите на экран все числа, в которых есть цифра 3.
</p>

<?php
function lb_todo_56() {
	$arr = array( 1, 2, 3, 45, 18, 33, 43, 93, 11 );

	foreach ( $arr as $value ) {
		if ( strpos( $value, '3' ) !== false ) {
			echo $value . '<br>';
		}
	}
}

	lb_todo_56();
?>
