<?php


	function ConectionDataBase (){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_banco";

		//crear conexion
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		
		//check conexion

		if(!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());

		}		
		return $conn;		
	

	}


?>