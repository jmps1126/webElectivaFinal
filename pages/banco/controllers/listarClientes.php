<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../../css/main.css">
	<link rel="stylesheet" href="../../../css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Clientes</title>
</head>
<body background="../../../img/intro-bg.jpg">

<form class="form-horizontal animated fadeInDown retraso-animate-1 center-block text-center" method="post" action="resultado.php" >
		<fieldset>

			<legend class="text-center color-blanco">Formulario Solicitud Crédito</logend>
			<br>
			<br>

			<?php
	
				include("../Conexion.php");
				$conn = ConectionDataBase();

				$idTipoEstado = $_POST['estadoCredito'];

				$sql = "SELECT CL.IDENTIFICACION, CL.NOMBRE, CL.SALARIO, EC.NOMBRE AS NOMBRE_ESTADO FROM CLIENTES CL INNER JOIN ESTADOCREDITO EC ON CL.IDTIPOESTADO = EC.IDTIPOESTADO WHERE CL.IDTIPOESTADO ='$idTipoEstado'";
				$result = mysqli_query ($conn, $sql);

				if (mysqli_num_rows ($result) > 0){

				echo "<table class='table table-condensed'>";
				echo "<thead>";
		        echo "<tr>";
				echo "<td class='text-center'><strong>Identificación</strong></td>";
				echo "<td class='text-center'><strong>Nombre</strong></td>";
				echo "<td class='text-center'><strong>Salario</strong></td>";
				echo "<td class='text-center'><strong>Estado Credito</strong></td>";
		        echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc ($result)){
						echo '<tr>';
						echo '<td>'.$row ["IDENTIFICACION"] . '</td>';
						echo '<td>' .$row ["NOMBRE"] .'</td>';
						echo '<td>' .$row ["SALARIO"] .'</td>';
						echo '<td>' .$row ["NOMBRE_ESTADO"] .'</td>';
						echo '</tr>';
		
					}
				}else{
					echo "<h4 class='color-blanco'> No se encontraron registros. </h4>";
				}

				mysqli_close ($conn);
			?>

			<div class="form-group text-center">
			    <a href="../pages/clientes.php" name="btn_cancelar" class="btn btn-danger">Regresar</a>
			</div>
		</fieldset>
	</form>

</body>
</html>

