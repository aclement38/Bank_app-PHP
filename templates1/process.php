<?php 
	include('connection.php');
	$sql = "SELECT * FROM accounts";
	$query = mysqli_query($db,$sql);
 ?>