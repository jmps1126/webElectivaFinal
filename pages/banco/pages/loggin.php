<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../../css/main.css" />
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Add new user</title>
</head>
<body background="../../../img/intro-bg.jpg">


	<script>

		function validate(){
			usuarioAcceso = document.getElementById("usuarioacceso").value;
			claveAcceso = document.getElementById("claveacceso").value;

			if( usuarioAcceso == null || usuarioAcceso.length == 0 || /^\s+$/.test(usuarioAcceso)
					||	claveAcceso == null || claveAcceso.length == 0 || /^\s+$/.test(claveAcceso)) {
				alert("Todos los campos son obligatorios");
			  return false;

			}else{
				return true;
			}

		}
	</script>
	<div class="col-md-4 center-block text-center" style="margin-top: 50px; float:none;">

		<div>
			<h3 class="text-center" style="color: white;">INICIAR SESIÓN</h3>
			<br>
		    <form method="POST" action='../controllers/validarUsuario.php' onsubmit="return validate();">
			    
			     <div class=" form-group " style="color: white;">
			        <label>Usuario Acesso</label><input type="text" id="usuarioacceso" name="usuarioacceso" class="form-group tex-center form-control"/>
			      </div>
			      	
			      <div class=" form-group " style="color: white;">
			        <label>Clave Acesso</label><input type="password" id="claveacceso" name="claveacceso" class="form-group tex-center form-control"/>
			      </div>

			       <div class="form-group">		       
				       	<div class="btn-group">
				            <input type="submit" value="Acceder" class="btn btn-custom btn-lg btn-block"/>
				        </div>
			
			       </div>
	   
		    </form>
		    <a href="registroUsuario.php" class="forgot-password">
                Registrarse
            </a>
		</div>
   </div>  
</body>
</html>