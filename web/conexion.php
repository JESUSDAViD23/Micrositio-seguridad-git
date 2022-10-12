<?php
	$servername = "localhost";
	$database = "micrositio";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername,$username,$password,$database);

	if(!$conn){
		die("Connection failed".mysqli_error());
	}else{
		
	}
	?>