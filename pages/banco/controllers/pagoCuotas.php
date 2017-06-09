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
	<title>Pago Cuotas</title>
</head>
<body background="../../../img/intro-bg.jpg">
	<div class="animated fadeInDown retraso-animate-1 espacio-arriba">

	<fieldset>

			<legend class="text-center color-blanco">Pago de cuotas</logend>
			<br>
			<br>
	<div class="color-blanco">
	<?php 

		include("../Conexion.php");
		$conn = ConectionDataBase();	

		$identificacion = $_POST['identificacion'];
		$cuotas = $_POST['cuotas'];
		$cuotasPagadas = 0;
		$cuotasPendientes = 0;

		$sqlSelectUser = "SELECT CL.IDENTIFICACION, CL.NOMBRE, CL.VALORPRESTAMO, CL.PLAZOPRESTAMO,PG.CANTCUOTAS, 
							PG.CUOTAPAGADA, PG.CUOTAPENDIENTE, PG.VALORCUOTA
							 FROM CLIENTES CL INNER JOIN PAGOS PG ON CL.IDENTIFICACION = PG.IDENTIFICACION
						   WHERE CL.IDENTIFICACION = '$identificacion'";

		$resultUser = mysqli_query ($conn, $sqlSelectUser);

		if (mysqli_num_rows ($resultUser) > 0){

			$pagos = mysqli_fetch_assoc ($resultUser);

			if($pagos["CANTCUOTAS"] == $pagos["CUOTAPAGADA"]){

				echo "<h4 class='color-blanco'> El usuario ya esta a paz y salvo con el crédito </h4><br><br>";

			}else{

			$cuotasPagadas = $cuotas + $pagos["CUOTAPAGADA"];
			$cuotasPendientes = $pagos["CUOTAPENDIENTE"] - $cuotas;

			if($cuotas > $pagos["CANTCUOTAS"]){

				echo "<h4 class='color-blanco'> No puedes pagar más de las cuotas del crédito. </h4><br><br>";

			}else if($cuotasPagadas > $pagos["CANTCUOTAS"]){

				echo "<h4 class='color-blanco'> Estás sobrepasando el limite de cuotas del crédito, favor revisar el detalle del crédito y verificar las cuotas que faltan por pagar. </h4><br><br>";

			}else{

				

				echo "<b>Detalle Pago Cuota: </b><br><br>" .
				"Identificación: " . $pagos["IDENTIFICACION"] ."<br>".
				"Nombre: " . $pagos["NOMBRE"] ."<br>".
				"Monto: $" . number_format($pagos["VALORPRESTAMO"],2) . "<br>" .
				"Cuota Mensual: $" . number_format($pagos["VALORCUOTA"],2) . "<br>" .
				"Cantidad cuotas pagadas: " . $cuotasPagadas ."<br>".
				"Cantidad cuotas pendientes: " . $cuotasPendientes ."<br>";

				$sqlInsertPago = "UPDATE PAGOS 
									SET CUOTAPAGADA = '$cuotasPagadas' ,
										CUOTAPENDIENTE = '$cuotasPendientes'
									WHERE IDENTIFICACION = '$identificacion'";
				mysqli_query($conn, $sqlInsertPago) or die ("Problemas al insertar " .mysqli_error($conn));


			}

			}


		}else{
			echo "<h4 class='color-blanco'> El usuario no exite, favor verificar el número de identificación. </h4><br><br>";
		}

	mysqli_close ($conn);

	?>
	</div>
	<div class="form-group text-center">
			    <a href="../pages/cuotas.php" name="btn_cancelar" class="btn btn-danger">Regresar</a>
			</div>
	</fieldset>
	</div>

</body>
</html>