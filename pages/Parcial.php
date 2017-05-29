<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Parcial PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="../img/intro-bg.jpg">
 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <a class="navbar-brand topnav" href="../index.php">Inicio</a>
            </div>
            
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
    <div style="color: white;">
	<center>


		<?php 

			$registros = 70;
			$totalBrasilenos = 0;
			$totalColombianos = 0;
			$totalArgentinos = 0;
			$totalBrasilenosAltos = 0;
			$totalColombianosAltos = 0;
			$totalArgentinosAltos = 0;
			$totalBrasilenosMedianos = 0;
			$totalColombianosMedianos = 0;
			$totalArgentinosMedianos = 0;
			$totalBrasilenosBajos = 0;
			$totalColombianosBajos = 0;
			$totalArgentinosBajos = 0;
			$menoresEdad =0.0;
			$porcentajeMenores =0.0;
			$porcentajeBrasilenos =0.0;
			$porcentajeColombianos = 0.0;
			$porcentajeArgentinos = 0.0;

			echo "<H2>INFORME MIGRACIÓN</H2>";	

			for ($i=0; $i < 70 ; $i++) { 
				$edad = rand(1,100);
				$tipo = rand(1,3);
				$nacionalidad = rand(1,3);

				//Acumulamos los menores de edad
				if($edad < 18){
						$menoresEdad++;
				}

			
				//Totales nacionalidad y total tipo persona
				switch ($nacionalidad) {
					case 1:

						switch ($tipo) {
						case 1:
							$totalColombianosAltos++;
							break;

						case 2:
							$totalColombianosMedianos++;
							break;

						case 3:
							$totalColombianosBajos++;
							break;
							}

							$totalColombianos++;
							break;

					case 2:


						switch ($tipo) {
						case 1:
							$totalArgentinosAltos++;
							break;

						case 2:
							$totalArgentinosMedianos++;
							break;

						case 3:
							$totalArgentinosBajos++;
							break;
							}

						$totalArgentinos++;
						break;

					case 3:


						switch ($tipo) {
						case 1:
							$totalBrasilenosAltos++;
							break;

						case 2:
							$totalBrasilenosMedianos++;
							break;

						case 3:
							$totalBrasilenosBajos++;
							break;
							}

						$totalBrasilenos++;
						break;
				}

					//
					
							

			}

				
			//porcentaje nacionalidad
				$porcentajeColombianos = ($totalColombianos/$registros)*100;
				$porcentajeArgentinos = ($totalArgentinos/$registros)*100;
				$porcentajeBrasilenos = ($totalBrasilenos/$registros)*100;

			echo "El informe realizado por migración para realizar un estudio de nacionalidades y tipo de personas arrojo el siguiente resultado: <br><br><hr>";

			echo "<b><h3>Nacionalidad Brasileña</h3></b>";

			echo "<h4>Total Brasileños:   " . $totalBrasilenos . "<br>";
			echo "<h4>Total Brasileños Altos:   " . $totalBrasilenosAltos . "<br>";
			echo "<h4>Total Brasileños Medianos:   " . $totalBrasilenosMedianos . "<br>";
			echo "<h4>Total Brasileños Bajos:   " . $totalBrasilenosBajos  . "<br><br><hr>";


			echo "<b><h3>Nacionalidad Colombiana</h3></b>";

			echo "<h4>Total Colombianos:   " . $totalColombianos . "<br>";
			echo "<h4>Total Colombianos Altos:   " . $totalColombianosAltos . "<br>";
			echo "<h4>Total Colombianos Medianos:   " . $totalColombianosMedianos . "<br>";
			echo "<h4>Total Colombianos Bajos:   " . $totalColombianosBajos  . "<br><br><hr>";


			echo "<b><h3>Nacionalidad Argentina</h3></b>";

			echo "<h4>Total Argentinos:   " . $totalArgentinos . "<br>";
			echo "<h4>Total Argentinos Altos:   " . $totalArgentinosAltos . "<br>";
			echo "<h4>Total Argentinos Medianos:   " . $totalArgentinosMedianos . "<br>";
			echo "<h4>Total Argentinos Bajos:   " . $totalArgentinosBajos  . "<br><br><hr>";
			

				echo "<b><h3>Porcentajes de estudio</h3></b>";

			echo "<h4>total Menores Edad:   " . $menoresEdad . "<br>";
			echo "<h4>Porcentaje Brasileños:   " . $porcentajeBrasilenos . "<br>";
			echo "<h4>Porcentaje Colombianos:   " . $porcentajeColombianos . "<br>";
			echo "<h4>Porcentaje Argentinos:   " . $porcentajeArgentinos  . "<br><br>";


		?>
	</center>
	</div>

</body>
</html>
