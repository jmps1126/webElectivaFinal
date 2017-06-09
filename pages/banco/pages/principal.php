<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../../css/main.css">
	<link rel="stylesheet" href="../../../css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Formulario Credito</title>
</head>
<body background="../../../img/intro-bg.jpg">

	<form class="form-horizontal animated fadeInDown retraso-animate-1 center-block text-center" method="post" action="resultado.php" >
		<fieldset>

			<legend class="text-center color-blanco">Formulario Solicitud Crédito</logend>

			<div class="form-group">
			<label class="col-md-4 control-label color-blanco" for="lblcedula">Cédula Ciudadania</label>
				<div class="col-md-4">
					<input type="number" id="lblcedula" class="form-control input-md" name="cedula" required="">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label color-blanco">Nombre Completo</label>
				<div class="col-md-4">
					<input type="text" class="form-control input-md"  name="nombre" required="">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label color-blanco">Genero</label>
				<div class="col-md-4">
					<div class="radio">
						<label class="radio-inline"><input type="radio" name="genero" value="F" checked="">Femenino</label>
						<label class="radio-inline"><input type="radio" name="genero" value="M">Masculino</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label color-blanco">Salario</label>
				<div class="col-md-4">
				<input type="number" class="form-control input-md" name="salario" required="">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label color-blanco">Credito</label>
				<div class="col-md-4">
					<select class="form-control selectpicker" name="credito">
						<option value="1">Libre Inversión 1.69</option>
						<option value="2">Vivienda 1.50</option>
						<option value="3">Educacion 1.50</option>
						<option value="4">Vehiculo 1.8</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label color-blanco">Valor solicitado</label>
					<div class="col-md-4">
						<input type="number" class="form-control input-md" name="valor" required="">
					</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label color-blanco">Plazo Credito</label>
				<div class="col-md-4">
					<select class="form-control selectpicker" name="plazo" required="true">
						<option value="12">1 año</option>
						<option value="24">2 años</option>
						<option value="36">3 años</option>
						<option value="48">4 años</option>
						<option value="60">5 años</option>
					</select>
				</div>
			</div>


			<div class="form-group text-center">
		
			    <button id="btn_registrar" type="submit" class="btn btn-success">Enviar</button>
			    <a href="index.php" name="btn_cancelar" class="btn btn-danger">Cancelar</a>
			</div>

		</fieldset>
	</form>
</body>
</html>