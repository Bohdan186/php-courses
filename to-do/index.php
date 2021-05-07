<?php
require_once 'php/function.php';
delete_task();
edit_task();
checked_task();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>To-Do List</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section class="primary-section">
		<div class="container">

			<div class="row">
				<div class="main-wrapper offset-lg-2 col-lg-8">
					<?php echo check_add_task_inputs(); ?>

					<form action="#" method="post">
						<div class="input-group mb-4">
							<input type="text" name="add-task-input" class="form-control" placeholder="Enter your task" aria-label="Enter your task" aria-describedby="basic-addon2">
							<input name="add-task-deadline" class="form-control" type="date" id="example-date-input">
							<div class="input-group-append">
								<button name="add-task-button" class="btn btn-success">Add task</button>
							</div>
						</div>
					</form>

				</div>
			</div>

			<div class="row">
				<div class="show-tasks offset-lg-2 col-lg-8">

					<?php get_tasks(); ?>

				</div>
			</div>
			
		</div>
	</section>
</body>
</html>