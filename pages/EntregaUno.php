<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Práctica PHP</title>
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
<!-- sección Prácticas en clase -->
	

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 style="font-family: Century arial; text-align: center; color: white;">Ejercicios clase PHP</h3>
			<div class="panel-group">
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse6">Práctica Descuento Empleado</a>
			      </h4>
			    </div>
			    <div id="collapse6" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">

						<?php
                        //Obtengo la balora
	                        $BalotaObtenida = rand(1,5);
	                        
	                        //Valor de la compra
	                        setlocale(LC_MONETARY, 'en_US');    
	                        $valorCompra = rand(0,1000000);

	                        //balotas
	                        $azul = 1;
	                        $verde = 2;
	                        $naraja = 3;
	                        $roja = 4;

	                        //descuento
	                        $descAzul = $valorCompra*0.05;
	                        $descVerde = $valorCompra*0.1;
	                        $descNaranja = $valorCompra*0.2;
	                        $descRoja = $valorCompra*0.5;

	                        //total
	                        $totalAzul = $valorCompra-$descAzul;
	                        $totalVerde = $valorCompra-$descVerde;
	                        $totalNaranja = $valorCompra-$descNaranja;
	                        $totalRojo = $valorCompra-$descRoja;


	                        
	                        switch($BalotaObtenida){

	                            case $azul:
	                            
	                                echo nl2br("Su factura es:\n Valor Compra: ".$valorCompra."\n Descuento: 5%\n Valor descuento: ".$descAzul."\n Valor a pagar es: ".$totalAzul);
	                            break;

	                            case $verde:
	                                echo nl2br("Su factura es:\n Valor Compra: ".$valorCompra."\n Descuento: 10%\n Valor descuento: ".$descVerde."\n Valor a pagar es: ".$totalVerde);
	                            break;

	                            case $naraja:
	                                echo nl2br("Su factura es:\n Valor Compra: ".$valorCompra."\n Descuento: 20%\n Valor descuento: ".$descNaranja."\n Valor a pagar es: ".$totalNaranja);
	                            break;

	                            case $roja:
	                                echo nl2br("Su factura es:\n Valor Compra: ".$valorCompra."\n Descuento: 50%\n Valor descuento: ".$descRoja."\n Valor a pagar es: ".$totalRojo);
	                            break;

	                            default:
	                                echo nl2br("Su factura es:\n Valor Compra: ".$valorCompra."\n Descuento: 0%\n Valor descuento: 0\n Valor a pagar es: ".$valorCompra);
	                                break;

	                        }
	                    ?>

					</div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse7">Tablas de Multiplicar</a>
			      </h4>
			    </div>
			    <div id="collapse7" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      	<div class="panel-body">
						<table border="1px solid black" style="width:50%;margin-top: inherit; margin: 0 auto;">

						<?php for($i=1;$i<11;$i++): ?>
					      		<tr>
					      			<?php for($j=1;$j<11;$j++): ?>
					      				<td>
					      					<?php echo $i*$j; ?>
					      				</td>
					      			<?php endfor ?>
					      		</tr>
					      			
					     <?php endfor ?>
						</table>
					</div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	</div>
	
	<br>
	<br>
<!-- sección taller número uno -->
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 style="font-family: Century arial; text-align: center; color: white;">Taller 1 PHP</h3>
			<div class="panel-group">
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Ejercicio 1</a>
			      </h4>
			    </div>
			    <div id="collapse1" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">
							Que calcule el sueldo que le corresponde al trabajador de una empresa que cobra 40.000 euros anuales, el programa debe realizar los cálculos en función de los siguientes criterios:

					<br>a. Si lleva más de 10 años en la empresa se le aplica un aumento del 10%.
					<br>b. Si lleva menos de 10 años pero más que 5 se le aplica un aumento del 7%.
					<br>c. Si lleva menos de 5 años pero más que 3 se le aplica un aumento del 5%.
					<br>d. Si lleva menos de 3 años se le aplica un aumento del 3%.
					<br>
					<hr>


					<b>
						<?php
						$tiempoEmpleado=rand(0,11);
						$cobroAnual=40000;

						if($tiempoEmpleado>10){
							$totalPago=$cobroAnual*0.1;
							echo "Años en la empresa: ".$tiempoEmpleado."<br>";
							echo "Sueldo anual: €40000 <br>";
							echo "Aplica aumento: 10% <br>";
							echo "Total pago anual: €".$totalPago."<br>";
						}

						elseif ($tiempoEmpleado>5 && $tiempoEmpleado<10) {
							$totalPago=$cobroAnual*0.07;
							echo "Años en la empresa: ".$tiempoEmpleado."<br>";
							echo "Sueldo anual: €40000 <br>";
							echo "Aplica aumento: 7% <br>";
							echo "Total pago anual: €".$totalPago."<br>";
						}

						elseif ($tiempoEmpleado>3 && $tiempoEmpleado<5) {
							$totalPago=$cobroAnual*0.05;
							echo "Años en la empresa: ".$tiempoEmpleado."<br>";
							echo "Sueldo anual: €40000 <br>";
							echo "Aplica aumento: 5% <br>";
							echo "Total pago anual: €".$totalPago."<br>";
						}

						elseif ($tiempoEmpleado==1 && $tiempoEmpleado<3) {
							$totalPago=$cobroAnual*0.03;
							echo "Años en la empresa: ".$tiempoEmpleado."<br>";
							echo "Sueldo anual: €40000 <br>";
							echo "Aplica aumento: 5% <br>";
							echo "Total pago anual: €".$totalPago."<br>";
						}

						else {
							echo "Años en la empresa: ".$tiempoEmpleado."<br>";
							echo "Sueldo anual: €40000 <br>";
							echo "Aplica aumento: 0% <br>";
							echo "Total pago anual: €".$cobroAnual;
						}
						?>

					</b>

					</div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Ejercicio 2</a>
			      </h4>
			    </div>
			    <div id="collapse2" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">
						 2.  El gobierno ha implementado como parte de su programa social, un subsidio familiar bajo la siguiente reglamentación:
							<br>a) Las familias que tienen hasta 2 hijos, reciben $70000, las que tienen hasta 3 y 5 reciben $900.00 y las que tienen 6 o más reciben $120000 mensual.
							<br>b) Por cada hijo en edad escolar reciben  $10000 adicionales. Se considera la edad escolar entre 6 y 18 años.
							<br>c) Si la madre de familia fuera viuda, la familia recibe $ 20000 adicionales.
									Determinar el monto mensual que recibirá una familia de acuerdo a su realidad familiar.
							<br>
							<hr>
			
						

							<b>
								<?php
	                 					 $NumeroHijos = rand (1, 6);
										$TotalSubsidio = 0;
										$situacionMadre = rand (1, 3);
									  echo "Familia: Rincon <br>";
										if($situacionMadre = 1){
											$TotalSubsidio = $TotalSubsidio + 20000;
											echo "Madre  viuda suma $20000<br>";
										}
										else if($situacionMadre = 2){
											echo "Madre  soltera <br>";
										}
										else if($situacionMadre = 3){
											echo "Madre  casada <br>";
										}
										if($NumeroHijos > 0 && $NumeroHijos <= 2){
											$TotalSubsidio = $TotalSubsidio + 70000;
										}
										else if($NumeroHijos >= 3 && $NumeroHijos <= 5 ){
											$TotalSubsidio = $TotalSubsidio + 90000;
										}
										else if($NumeroHijos >= 6){
											$TotalSubsidio = $TotalSubsidio + 120000;
										}
										echo "Tiene " . $NumeroHijos . " hijo(s), suma $" . 20000 * $NumeroHijos . "<br>";
										for($i = 1; $i < $NumeroHijos + 1; $i++){
											$edad = rand(1, 20);
											if($edad >= 6 && $edad <= 18){
												$TotalSubsidio = $TotalSubsidio + 10000;
												echo "<br> Hijo " . $i . " tiene una edad de " . $edad . " año(s) suma $10000";
											}
											else{
												echo "<br> Hijo " . $i . " tiene una edad de " . $edad . " año(s)";
											}
										}
										echo "<br>";
										echo "<br>";
										echo "El subsidio total mensual, que va recibir la familia es de <b>" . $TotalSubsidio . "</b>";
								?>
							</b>
						</div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Ejercicio 3</a>
			      </h4>
			    </div>
			    <div id="collapse3" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">

			      		En una Librería han puesto en oferta la venta de cuadernos al por mayor, obsequiando lapiceros Lucas, Cross y/o Novo dependiendo de la cantidad de cuadernos comprados, de la siguiente manera:

							<br>Compra menos que 12, obsequio ninguno.
							<br>Compra no menos que 12 pero menos que 24, obsequio: 1 Lucas por cada 4 cuadernos.
							<br>Compra no menos que 24 pero menos que 36, obsequio: 2 Cross por cada 4 cuadernos.
							<br>Compra no menos que 36, obsequio: 3Novo por cada 4 cuadernos. Adicionalmente 1 Lucas y 1 Cross.
							<br>
							<br>Diseñe un programa que determine cuántos Lapiceros Lucas, Cross y Novo recibe un cliente como obsequio
							<br>
							<hr>
							
							<b>
								<?php 
								
									$librosComprados = rand(0,100);
									$lucas = 0;
									$cross = 0;
									$novo = 0;

									if($librosComprados > 12 && $librosComprados < 24){

										for ($i=1; $i < $librosComprados; $i++) { 
											if($i%4==0){
												$lucas++;
											}	
										}

										echo "Su cantidad de libros comprados fue de: " . $librosComprados . "<br>";
										echo "Su obsequio es de " . $lucas . " lucas";


									}else if($librosComprados >= 24 && $librosComprados < 36){

										for ($i=1; $i < $librosComprados; $i++) { 
											if($i%4==0){
												$lucas++;
												$cross = $cross + 2;
											}	
										}

										echo "Su cantidad de libros comprados fue de: " . $librosComprados . "<br>";
										echo "Su obsequio es de " . $lucas . " lucas y de " . $cross . " cross <br>";


									}elseif ($librosComprados > 36) {

										for ($i=1; $i < $librosComprados; $i++) { 
											if($i%4==0){
												$lucas++;
												$cross++;
												$novo = $novo + 3;
											}	
										}

										echo "Su cantidad de libros comprados fue de: " . $librosComprados . "<br>";
										echo "Su obsequio es de " . $lucas . " lucas, de " . $cross . " cross <br>";
										echo "Y de " . $novo . " novos";

									}else{

										echo "Su cantidad de libros comprados fue de: " . $librosComprados .
											 " y desafortunadamente no obitiene obsequio <br>";

									}
							 ?>
						</b>

			      </div>
			    </div>
			  </div>
				<div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Ejercicio 4</a>
			      </h4>
			    </div>
			    <div id="collapse4" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">
			      
			      		Determinar la cantidad de dinero total que recibirá un trabajador por concepto de su pago normal (48 horas semanales) y de las horas extras trabajadas en una empresa, sabiendo que cuando las horas de trabajo exceden de 48, el resto se consideran horas extras y que estas se pagan al doble de una hora normal cuando no exceden de 8; si las horas extras exceden de 8 se pagan las primeras 8 al doble de lo que se pagan las horas normales y el resto al triple
							<br>
							<hr>
							
							<b>
								<?php 

									$horasTrabajadas = rand(0,100);
									$sueldoOrdinario = 1000000;
									$horasLaborales = 48;
									$valorHora = 10000;
									$salario = 0;
									$horasExtra = 0;


									if($horasTrabajadas > $horasLaborales){
										$horasExtra = $horasTrabajadas - $horasLaborales;

										if($horasExtra <= 8){
											$salario = $sueldoOrdinario + (($valorHora * $horasExtra) * 2);
										}else {
											$salario = $sueldoOrdinario + (($valorHora * $horasExtra) * 3);
										}
									}
									
									echo "Su suelgo ordinario es $" . $sueldoOrdinario . "<br>";
									echo "cantidad de horas extras trabajadas " . $horasExtra . "<br>";
									echo "Total sueldo $" . $salario;
							 	?>
						</b>

			      </div>
			    </div>
			  </div>
				<div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Ejercicio 5</a>
			      </h4>
			    </div>
			    <div id="collapse5" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">
			      
			      		En una playa de estacionamiento cobran $2000 por hora o fracción los días lunes, martes y miércoles, $2500 los días jueves y viernes, $ 3000 los días sábado y Domingo. 
							Se considera fracción de hora cuando haya pasado de 5 minutos. Diseñe un programa que determine cuánto debe pagar un cliente por su estacionamiento en un solo día de la semana. Si el tiempo ingresado es incorrecto imprima un mensaje de error.

							<br>
							<hr>
							
							<b>
								<?php 
								
									$diaSemana = rand(1,7);
									$fraccion = rand(0,59);
									$horasEstacionado = rand(0,24);
									$valorLMM = 2000;
									$valorJV = 2500;
									$valorSD = 3000;
									$valorPagar = 0;

									if($diaSemana <= 3){
										if($fraccion > 5){
											$valorPagar = ($valorLMM * $horasEstacionado) + $valorLMM;
										}else{
											$valorPagar = $valorLMM * $horasEstacionado;
										}

										echo "Valor Hora $" . $valorLMM . " Tiempo de estacionamiento " . $horasEstacionado . ":". $fraccion . " total pagar: $" .$valorPagar ;	

									}elseif ($diaSemana > 3 && $diaSemana <= 5) {
										if($fraccion > 5){
											$valorPagar = ($valorJV * $horasEstacionado) + $valorJV;
										}else{
											$valorPagar = $valorJV * $horasEstacionado;
										}

										echo "Valor Hora $" . $valorJV . " Tiempo de estacionamiento " . $horasEstacionado . ":". $fraccion . " total pagar: $" .$valorPagar ;	

									}else{
										if($fraccion > 5){
											$valorPagar = ($valorSD * $horasEstacionado) + $valorSD;
										}else{
											$valorPagar = $valorSD * $horasEstacionado;
										}

										echo "Valor Hora $" . $valorSD . " Tiempo de estacionamiento " . $horasEstacionado . ":". $fraccion . " total pagar: $" .$valorPagar ;	

									}



								 ?>
						</b>


			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>