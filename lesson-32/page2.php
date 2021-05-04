<?php require_once 'index2.php';

echo '2: <br>';
lb_todo_2_ride();

echo '<br><br>';

echo '4: <br>';
lb_todo_4_ride_country();

echo '<br><br>';

echo '6: <br>';


?>

<form action="#" method="post">
	<input type="text" name="user-first-name" placeholder="First Name"><br>
	<input type="text" name="user-last-name" placeholder="Last Name"><br>
	<input type="password" name="user-pass" placeholder="Password"><br>
	<input type="email" name="user-email" placeholder="Email" value="<?php echo lb_todo_6_get_email(); ?>"><br>

	<input type="submit" name="w_email">
</form>