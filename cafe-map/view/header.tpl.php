<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learning MVC</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
		  crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="#">Navbar</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php echo lb_get_current_route(); ?>">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="admin/?action=admin">Admin</a>
			</li>
			
			<?php  if( isset( $data['pages'] ) ) : foreach ( $data['pages'] as $page ):?>

			<li class="nav-item">
				<a class="nav-link" href="?action=page&id=<?php echo $page['id']?>">
					<?php echo $page['name']?>
				</a>
			</li>
			
			<?php endforeach; endif;?>
			
		</ul>
	</div>
</nav>