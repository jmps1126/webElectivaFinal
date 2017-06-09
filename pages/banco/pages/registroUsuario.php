<!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../../css/main.css" />
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="../../../img/intro-bg.jpg">
<script>

	function validate(){
		identificacion = document.getElementById("identificacion").value;
		usuarioAcceso = document.getElementById("usuarioAcceso").value;
		nombre = document.getElementById("nombre").value;
		claveAcceso = document.getElementById("claveAcceso").value;

		if( identificacion == null || identificacion.length == 0 || /^\s+$/.test(identificacion)
				||	usuarioAcceso == null || usuarioAcceso.length == 0 || /^\s+$/.test(usuarioAcceso)
				||	nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)
				||	claveAcceso == null || claveAcceso.length == 0 || /^\s+$/.test(claveAcceso)	 ) {
			alert("Todos los campos son obligatorios");
		  return false;

		}else if( isNaN(identificacion) ) {

			alert("El campo identificación solo admite números");
 			 return false;
		}else{
			return true;
		}

	}
</script>
	<form class="form-horizontal" method="post" action="../controllers/validarRegistroUsuario.php" onsubmit="return validate();">
		<fieldset>

		<!-- Form Name -->
		<legend class="color-blanco text-center">REGISTRO USUARIO</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label color-blanco" for="identificacion">Identificación</label>  
		  	<div class="col-md-5">
		  		<input id="identificacion" name="identificacion" type="text" placeholder="Ingrese su número de identificación" class="form-control input-md">
		  	</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label color-blanco" for="nombre">Nombre Completo</label>  
			  <div class="col-md-5">
			  	<input id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre completo" class="form-control input-md">
			  </div>
		</div>

		

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label color-blanco" for="usuarioAcceso">Usuario Sistema</label>  
		  <div class="col-md-5">
		  <input id="usuarioAcceso" name="usuarioAcceso" type="text" placeholder="Ingrese el Usuario a utilizar en el sistema" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label color-blanco" for="claveAcceso">Contraseña</label>  
		  <div class="col-md-5">
		  <input id="claveAcceso" name="claveAcceso" type="password" placeholder="Ingrese su contraseña" class="form-control input-md">
		    
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group text-center">
		  <label class="col-md-4 control-label" for="enviar"></label>
		  <div class="col-md-4">
		    <button id="enviar" name="enviar" class="btn btn-success">Registrar</button>
		    <a href="loggin.php" class="btn btn-warning" role="button">Cancelar</a>
		  </div>
		</div>

		</fieldset>
	</form>
</body>
</html>