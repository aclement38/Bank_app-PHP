<?php 
	function findOne($id){
		global $db; // ovo je zbog php scopa
		$sql = "SELECT * FROM accounts WHERE id = '$id'";
		$query = mysqli_query($db,$sql);
		$result = mysqli_fetch_assoc($query);
		return $result;
	}

	// function dd($var){
	// 	die(var_dump($var));
	// }

 ?>