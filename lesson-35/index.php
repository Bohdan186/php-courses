<?php
/**
 * Tasks for basic working with SQL databases in PHP
 *
 * @package lessons-35
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

$pdo = new PDO( 'mysql:host=192.168.1.85;dbname=lb_database', 'bohdan', 'bohdan' );

/**
 * Lb_get_data
 *
 * The function outputs data from the database using the "ar" function.
 * Accepts two parameters, a database query using pseudo-variables, and an array of variable values
 *
 * @param  string $sql - string query the database.
 * @param  array  $values - an array with values of variables.
 */
function lb_get_data( $sql, $values ) {
	global $pdo;

	$result = $pdo->prepare( $sql );

	$result->execute( $values );

	ar( $result->fetchAll( PDO::FETCH_ASSOC ) );
}

/**
 * Lb_change_data
 * 
 * The function takes a query to the database and executes it using PDO-> exec.
 * The query does not have to accept data, only change it in the database
 *
 * @param  string $sql - string query the database.
 */
function lb_change_data( $sql ) {
	global $pdo;

	$pdo->exec( $sql );
}
?>

<h2>Завдання 1</h2>
<p> 
	Выбрать работника с id = 3.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE id = ?', array( 3 ) );
?>

<h2>Завдання 2</h2>
<p> 
	Выбрать работников с зарплатой 1000$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE salary = ?', array( 1000 ) );
?>

<h2>Завдання 3</h2>
<p> 
	Выбрать работников в возрасте 23 года.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE age = ?', array( 23 ) );
?>

<h2>Завдання 4</h2>
<p> 
	Выбрать работников с зарплатой более 400$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE salary > ?', array( 400 ) );
?>

<h2>Завдання 5</h2>
<p> 
	Выбрать работников с зарплатой равной или большей 500$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE salary >= ?', array( 500 ) );
?>

<h2>Завдання 6</h2>
<p> 
	Выбрать работников с зарплатой НЕ равной 500$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE salary != ?', array( 500 ) );
?>

<h2>Завдання 7</h2>
<p> 
	Выбрать работников с зарплатой равной или меньшей 900$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE salary <= ?', array( 900 ) );
?>

<h2>Завдання 8</h2>
<p> 
	Узнайте зарплату и возраст Васи.
</p>

<?php
	lb_get_data( 'SELECT salary, age FROM workers WHERE name = ?', array( 'Вася' ) );
?>

<h2>Завдання 9</h2>
<p> 
	Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE age > ? AND age <= ?', array( 25, 28 ) );
?>

<h2>Завдання 10</h2>
<p> 
	Выбрать работника Петю.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE name = ?', array( 'Петя' ) );
?>

<h2>Завдання 11</h2>
<p>
	Выбрать работников Петю и Васю.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE name = ? OR name = ?', array( 'Петя', 'Вася' ) );
?>

<h2>Завдання 12</h2>
<p>
	Выбрать всех, кроме работника Петя.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE name != ?', array( 'Петя' ) );
?>

<h2>Завдання 13</h2>
<p>
	Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE age = ? OR salary = ?', array( 27, 1000 ) );
?>

<h2>Завдання 14</h2>
<p>
	Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE ( age >= ? AND age < ? ) OR salary = ?', array( 23, 27, 1000 ) );
?>

<h2>Завдання 15</h2>
<p>
	Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE ( age > ? AND age < ? ) OR ( salary > ? AND salary < ? )', array( 23, 27, 400, 1000 ) );
?>

<h2>Завдання 16</h2>
<p>
	Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
</p>

<?php
	lb_get_data( 'SELECT * FROM workers WHERE age= ? OR salary != ?', array( 27, 400 ) );
?>

<h2>Завдання 17</h2>
<p>
	Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом.
</p>

<?php
	// lb_change_data( 'INSERT INTO workers SET name="Никита", age=26, salary=300' );
?>

<h2>Завдання 18</h2>
<p>
	Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом.
</p>

<?php
	// lb_change_data( 'INSERT INTO workers (name, age, salary) VALUES ("Светлана", 1, 1200)' );
?>

<h2>Завдання 19</h2>
<p>
	Добавьте двух новых работников одним запросом:
	Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.
</p>

<?php
	// lb_change_data( 'INSERT INTO workers (name, age, salary) VALUES ("Ярослава", 30, 1200), ("Петро", 31, 1000)' );
?>

<h2>Завдання 20</h2>
<p>
	Удалите работника с id=7.
</p>

<?php
	// lb_change_data( 'DELETE FROM workers WHERE id=7' );
?>

<h2>Завдання 21</h2>
<p>
	Удалите Колю.
</p>

<?php
	// lb_change_data( 'DELETE FROM workers WHERE name="Коля"' );
?>

<h2>Завдання22</h2>
<p>
	Удалите всех работников, у которых возраст 23 года.
</p>

<?php
	// lb_change_data( 'DELETE FROM workers WHERE age=23' );
?>

<h2>Завдання23</h2>
<p>
	Поставьте Васе зарплату в 200$.
</p>

<?php
	// lb_change_data( 'UPDATE workers SET salary=400 WHERE name="Вася"' );
?>

<h2>Завдання24</h2>
<p>
	Работнику с id=4 поставьте возраст 35 лет.
</p>

<?php
	lb_change_data( 'UPDATE workers SET age=35 WHERE id=4' );
?>

<h2>Завдання25</h2>
<p>
	Всем, у кого зарплата 500$ сделайте ее 700$.
</p>

<?php
	lb_change_data( 'UPDATE workers SET salary=700 WHERE salary=500' );
?>

<h2>Завдання26</h2>
<p>
	Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
</p>

<?php
	lb_change_data( 'UPDATE workers SET age=23 WHERE id > 2 AND id <= 5' );
?>

<h2>Завдання27</h2>
<p>
	Поменяйте Васю на Женю и прибавьте ему зарплату до 900$.
</p>

<?php
	lb_change_data( 'UPDATE workers SET name = "Женя", salary = 900  WHERE name = "Вася"' );
?>
