<?php 
	
	include("../Conexion.php");
	$conn = ConectionDataBase();	
	
	$identificacion = $_POST['identificacion'];
	$nombre = $_POST['nombre'];
	$usuarioAcceso = $_POST['usuarioAcceso'];
	$claveAcceso = $_POST['claveAcceso'];

	$sql = "INSERT INTO USUARIOSISTEMA (IDENTIFICACION,NOMBRE,USUARIOACCESO,CLAVEACCESSO) VALUES('$identificacion', '$nombre','$usuarioAcceso','$claveAcceso')";


	mysqli_query($conn, $sql) or die ("Problemas al insertar " .mysqli_error($conn));

	mysqli_close ($conn);
	echo "<script type=>alert('Usuario Registrado Exitosamente')</script>";
    echo"<script type=>window.location ='../pages/loggin.php'</script>";
?>

