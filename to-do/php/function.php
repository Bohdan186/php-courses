<?php
require_once 'helpers.php';

$pdo = new PDO( 'mysql:host=192.168.1.85;dbname=to-do', 'bohdan', 'bohdan' );

/**
 * Check_add_task_inputs
 *
 */
function check_add_task_inputs() {
	if ( ! isset( $_POST['add-task-button'] ) ) {
		return;
	}

	if ( empty( $_POST['add-task-input'] ) && empty( $_POST['add-task-deadline'] ) ) {
		?>
			<div class='alert alert-danger' role='alert'>
				'Введіть завдання та встановіть дедлайн !'
			</div>
		<?php
	} elseif ( empty( $_POST['add-task-input'] ) ) {
		?>
			<div class='alert alert-danger' role='alert'>
				'Введіть завдання !'
			</div>
		<?php
	} elseif ( empty( $_POST['add-task-deadline'] ) ) {
		?>
			<div class='alert alert-danger' role='alert'>
				'Встановіть дедлайн !'
			</div>
		<?php
	} elseif ( time() >= strtotime( $_POST['add-task-deadline'] ) ) {
		?>
			<div class='alert alert-danger' role='alert'>
				'Дедлайн повинний бути в майбутньому !'
			</div>
		<?php
	}
}

/**
 * Add_task
 *
 * @return void
 */
function add_task() {
	if ( ! isset( $_POST['add-task-button'] ) || empty( $_POST['add-task-input'] ) || empty( $_POST['add-task-deadline'] ) || time() >= strtotime( $_POST['add-task-deadline'] ) ) {
		return;
	}

	$task     = esc_html( $_POST['add-task-input'] );
	$deadline = esc_html( $_POST['add-task-deadline'] );

	global $pdo;
	$result = $pdo->prepare( 'INSERT INTO `tasks` ( `task`, `deadline` ) VALUES ( :task, :deadline )' );

	$result->bindParam( ':task', $task );
	$result->bindParam( ':deadline', $deadline );

	$result->execute();
}

/**
 * Get_tasks
 *
 */
function get_tasks() {
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM tasks' );

	$result->execute();
	$tasks_data = $result->fetchAll( PDO::FETCH_ASSOC );

	foreach ( $tasks_data as $value ) {
		?>
		<div class="task input-group-text <?php echo '1' === $value['checked'] ? 'alert-success' : ''; ?> <?php echo time() >= strtotime( $value['deadline']) ? 'alert-danger' : '' ; ?>">
			<div class="task-wrapper">
				<h4><?php echo $value['task']; ?></h4>
			</div>

			<div class="button-wrapper">
				<a href="?id=<?php echo $value['ID']; ?>&checked=<?php echo $value['checked']; ?>" class="btn btn-success btn-sm">Done</a>

				<a href="?edit=<?php echo $value['ID']; ?>" class="btn btn-warning btn-sm">Edit</a>

				<a href="?delete=<?php echo $value['ID']; ?>" class="btn btn-danger btn-sm">Delete</a>
			</div>
		</div>
		<?php
	}
}

/**
 * Delete_task
 *
 */
function delete_task() {
	if ( ! isset( $_GET['delete'] ) ) {
		return;
	}

	$id = esc_html( $_GET['delete'] );

	global $pdo;
	$result = $pdo->prepare( 'DELETE FROM tasks WHERE id = :id' );

	$result->bindParam( ':id', $id );

	$result->execute();

	header( 'Location: index.php' );
}

/**
 * Edit_task
 *
 */
function edit_task() {
	if ( ! isset( $_GET['edit'] ) ) {
		return;
	}

	$id          = esc_html( $_GET['edit'] );
	$tasks_value = '';

	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM tasks WHERE id = :id' );

	$result->bindParam( ':id', $id );

	$result->execute();

	$tasks_data = $result->fetchAll( PDO::FETCH_ASSOC );

	foreach ( $tasks_data as $value ) {
		$task_id    = $value['ID'];
		$task_value = $value['task'];
		$deadline   = $value['deadline'];
	}

	edit_form( $task_id, $task_value, $deadline );
}

/**
 * Edit_form
 *
 * @param  mixed $task_id - id.
 * @param  mixed $task_value - value.
 * @param  mixed $deadline - deadline.
 */
function edit_form( $task_id, $task_value, $deadline ) {
	?>
		<div class="edit-todo-bg"></div>
		<div class="edit-todo-wrapper">
			<div class="edit-todo-inner">
				<form action="#" method="post">
					<div class="input-group">
						<input type="hidden" name="edit-id" value="<?php echo $task_id; ?>">
						<input type="text" name="edit-value" value="<?php echo $task_value; ?>">
						<input type="date" name="edit-deadline" value="<?php echo $deadline; ?>">
			
						<div class="input-group-append">			
							<button name="save-edit" class="btn btn-success">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>	
	<?php
}

/**
 * Save_edit
 *
 */
function save_edit() {
	if ( ! isset( $_POST['save-edit'] ) ) {
		return;
	}

	$task_id    = esc_html( $_POST['edit-id'] );
	$task_value = esc_html( $_POST['edit-value'] );
	$deadline   = esc_html( $_POST['edit-deadline'] );

	global $pdo;

	$result = $pdo->prepare( 'UPDATE tasks SET task = :task, deadline = :deadline WHERE id = :id' );

	$result->bindParam( ':id', $task_id );
	$result->bindParam( ':task', $task_value );
	$result->bindParam( ':deadline', $deadline );

	$result->execute();

	header( 'Location: index.php' );
}

/**
 * Checked_task
 *
 */
function checked_task() {
	if ( ! empty( $_GET['checked'] ) || $_GET['checked'] === '0' ) {

		$id      = esc_html( $_GET['id'] );
		$checked = esc_html( $_GET['checked'] );

		$checked = $checked ? 0 : 1;

		global $pdo;
		$result = $pdo->prepare( 'UPDATE tasks SET `checked`= :checked WHERE `id` = :id' );

		$result->bindParam( ':id', $id );
		$result->bindParam( ':checked', $checked );

		$result->execute();

		header( 'Location: index.php' );
	}
}
