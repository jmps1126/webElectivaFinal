<?php
	function conexion(){

		$user = "root";
		$pass = "";
		$db = "db_banco";
		$server = "localhost";
		$con = mysqli_connect($server,$user,$pass,$db) or die ("Ha ocurrido un error al momento de conectar a la base de datos");

		return $con;
	}

?>