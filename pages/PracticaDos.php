<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Práctica PHP GIT</title>
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
			<h3 style="font-family: Century arial; text-align: center; color: white;">Entrega Dos</h3>
			<div class="panel-group">
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse6">Punto Uno</a>
			      </h4>
			    </div>
			    <div id="collapse6" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">

			      	Un vivero forestal actualiza cada seis meses los precios de la planta que vende en función de los valores oficiales de inflación mensual. Desean desarrollar un programa que proporcione el precio actualizado a partir del precio anterior y los valores de inflación.
			      	<br>
			      	- El siguiente mes el precio a aplicar ya no es el inicial, sino el precio afectado por la inflación.
			      	<br>
					- Además, debe de entregar el valor del mes anterior y cuál es el actual según la inflación.

			      	<br>
			      	<hr>
			      	<br>

						<?php

							for ($i=0; $i < 6 ; $i++) { 
								$precioAnterior = rand(0,1000);
								$inflacionMensual = rand(0,100);

								$valorOficial = $precioAnterior*($i + ($inflacionMensual/100));

								echo "<b>Valores Mes " . ($i+1) . " </b><br>";
								echo "&nbsp;<b>* Valor anterior :</b>" . $precioAnterior . "<br>";
								echo "&nbsp;<b>* Valor Actual Inflación:</b> " . round($valorOficial) . "<br>";
							}
	                    
	                    ?>

					</div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse7">Punto Dos</a>
			      </h4>
			    </div>
			    <div id="collapse7" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      	<div class="panel-body">

			      		Hacer un programa que recoja números hasta que se introduzca un 0 y después devuelva la media de los números introducidos. Mostrar los números, la cantidad y la media.
			      		<br>
			      		<hr>
			      		<br>

							<?php
								$cantNumeros=0;
								$sumaTotal=0;
								$noContinuar=false;
								$media=0;
								
								echo "Cantidad Números Ingresados: ";
								

								while($noContinuar==false){

								    $numero=rand(0,10); 

									if($numero!=0){

										echo " - ".$numero ; 
										$cantNumeros++;
								    	$sumaTotal=$sumaTotal+$numero;
								    	if($sumaTotal!=0){ 
								    		$media=$sumaTotal/$cantNumeros;	
								    	}	
								    	
									} else {

										$noContinuar=true;
									}
								}
	
								echo "<br>Cantidad de números: ". $cantNumeros ."<br>";
								echo "Suma de los números: ".$sumaTotal."<br>";
								echo "La media de los numeros es: ". round($media);	
										
						    ?>
					</div>
			    </div>
			  </div>
			</div>
		
			<div class="panel-group">
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Punto Tres</a>
			      </h4>
			    </div>
			    <div id="collapse1" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">

					Dos números enteros positivos A y B son números amigos si la suma de los divisores propios de A es igual a B y la suma de los divisores propios de B es igual a A.
					<br> Los divisores propios de un número incluyen la unidad, pero no el propio número.
					<br> mostrar los números divisores de cada número y su suma, de acuerdo a esto definir si son amigos o no.

					<br>
					<hr>
					<br>
					
						<?php


							$numA=rand(0,100);
							$numB=rand(0,100);
							$sumaA=0;
							$sumaB=0;


							echo "Numero introducido para A: ".$numA."<br>";

							echo "Divisores para A: ";

							for($i=1;$i<$numA;$i++){  

			        	        if($numA%$i==0){

					                $sumaA=$sumaA+$i;
					                echo " + ".$i;
					            }
						    }

							echo "<br> Suma de los divisores de A: ".$sumaA."<br>";
							echo "<br>";
							echo "Numero introducido para B: ".$numB."<br>";
							echo "Divisores  para B: ";
							
							          
					           for($i=1;$i<$numB;$i++){  
					                if($numB%$i==0){
					                   $sumaB=$sumaB+$i;
					                   echo " + ".$i;

					               }

					           }
							echo "<br> Suma de los divisores B: ". $sumaB ."<br><br>";
							
				            if($sumaA==$sumaB){
				              echo "A y B son amigos";
				           }else{
							  echo "A y B  no son amigos";
							}
					
						?>

					</div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading" style="background-color: #D4D2D2;">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Punto Cuatro</a>
			      </h4>
			    </div>
			    <div id="collapse2" class="panel-collapse collapse" style="background-color: #DFDDDE;">
			      <div class="panel-body">

						 Calcular las calificaciones de un grupo de alumnos N. La nota final de cada alumno se calcula según el siguiente criterio: la parte práctica vale el 60% (esta se compone de 4 notas del 15%); parcial 20% y el final 20%. El algoritmo leerá el alumno, las tres notas, escribirá el resultado. Las notas deben estar entre 0 y 5.  Se debe de mostrar en una tabla todas las notas con su porcentaje y su definitiva.
						<br>
						<hr>
						<br>

						<table border="1px solid black" style="width:50%;margin-top: inherit; margin: 0 auto;">

						<?php 
						    $cantidadEstudiantes = rand(0,20);

             						echo "<td>";
									echo "Alumno ";
									echo "</td>";
									echo "<td>";
									echo "Nota Seguimiento ";
									echo "</td>";
									echo "<td>";
									echo "Nota Parcial ";
									echo "</td>";
									echo "<td>";
									echo "Nota Final ";
									echo "</td>";

							for($i=1;$i<$cantidadEstudiantes;$i++){

								
								$notaSeguimiento1 = rand(0,5);
	             				$notaSeguimiento2 = rand(0,5);
	             				$notaSeguimiento3 = rand(0,5);
	             				$notaSeguimiento4 = rand(0,5);
	             				$notaParcial = rand(0,5);
	             				$notaFinal = rand(0,5);

								echo "<tr>";
									echo "<td>";
									echo $i;
									echo "</td>";
									echo "<td>";
									echo ($notaSeguimiento1 + $notaSeguimiento2 + $notaSeguimiento3 + $notaSeguimiento4)*0.6/4;
									echo "</td>";
									echo "<td>";
									echo $notaParcial*0.2;
									echo "</td>";
									echo "<td>";
									echo $notaFinal*0.2;
									echo "</td>";
								echo "<tr>";
							}
						?>
					   
						</table>

							
						
						</div>
			    	</div>
			 	 </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>