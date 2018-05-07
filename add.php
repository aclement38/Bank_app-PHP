<?php 
	include('connection.php');
	if(isset($_POST['sub'])){
		if(!empty($_POST['username']) && (!empty($_POST['deposite'])) && (!empty($_POST['card']))){
			$username = $_POST['username'];
			$deposite = $_POST['deposite'];
			$card = $_POST['card'];
			$sql = "INSERT INTO accounts VALUES (NULL, '$username', '$deposite', '$card')";
			$query = mysqli_query($db,$sql);
			if($query){
				header("Location: index.php");
			}
		}else{
				echo "All fields are required!";
			}
	}else{
		echo "You don't have promition!";
	}


 ?>