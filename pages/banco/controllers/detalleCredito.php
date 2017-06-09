<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../../css/main.css">
	<link rel="stylesheet" href="../../../css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Resultado Solicitud</title>
</head>
<body background="../../../img/intro-bg.jpg">
	<div class="animated fadeInDown retraso-animate-1 espacio-arriba">

	<fieldset>

			<legend class="text-center color-blanco">Formulario Detalle Crédito</logend>
			<br>
			<br>
	<div class="color-blanco">
	<?php 

		include("../Conexion.php");
		$conn = ConectionDataBase();	

		$identificacion = $_POST['identificacion'];



		$sql = "SELECT CL.IDENTIFICACION, CL.NOMBRE, CL.VALORPRESTAMO, CL.PLAZOPRESTAMO, PG.VALORCUOTA, TC.PORCENTAJE,
					   PG.CUOTAPAGADA, PG.CUOTAPENDIENTE
				FROM CLIENTES CL 
			    	INNER JOIN PAGOS PG ON CL.IDENTIFICACION = PG.IDENTIFICACION
			        INNER JOIN TIPOCREDITO TC ON CL.IDTIPOCREDITO = TC.IDTIPOCREDITO
				WHERE CL.IDENTIFICACION ='$identificacion'";


				$result = mysqli_query ($conn, $sql);

		if (mysqli_num_rows ($result) > 0){

			while ($row = mysqli_fetch_assoc ($result)){
					$interesAnual = $row["PORCENTAJE"]*$row["PLAZOPRESTAMO"]*$row["VALORPRESTAMO"];

					$totalPagar = $interesAnual + $row["VALORPRESTAMO"];

					echo "<b>Detalle Credito: </b><br><br>" .
					"Identificación: " . $row["IDENTIFICACION"] ."<br>".
					"Nombre: " . $row["NOMBRE"] ."<br>".
					"Monto: $" . number_format($row["VALORPRESTAMO"],2) . "<br>" .
					"Intereses Anuales: $" . number_format($interesAnual,2) . "<br>".
					"Periodo de pago: " . $row["PLAZOPRESTAMO"] ." meses <br>".
					"Cantidad cuotas pagadas: " . $row["CUOTAPAGADA"] ."<br>".
					"Cantidad cuotas pendientes: " . $row["CUOTAPENDIENTE"] ."<br>".
					"Cuota Mensual: $" . number_format($row["VALORCUOTA"],2) . "<br>" .
					"Total Pagar: $" . number_format($totalPagar,2) . "<br><br><br>" ;
			}
		}else{

			echo "<h4 class='color-blanco'> No se encontraron registros. </h4><br><br>";

		}


	mysqli_close ($conn);

	?>
	</div>
	<div class="form-group text-center">
			    <a href="../pages/detalle.php" name="btn_cancelar" class="btn btn-danger">Regresar</a>
			</div>
	</fieldset>
	</div>

</body>
</html>