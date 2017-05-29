<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Formulario Credito</title>
</head>
<body background="img/fondo.jpg">
	<nav class="padding-largo text-center">
		<ul class="no-lista">
			<li class="col-md-6 inline-block"><a href="index.php" class="pacifico ">Digital Banking</a></li>
			<li class="col-md-6 inline-block"><a href="contacto.php" class="pacifico ">Contacto</a></li>
		</ul>
	</nav>

	<div class="font-mediana animated fadeInDown retraso-animate-1 center-block text-center espacio-arriba quitar-float">

		<h1 class="text-center negrilla  pacifico">Formulario Solicitud Crédito</h1>

		<form method="post" name="frm" action="resultado.php" >

		<section>

			<div class="col-md-6 inline-block hacia-arriba">

				<div class="form-group pacifico">
					<label class="control-label">Nombre Completo</label>
					<input type="text" class="form-control"  name="nombre" required="true">

				</div>

				<div class="form-group pacifico">
					<label>Cédula Ciudadania</label>
					<input type="number" class="form-control" name="cedula" required="true">
				</div>

				<div class="form-group pacifico">
					<label>Teléfono</label>
					<input type="number" class="form-control" name="telefono" required="true">
				</div>

				<div class="form-group pacifico">
					<label>Genero</label>
					<div class="radio">
				   		<label class="radio-inline"><input type="radio" name="genero" value="1" checked="">Femenino</label>
						<label class="radio-inline"><input type="radio" name="genero" value="2">Masculino</label>
				    </div>
				</div>

				<div class="form-group pacifico">
					<label>Salario</label>
					<input type="number" class="form-control" name="salario" required="true">
				</div>

			</div>

		</section>

		<section>
			<div class="col-md-6 inline-block hacia-arriba">
				<div class="form-group pacifico">
				<label>Credito</label>
					<select class="form-control selectpicker" name="credito">
						<option value="1">Libre Inversión 1.69</option>
						<option value="2">Vivienda 1.50</option>
						<option value="3">Educacion 1.50</option>
						<option value="4">Vehiculo 1.8</option>
						<option value="5">Otro</option>
					</select>
					<label>En caso de seleccionar otro</label>
					<input type="text" class="form-control" name="otroPorcentaje" placeholder="Solo número entero o decimal">
				</div>

				<div class="form-group pacifico">
					<label>Valor solicitado</label>
					<input type="number" class="form-control" name="valor" required="true">
				</div>

				<div class="form-group pacifico">
					<label>Plazo Credito</label>
					<select class="form-control selectpicker" name="plazo" required="true">
						<option value="12">1 año</option>
						<option value="24">2 años</option>
						<option value="36">3 años</option>
						<option value="48">4 años</option>
						<option value="60">5 años</option>
					</select>
				</div>
			</div>
		</section>

		<div class="form-group pacifico">
			<input type="submit" value="Enviar" class="btn btn-info text-center button" >
		</div>

		</form>
		
	</div>
</body>
</html>