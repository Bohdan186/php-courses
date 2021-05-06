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
				<div class="main-wrapper offset-lg-3 col-lg-6">

					<div class="input-group mb-4">
						<input type="text" class="form-control" placeholder="Enter your task" aria-label="Enter your task" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-success" type="button">Add task</button>
						</div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="show-tasks offset-lg-3 col-lg-6">

					<div class="task input-group-text">
						<div class="task-wrapper">
							<input type="checkbox" aria-label="Checkbox for following text input">
							<input type="text" class="form-control" aria-label="Text input with checkbox" value="Task value">
						</div>

						<div class="button-wrapper">
							<button type="button" class="btn btn-warning btn-sm">Edit</button>
							<button type="button" class="btn btn-danger btn-sm">Delete</button>
						</div>
					</div>

					<div class="task input-group-text">
						<div class="task-wrapper">
							<input type="checkbox" aria-label="Checkbox for following text input">
							<input type="text" class="form-control" aria-label="Text input with checkbox" value="Task value" disabled>
						</div>

						<div class="button-wrapper">
							<button type="button" class="btn btn-warning btn-sm">Edit</button>
							<button type="button" class="btn btn-danger btn-sm">Delete</button>
						</div>
					</div>

				</div>
			</div>
			
		</div>
	</section>
</body>
</html>