
<?php session_start();
include('templates1/process.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-default">
			<div class="container-fluid">	
				<a href="" class="navbar-brand">Session</a>
			<?php  
				if(!empty($_SESSION['id'])){
					include('templates/logout_nav.php');
					include('header.php');

				}
				else{
			include('templates/form.php');
				}

			 ?>
			</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
				<table class="table">
				<tbody>
					<?php include('templates1/edit.php'); ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
