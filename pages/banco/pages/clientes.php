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

<form class="form-horizontal animated fadeInDown retraso-animate-1 center-block text-center" method="post" action="../controllers/listarClientes.php" >
		<fieldset>

			<legend class="text-center color-blanco">Formulario Solicitud Crédito</logend>
			<br>
			<br>

			<div class="form-group">
				<label class="col-md-4 control-label color-blanco">Estado Credito Cliente</label>
				<div class="col-md-4">
					<select class="form-control selectpicker" name="estadoCredito">
						<option value="1">Aprobado</option>
						<option value="2">Rechazado</option>
					</select>
				</div>
			</div>

			<div class="form-group text-center">
		
			    <button id="btn_registrar" type="submit" class="btn btn-success">Buscar</button>
			    <a href="index.php" name="btn_cancelar" class="btn btn-danger">Cancelar</a>
			</div>

		</fieldset>
	</form>

</body>
</html>