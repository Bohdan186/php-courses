<?php
require_once 'helpers.php';

function check_add_task_inputs() {
	if ( ! isset( $_POST['add-task-button'] ) || ( ! empty( $_POST['add-task-input'] ) && ! empty( $_POST['add-task-deadline'] ) ) ) {
		return;
	}

	$error_message = '';

	if ( empty( $_POST['add-task-input'] ) && empty( $_POST['add-task-deadline'] ) ) {
		$error_message = 'Введіть завдання та встановіть дедлайн !';
	} elseif ( empty( $_POST['add-task-input'] ) ) {
		$error_message = 'Введіть завдання !';
	} elseif ( empty( $_POST['add-task-deadline'] ) ) {
		$error_message = 'Встановіть дедлайн !';
	}

	$error_allert = "
		<div class='alert alert-danger' role='alert'>
			$error_message
		</div>
	";

	return $error_allert;
}

function add_task() {
	if ( ! isset( $_POST['add-task-button'] ) || empty( $_POST['add-task-input'] ) || empty( $_POST['add-task-deadline'] ) ) {
		return;
	}

	$sql = 'INSERT INTO `tasks` ( `task`, `date-create`, `date-deadline` ) VALUES ( ?, ?, ? )';

	$bind_value = array(
		esc_html( $_POST['add-task-input'] ),
		date( 'Y-m-d', time() ),
		esc_html( $_POST['add-task-deadline'] ),
	);

	$bind_value_types = array(
		PDO::PARAM_STR,
	);

	lb_db_query( $sql, 'change', $bind_value, $bind_value_types );
}
add_task();

function get_tasks() {
	$sql = 'SELECT * FROM tasks';

	$tasks_data = lb_db_query( $sql, 'get' );

	foreach ( $tasks_data as $value ) {
		$id            = $value['ID'];
		$task          = $value['task'];
		$checked       = $value['checked'];
		$valid_checked = '';

		if ( $checked ) {
			$valid_checked = 'checked="checked"';
		}

		?>
		<form action="#" method="get">
			<div class="task input-group-text">
				<div class="task-wrapper">
					<input name="task-value" type="text" class="form-control" aria-label="Text input with checkbox" value="<?php echo $task; ?>">
				</div>

				<div class="button-wrapper">
					<a href="?id=<?php echo $value['ID']; ?>&checked=<?php echo $value['checked']; ?>" class="btn btn-success btn-sm">Done</a>
					
					<button name="edit" value="<?php echo $value['ID']; ?>" class="btn btn-warning btn-sm">Edit</button>
					<a href="?delete=<?php echo $value['ID']; ?>" class="btn btn-danger btn-sm">Delete</a>
					
				</div>
			</div>
		</form>
		<?php
	}
}

function delete_task() {
	if ( ! isset( $_GET['delete'] ) ) {
		return;
	}

	$id = esc_html( $_GET['delete'] );

	$sql              = 'DELETE FROM tasks WHERE id = ?';
	$bind_value       = array( $id );
	$bind_value_types = array( PDO::PARAM_INT );

	lb_db_query( $sql, 'change', $bind_value, $bind_value_types );

	header( 'Location: index.php' );
}

function edit_task() {
	if ( ! isset( $_GET['edit'] ) || empty( $_GET['task-value'] ) ) {
		return;
	}

	$id         = esc_html( $_GET['edit'] );
	$task_value = esc_html( $_GET['task-value'] );

	$sql              = 'UPDATE tasks SET `task`= ? WHERE `id` = ?';
	$bind_value       = array( $task_value, $id );
	$bind_value_types = array( PDO::PARAM_STR, PDO::PARAM_INT );

	lb_db_query( $sql, 'change', $bind_value, $bind_value_types );

	header( 'Location: index.php' );
}

function checked_task() {
	if ( ! empty( $_GET['checked'] ) || $_GET['checked'] === '0' ) {

		$id      = esc_html( $_GET['id'] );
		$checked = esc_html( $_GET['checked'] );

		$checked = $checked ? 1 : 0;

		$sql              = 'UPDATE tasks SET `checked`= ? WHERE `id` = ?';
		$bind_value       = array( $checked, $id );
		$bind_value_types = array( PDO::PARAM_INT );

		lb_db_query( $sql, 'change', $bind_value, $bind_value_types );

		header( 'Location: index.php' );
	}
}
