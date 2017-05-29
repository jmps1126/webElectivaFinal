<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
<link rel="stylesheet" href="/css/main.css" />
<link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
<title>Add new user</title>
</head>
<body background="../../img/intro-bg.jpg">
	<div class="col-md-4 center-block text-center" style="margin-top: 50px; float:none;">

		<div>
			<h3 class="text-center" style="color: white;">INICIAR SESIÓN</h3>
			<br>
		    <form method="POST" action='validarUsuario.php'>
			    
			     <div class=" form-group " style="color: white;">
			        <label>Usuario Acesso</label><input type="text" name="usuarioacceso" class="form-group tex-center form-control" style="color: white;"/>
			      </div>
			      	
			      <div class=" form-group " style="color: white;">
			        <label>Clave Acesso</label><input type="password" name="claveacceso" class="form-group tex-center form-control" style="color: white;"/>
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