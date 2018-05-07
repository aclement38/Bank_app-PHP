<?php 
	session_start();
	include('connection.php');
	if(isset($_POST['sub'])){
		if(!empty($_POST['id']) && !empty($_POST['username']) && !empty($_POST['deposite']) && !empty($_POST['card'])){
			$id = $_POST['id'];
			$username = $_POST['username'];
			$deposite = $_POST['deposite'];
			$card = $_POST['card'];
			$sql = "UPDATE accounts SET username = '$username', deposite = '$deposite', card = '$card' WHERE id = '$id'";
			$query = mysqli_query($db,$sql);
			if(mysqli_num_rows($query) === 1){
				$_SESSION['id'] = mysqli_fetch_assoc($query)['id'];
				header("Location: make_edit.php");
			}else{
				header("Location: index.php");
			}
		}else {
			header("Location: index.php");
		}
	}else{
		header("Location: 404.html");
	}

 ?>