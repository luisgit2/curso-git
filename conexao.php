<?php 
	$server ="localhost";
	$user = "root";
	$pass = "admin";
	$bd = "cleanup";
	$conn = mysqli_connect($server, $user, $pass, $bd);

	if ($conn){
		
	}else{
		echo "deu errado";
	}

?>