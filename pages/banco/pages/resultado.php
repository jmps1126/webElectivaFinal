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


	<img src="../../../img/logo_banco_principal.jpg" class="col-md-1">    

	<h1 class="text-center negrilla color-blanco">Resultado simulación crédito</h1>
		
	<div class="color-blanco">
	<?php 

		include("../Conexion.php");
		$conn = ConectionDataBase();	

		$nombre = $_POST['nombre'];
		$cedula = $_POST['cedula'];
		$genero = $_POST['genero'];
		$salario = $_POST['salario'];
		$valor = $_POST['valor'];
		$credito = $_POST['credito'];
		$plazo = $_POST['plazo'];


		$interes =0.0;
		$cuota =0.0;

		if($genero == 'F'){
			$generoFinal = "Señora ";
		}else{
			$generoFinal = "Señor ";
		}

		switch ($credito) {
			case 1:
				$interes = 1.69/100;
				break;
			
			case 2:
				$interes = 1.50/100;
				break;
			case 3:
				$interes = 1.50/100;
				break;
			case 4:
				$interes = 1.8/100;
				break;
		}

		switch ($plazo) {
					case 12:
						$plazoAnnos = "1 año";
						break;
					case 24:
						$plazoAnnos = "2 años";
						break;
					case 36:
						$plazoAnnos = "3 años";
						break;
					case 48:
						$plazoAnnos = "4 años";
						break;
					case 60:
						$plazoAnnos = "5 años";
						break;
				}


		$cuota = $valor*(($interes*(1+$interes)**$plazo)/(((1+$interes)**$plazo)-1)); 

		$salarioFinal = $salario * 0.30;

		$interesAnual = $interes*$plazo*$valor;

		$totalPagar = $interesAnual + $valor;

		if($cuota > $salarioFinal){
			$estadoCredito = "Rechazado";
			$idTipoEstado = 2;
		}else{
			$estadoCredito = "Aprobado";
			$idTipoEstado = 1;
		}




		//Insertamos los datos del cliente
		$sqlCliente = "INSERT INTO CLIENTES (IDENTIFICACION,NOMBRE,GENERO,SALARIO,IDTIPOCREDITO,VALORPRESTAMO,PLAZOPRESTAMO,IDTIPOESTADO) VALUES('$cedula','$nombre','$genero','$salario','$credito','$valor','$plazo','$idTipoEstado')";

		mysqli_query($conn, $sqlCliente) or die ("Problemas al insertar " .mysqli_error($conn));

		//Insertamos los datos del pago del credito
		$sqlPagos = "INSERT INTO PAGOS (IDENTIFICACION,CANTCUOTAS,CUOTAPAGADA,CUOTAPENDIENTE,VALORCUOTA) VALUES('$cedula','$plazo',0,'$plazo','$cuota')";

		mysqli_query($conn, $sqlPagos) or die ("Problemas al insertar " .mysqli_error($conn));

		echo "<br><br><h2 class='espacio-arriba font-open-sans text-center font-mediana'>" .
			$generoFinal . $nombre . " identificado con el número de indentificación " . $cedula . " Le comunicamos que segun su ingreso mensual $" . number_format($salario,2) . " Su credito fue " .
			$estadoCredito;

			if($estadoCredito == "Rechazado"){
				echo " Debido a que su deducción mensual sería $" . $salarioFinal  . " y " .
				"supera el 30 % permitido por deducción" ."</h2>";
			}else{
				echo " y su resumen del crédito queda de la siguiente manera: <br><br>".
				"<b>Detalle Credito: </b><br><br>" .
				"Monto: $" . number_format($valor,2) . "<br>" .
				"Duración Crédito: " . $plazoAnnos . "<br>" .
				"Intereses Anuales: $" . number_format($interesAnual,2) . "<br>".
				"Periodo de pago: " . $plazo ." meses <br>".
				"Cuota Mensual: $" . number_format($cuota,2) . "<br>" .
				"Total Pagar: $" . number_format($totalPagar,2) . "<br>" .
				"Cantidad Cuotas: " .$plazo . "<br>";
			}
		echo "<hr>";

		echo "<table class='table table-condensed'>";
		echo "<thead>";
        echo "<tr>";
			echo "<td><strong>Cuota</strong></td>";
			echo "<td class='text-center'><strong>Valor cuota</strong></td>";
			echo "<td class='text-center'><strong>Abono capital</strong></td>";
			echo "<td class='text-center'><strong>Intereses</strong></td>";
			echo "<td class='text-center'><strong>Saldo</strong></td>";
        echo "</tr>";
		echo "</thead>";
		echo "<tbody>";

		for ($i=1;$i<=$plazo;$i++){
			echo "<tr>";
				$intereses=$valor*$interes;
				$abonoCapital=$cuota-$intereses;
				$saldo=$valor-$abonoCapital;
				$valor=$saldo;
				echo "<td>".$i."</td>";
				echo "<td class='text-center'>$".number_format($cuota,2)."</td>";
				echo "<td class='text-center'>$".number_format($abonoCapital,2)."</td>";
				echo "<td class='text-center'>$".number_format($intereses,2)."</td>";
				echo "<td class='text-center'>$".number_format($saldo,2)."</td>";
			echo "</tr>";
		}
		
		echo "</tbody>";
	echo "</table>";


	mysqli_close ($conn);

	?>
	</div>
	</div>

</body>
</html>