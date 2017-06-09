<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../../css/main.css">
	<link rel="stylesheet" href="../../../css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Detalle Crédito</title>
</head>
<body background="../../../img/intro-bg.jpg">

<form class="form-horizontal animated fadeInDown retraso-animate-1 center-block text-center" method="post" action="../controllers/DetalleCredito.php" >
		<fieldset>

			<legend class="text-center color-blanco">Formulario Detalle Crédito</logend>
			<br>
			<br>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label color-blanco" for="identificacion">Identificación</label>  
			  	<div class="col-md-5">
			  		<input id="identificacion" name="identificacion" type="number" required="" placeholder="Ingrese su número de identificación" class="form-control input-md">
			  	</div>
			</div>

			<div class="form-group text-center">
		
			    <button id="btn_registrar" type="submit" class="btn btn-success">Buscar</button>
			    <a href="../controllers/detalleCredito.php" name="btn_cancelar" class="btn btn-danger">Cancelar</a>
			</div>

		</fieldset>
	</form>

</body>
</html>