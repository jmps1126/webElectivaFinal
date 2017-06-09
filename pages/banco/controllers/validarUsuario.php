<?php 

	include("../Conexion.php");
	$conn = ConectionDataBase();

	$usuaroAcceso = $_POST['usuarioacceso'];
	$claveAcceso = $_POST['claveacceso'];



	$sql="SELECT CLAVEACCESSO FROM USUARIOSISTEMA WHERE USUARIOACCESO='$usuaroAcceso' 
		AND CLAVEACCESSO = '$claveAcceso'";

	$result = mysqli_query($conn,$sql);

	
	if (mysqli_num_rows ($result) > 0){
		echo '<script>alert("Usuario loggeado exitosamente.")</script> ';
		echo "<script>location.href='../pages/index.php'</script>";	
	}else{
		echo '<script>alert("Usuario o contraseña no validos.")</script> ';
		echo "<script>location.href='../pages/loggin.php'</script>";	
	}
	mysqli_close ($conn);
?>