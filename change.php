<?php 
		session_start();
		if(!empty($_SESSION['id'])){
			include('templates/logout_nav.php');
			include('templates1/process.php');
			include('header.php');
	  		
		}
		 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<table class="table">
				<thead>
					<th>ID</th>
					<th>USERNAME</th>
					<th>DEPOSITE</th>
					<th>CARD</th>
				</thead>
				<tbody>
					<?php 
						while($row = mysqli_fetch_assoc($query)){
							$id = $row['id'];
							$username = $row['username'];
							$deposite = $row['deposite'];
							$card = $row['card'];
							?>
							<tr>
								<td><?php echo "$id"; ?></td>
								<td><?php echo "$username"; ?></td>
								<td><?php echo "$deposite"; ?></td>
								<td><?php echo "$card"; ?></td>
								<td><button class="btn btn-success"><a href="make_edit.php?id=<?php echo $id ?>" style="color: #fff;">Edit user</a></button></td>
								<td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $id ?>" style="color: #fff;">Delete user</a></button></td>
							</tr>
							<?php 
						}


					 ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>

