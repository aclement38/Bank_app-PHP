<?php 
	 // session_start();

	include('connection.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM accounts WHERE id = '$id'";
	$query = mysqli_query($db,$sql);
	header("Location: change.php");

 ?>