<h2>Завдання 1</h2>
<p> 
	Дан массив с числами.
	Проверьте, что в этом массиве есть число 5.
	Если есть - выведите 'да', а если нет - выведите 'нет'.
</p>

<?php
function lb_get_todo_1( $arr ) {
	$flag =  in_array( 5, $arr, true );
	$result = $flag ? 'Да' : 'Нет';
	
	return $result;
}

	echo lb_get_todo_1( array( 1, 2, 3, 4, 5, 6, 7, 8, 9 ) );
?>

<h2>Завдання 2</h2>
<p> 
	Дано число, например 31.
	Проверьте, что это число не делится ни на одно другое число кроме себя самого и единицы.
	То есть в нашем случае нужно проверить, что число 31 не делится на все числа от 2 до 30.
	Если число не делится - выведите 'нет', а если делится - выведите 'да'.
</p>

<?php
function lb_get_todo_2( $numb ) {
	if ( ! is_numeric( $numb ) ) {
		return;
	}

	$flag = false;

	for ( $i = 2; $i < $numb; $i++ ) {
		if ( 0 === $numb % $i ) {
			$flag = true;
			break;
		} else {
			$flag = false;
			break;
		}
	}

	$result = $flag ? 'Да' : 'Нет';

	return $result;
}

	echo lb_get_todo_2( 4 );
?>

<h2>Завдання 3</h2>
<p> 
	Дан массив с числами.
	Проверьте, есть ли в нем два одинаковых числа подряд.
	Если есть - выведите 'да', а если нет - выведите 'нет'.
</p>

<?php
function lb_get_todo_3( $arr ) {
	$count_arr_value = array_count_values( $arr );

	$flag = false;

	foreach ( $count_arr_value  as $value ) {
		if ( $value > 1 ) {
			$flag = true;
			break;
		}
	}

	$result = $flag ? 'Да' : 'Нет';

	return $result;

}

	echo lb_get_todo_3( array( 1, 2, 2, 3, 4, 5, 6, 7, 8, 9 ) );
?>
