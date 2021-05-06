<?php
/**
 * Tasks for basic working with SQL databases in PHP
 *
 * @package lessons-36
 */

/**
 * Ar
 *
 * The function is intended for output of arrays.
 *
 * @param  mixed $data - Accepts the mass to be output.
 * @param  bool  $production - Takes a Boolean value. If the "True" parameter then the output of the array will be hidden,
 *                             to view it you will need to add "?x" to the url. Default parameter = "FALSE".
 */
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

/**
 * Esc_html
 *
 * Shields all threatening characters.
 *
 * @param  string $str - The tape to be shielded.
 *
 * @return statement
 */
function esc_html( $str ) {
	return htmlspecialchars( trim( $str ) );
}

$config_1 = array(
	'dms'      => 'mysql',
	'host'     => 'localhost',
	'dbname'   => 'lb_database',
	'user'     => 'root',
	'password' => 'root',
);

/**
 * Connect_db
 * Returns an instance of the PDO class.
 *
 * @param  array $config - Accepts an array with settings for connection to a database.
 * 
 * @return void
 */
function connect_db( $config ) {
	$dsn = $config['dms'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'];

	return new PDO( $dsn, $config['user'], $config['password'] );
}

/**
 * Lb_get_data
 * 
 * The function outputs data from the database using the "ar" function.
 * 
 * @param  array $config - array with settings for connection to a database.
 * @param  string $sql - query to the database.
 * @param  array $values -  optional parameter array of variable values (default empty array).
 * @param  string $type_values - optional parameter type of variables passed by the third parameter (default empty string).
 */
function lb_get_data( $config, $sql, $values = [], $type_values = '' ) {
	$pdo    = connect_db( $config );

	$result = $pdo->prepare( $sql );

	if(isset($values) ) {
		$j = 1;

		foreach( $values as $item) {
			$result->bindValue($j, $item, $type_values);
	
			$j++;
		}
	}
	
	$result->execute();

	ar( $result->fetchAll( PDO::FETCH_ASSOC ) );
}

?>

<h2>Завдання 1</h2>
<p> 
	Из таблицы workers достаньте первые 6 записей.
</p>

<?php
	lb_get_data( $config_1 , 'SELECT * FROM workers WHERE id>0 LIMIT ?', array( 6 ), PDO::PARAM_INT);
?>

<h2>Завдання 2</h2>
<p> 
	Из таблицы workers достаньте записи со вторую, 3 штуки.
</p>

<?php
	lb_get_data( $config_1 , 'SELECT * FROM workers WHERE id>? LIMIT ?', array( 2, 3 ), PDO::PARAM_INT);
?>

<h2>Завдання 3</h2>
<p> 
	Из таблицы workers достаньте всех работников и отсортируйте их по возрастанию зарплаты.
</p>

<?php
	lb_get_data($config_1, 'SELECT * FROM workers WHERE id>0 ORDER BY salary')
?>

<h2>Завдання 4</h2>
<p> 
	Из таблицы workers достаньте всех работников и отсортируйте их по убыванию зарплаты.
</p>

<?php
	lb_get_data($config_1, 'SELECT * FROM workers WHERE id>0 ORDER BY salary DESC')
?>

<h2>Завдання 5</h2>
<p> 
	Из таблицы workers достаньте работников со второго по шестого и отсортируйте их по возрастанию возраста.
</p>

<?php
	lb_get_data($config_1, 'SELECT * FROM workers WHERE id>=? AND id<=? ORDER BY age', array( 2, 6 ), PDO::PARAM_INT)
?>

<h2>Завдання 6</h2>
<p> 
	В таблице workers подсчитайте всех работников.
</p>

<?php
	lb_get_data($config_1, 'SELECT COUNT(*) FROM workers')
?>

<h2>Завдання 7</h2>
<p> 
	В таблице workers подсчитайте всех работников c зарплатой 300$.
</p>

<?php
	lb_get_data($config_1, 'SELECT COUNT(*) FROM workers WHERE salary=?', array( 300 ), PDO::PARAM_INT)
?>

<h2>Завдання 8</h2>
<p> 
	В таблице pages найти строки, в которых фамилия автора заканчивается на "ов".
</p>

<?php
	lb_get_data($config_1, 'SELECT * FROM pages WHERE athor LIKE "%ов"')
?>

<h2>Завдання 9</h2>
<p> 
	В таблице pages найти строки, в которых есть слово "элемент" (искать только по колонке article).
</p>

<?php
	lb_get_data($config_1, 'SELECT * FROM pages WHERE article LIKE "%элемент%"')
?>

<h2>Завдання 10</h2>
<p> 
	В таблице workers найти строки, в которых возраст работника начинается с числа 3, а далее идет только одна цифра.
</p>

<?php
	lb_get_data($config_1, 'SELECT * FROM workers WHERE age LIKE "3_"')
?>

<h2>Завдання 11</h2>
<p>
	В таблице workers найти строки, в которых имя работника заканчивается на "я".
</p>

<?php
	lb_get_data($config_1, 'SELECT * FROM workers WHERE name LIKE "%я"')
?>
