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
	Сделайте функцию cut, которая первым параметром будет принимать строку,
	а вторым параметром - сколько первых символов оставить в этой строке.
	Второй параметр должен быть необязательным и по умолчанию принимать значение 10.
</p>

<?php
function lb_get_cut( $str, $count = 10 ) {
	return substr($str, 0, $count);
}

	echo lb_get_cut( 'якась стрічка' );
?>

<h2>Завдання 2</h2>
<p> 
	Дан массив с числами.
	Выведите последовательно его элементы используя рекурсию и не используя цикл.
</p>

<?php
function lb_todo_2( $arr ) {
	$i = 0;
	ar( $arr[ $i ] );
	$i++;

	if ( $i < count( $arr ) ) {
		lb_todo_2( $arr );	
	}
}

	lb_todo_2( array( range( 1, 9 ) ) );
?>

<h2>Завдання 3</h2>
<p> 
	Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры.
	И так, пока сумма не станет однозначным числом (9 и менее).
</p>

<?php
function lb_todo_3( $numb ) {
	$result = array_sum( str_split( (string) $numb ) );
	
	if( $result > 9 ) {
		return lb_todo_3( (int) $result );
	}else {
		return (int) $result;
	} 
}

	echo lb_todo_3( 1234 );
?>
