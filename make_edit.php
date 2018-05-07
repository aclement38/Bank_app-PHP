<?php 
	include('connection.php');
	 include('proces_edit.php');
	$result = findOne($_GET['id']);
	 //die(var_dump($result));
	//dd($result);
 ?>
  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bank app</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="jumbotron" style="text-align: center;">
			<h1>Bank app</h1>
			<button class="btn btn-primary"><a href="success.php" style="color: #fff;">Accounts</a></button>
			<button class="btn btn-success"><a href="process.php" style="color: #fff;">Add accounts</a></button>
			<button class="btn btn-danger"><a href="delete.php" style="color: #fff;">Edit/Delete Accounts</a></button>
		</div>
		<div class="row"  style="text-align: center;" >
			<div class="col-lg-6 col-lg-offset-3">
				<table class="table"">
					<thead>
						<th  style="text-align: center; font-size: 25px;">Promeni podatke za korisnika</th>
					</thead>
				</table>
					<form action="login_edit.php" method="post"">
						<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
						<!-- <input type="number" class="form-control" name="id" placeholder="id"><br> -->
						<input type="text" class="form-control" name="username" value="<?php echo $result['username']; ?>" ><br>
						<input type="number" class="form-control" name="deposite" value="<?php echo $result['deposite']; ?>"><br>
						<input type="text" class="form-control" name="card" value="<?php echo $result['card']; ?>" ><br>
						<button type="submit" class="btn btn-primary" name="sub">Unesi izmene</button>
					</form>
			</div>
		</div>
	</div>
</body>
</html>