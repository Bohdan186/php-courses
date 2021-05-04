<?php
/**
 * Description of what this module (or file) is doing.
 *
 * @package lessons-35
 */

/**
 * Ar
 *
 * @param  mixed $data comment about this variable.
 * @param  mixed $production comment about this variable.
 *
 * @return void
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
 * @param  string $str - string.
 *
 * @return statement
 */
function esc_html( $str ) {
	$result = htmlspecialchars( trim( $str ) );

	return $result;
}

function connect_to_db() {
	$user = 'root';
	$pass = 'root';

	return $lb_database = new PDO( 'mysql:host=localhost;dbname=lb_database', $user, $pass );
}
?>

<h2>Завдання 1</h2>
<p> 
	Выбрать работника с id = 3.
</p>

<?php
/**
 * Lb_todo_1
 *
 * @return void
 */
function lb_todo_1() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE id=3' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_1();
?>

<h2>Завдання 2</h2>
<p> 
	Выбрать работников с зарплатой 1000$.
</p>

<?php
/**
 * Lb_todo_2
 *
 * @return void
 */
function lb_todo_2() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE salary=1000' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_2();
?>

<h2>Завдання 3</h2>
<p> 
	Выбрать работников в возрасте 23 года.
</p>

<?php
/**
 * Lb_todo_3
 *
 * @return void
 */
function lb_todo_3() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE age=23' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_3();
?>

<h2>Завдання 4</h2>
<p> 
	Выбрать работников с зарплатой более 400$.
</p>

<?php
/**
 * Lb_todo_4
 *
 * @return void
 */
function lb_todo_4() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE salary > 400' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_4();
?>

<h2>Завдання 5</h2>
<p> 
	Выбрать работников с зарплатой равной или большей 500$.
</p>

<?php
/**
 * Lb_todo_5
 *
 * @return void
 */
function lb_todo_5() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE salary >= 500' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_5();
?>

<h2>Завдання 6</h2>
<p> 
	Выбрать работников с зарплатой НЕ равной 500$.
</p>

<?php
/**
 * Lb_todo_6
 *
 * @return void
 */
function lb_todo_6() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE salary!=500' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_6();
?>

<h2>Завдання 7</h2>
<p> 
	Выбрать работников с зарплатой равной или меньшей 900$.
</p>

<?php
/**
 * Lb_todo_7
 *
 * @return void
 */
function lb_todo_7() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE salary<=900' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_7();
?>

<h2>Завдання 8</h2>
<p> 
	Узнайте зарплату и возраст Васи.
</p>

<?php
/**
 * Lb_todo_8
 *
 * @return void
 */
function lb_todo_8() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE name="Вася"' ) as $row ) {
		echo 'Васе ' . $row['age'] . ' года, его зарплата = ' . $row['salary'] . '$';
	}
}
	lb_todo_8();
?>

<h2>Завдання 9</h2>
<p> 
	Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно).
</p>

<?php
/**
 * Lb_todo_9
 *
 * @return void
 */
function lb_todo_9() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE age>25 AND age<=28' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_9();
?>

<h2>Завдання 10</h2>
<p> 
	Выбрать работника Петю.
</p>

<?php
/**
 * Lb_todo_10
 *
 * @return void
 */
function lb_todo_10() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE name="Петя"' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_10();
?>

<h2>Завдання 11</h2>
<p>
	Выбрать работников Петю и Васю.
</p>

<?php
/**
 * Lb_todo_11
 *
 * @return void
 */
function lb_todo_11() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE name="Петя" AND name="Вася"' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_11();
?>

<h2>Завдання 12</h2>
<p>
	Выбрать всех, кроме работника Петя.
</p>

<?php
/**
 * Lb_todo_12
 *
 * @return void
 */
function lb_todo_12() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE name!="Петя"' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_12();
?>

<h2>Завдання 13</h2>
<p>
	Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.
</p>

<?php
/**
 * Lb_todo_13
 *
 * @return void
 */
function lb_todo_13() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE age=27 AND salary=1000' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_13();
?>

<h2>Завдання 14</h2>
<p>
	Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$.
</p>

<?php
/**
 * Lb_todo_14
 *
 * @return void
 */
function lb_todo_14() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE ( age>=23 AND age<27 ) OR salary =1000' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_14();
?>

<h2>Завдання 15</h2>
<p>
	Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$.
</p>

<?php
/**
 * Lb_todo_15
 *
 * @return void
 */
function lb_todo_15() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE ( age>23 AND age<27 ) OR ( salary>400 AND salary<1000' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_15();
?>

<h2>Завдання 16</h2>
<p>
	Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
</p>

<?php
/**
 * Lb_todo_16
 *
 * @return void
 */
function lb_todo_16() {
	$lb_database = connect_to_db();

	foreach ( $lb_database->query( 'SELECT * FROM workers WHERE age != 27 OR salary != 400' ) as $row ) {
		ar( $row );
	}
}
	lb_todo_16();
?>

<h2>Завдання 17</h2>
<p>
	Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом.
</p>

<?php
/**
 * Lb_todo_17
 *
 * @return void
 */
function lb_todo_17() {
	$lb_database = connect_to_db();

	$lb_database->query( 'INSERT INTO workers SET name="Никита", age=26, salary=300' );
}
	// lb_todo_17();


	$lb_database = null;
?>

<h2>Завдання 18</h2>
<p>
	Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом.
</p>

<?php
/**
 * Lb_todo_18
 *
 * @return void
 */
function lb_todo_18() {
	$lb_database = connect_to_db();

	$lb_database->query( 'INSERT INTO workers (name, age, salary) VALUES ("Светлана", 1, 1200)' );
}
	// lb_todo_18();


	$lb_database = null;
?>

<h2>Завдання 19</h2>
<p>
	Добавьте двух новых работников одним запросом:
	Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.
</p>

<?php
/**
 * Lb_todo_19
 *
 * @return void
 */
function lb_todo_19() {
	$lb_database = connect_to_db();

	$lb_database->query(
		'INSERT INTO workers (name, age, salary)
	VALUES ("Ярослава", 30, 1200), ("Петро", 31, 1000)'
	);
}
	// lb_todo_19();


	$lb_database = null;
?>

<h2>Завдання 20</h2>
<p>
	Удалите работника с id=7.
</p>

<?php
/**
 * Lb_todo_20
 *
 * @return void
 */
function lb_todo_20() {
	$lb_database = connect_to_db();

	$lb_database->query( 'DELETE FROM workers WHERE id=7' );
}
	// lb_todo_20();


	$lb_database = null;
?>

<h2>Завдання 21</h2>
<p>
	Удалите Колю.
</p>

<?php
/**
 * Lb_todo_21
 *
 * @return void
 */
function lb_todo_21() {
	$lb_database = connect_to_db();

	$lb_database->query( 'DELETE FROM workers WHERE name="Коля"' );
}
	// lb_todo_21();


	$lb_database = null;
?>

<h2>Завдання22</h2>
<p>
	Удалите всех работников, у которых возраст 23 года.
</p>

<?php
/**
 * Lb_todo_22
 *
 * @return void
 */
function lb_todo_22() {
	$lb_database = connect_to_db();

	$lb_database->query( 'DELETE FROM workers WHERE age=23' );
}
	// lb_todo_22();


	$lb_database = null;
?>

<h2>Завдання23</h2>
<p>
	Поставьте Васе зарплату в 200$.
</p>

<?php
/**
 * Lb_todo_23
 *
 * @return void
 */
function lb_todo_23() {
	$lb_database = connect_to_db();

	$lb_database->query( 'UPDATE workers SET salary=200 WHERE name="Вася"' );
}
	lb_todo_23();


	$lb_database = null;
?>
