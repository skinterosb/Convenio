<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuario Administrador</title>
<link href="../../Estilos/jquery-ui-1.10.4.custom.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../../Efectos/jquery-1.10.2.js"> </script>
<script type="text/javascript" src="../../Efectos/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="../../Efectos/jquery.Rut.min.js"></script>
<script type="text/javascript" src="../../Efectos/user_admin.js"></script>
<link href="../Estilos/Estilos.css" rel="stylesheet" type="text/css" />
<?php
	require("../../Clases/zulu.php");
	$bd = new zulu("127.0.0.1","root","","convenio");
	if(isset($_REQUEST["btnIngUser"])){
		$log_user = $_REQUEST["txtLogUser"];
		$pas_user = $_REQUEST["txtPasUser"];
		$nom_user = $_REQUEST["txtNomUser"];
		$ape_user = $_REQUEST["txtApeUser"];
		$cel_user = $_REQUEST["txtCelUser"];
		$ema_user = $_REQUEST["txtEmaUser"];
		$ver = $bd->verificar("select * from user_admin where log_user = '$log_user'");
		if($ver == 0){
			$bd->ingresarUsuario_admin($log_user,$pas_user,$nom_user,$ape_user,$cel_user,$ema_user);
		}else{
			echo "<div id='mensaje'>Nombre De Usuario Registrado Con Anterioridad</div>";
		}
	}
?>
</head>

<body>
<div id="superiorMantUserAdmin">	
   	
	</div>
	<div id="centralMantUserAdmin">
		<div id="formularioMantUserAdmin" class="formularioMantenedor">  
			<form target="Mantenedor_UserAdmin.php" method="post">
			<div class="claseFormularioTitulo">
				<label>Usuarios Administradores</label>	
			</div>
			<div class="claseFormularioItems">
				<label id="lblLogUser">Login</label>
                
				<input type="text" name="txtLogUser" id="txtLogUser">
			</div>
			<div class="claseFormularioItems">
				<label id="lblPasUser">Password</label>
                
				<input type="text" name="txtPasUser" id="txtPasUser">				
			</div>
			<div class="claseFormularioItems">
				<label id="lblNomUser">Nombre</label>
               
				<input type="text" name="txtNomUser" id="txtNomUser">
			</div>
			<div class="claseFormularioItems">
				<label id="lblApeUser">Apellido</label>
                 
				<input type="text"  name="txtApeUser" id="txtApeUser" >
			</div>
			<div class="claseFormularioItems">
					<label id="lblCelUser">N° Contacto</label>
                  
					<input type="text" name="txtCelUser" id="txtCelUser">
			</div>
			<div class="claseFormularioItems">
					<label id="lblEmaUser">Correo Electronico</label>
					<input type="email" name="txtEmaUser" id="txtEmaUser">
			</div>
			<div class="claseFormularioItemsBoton">
					<input type="submit" name="btnIngUser" id="btnIngUser" value="Ingresar">
                    <input type="submit" name="btnModUser" id="btnModUser" value="Modificar">
                    <input type="submit" name="btnEliUser" id="btnEliUser" value="Eliminar">
			</div>
		</form>
		</div>
	</div>
	<div id="inferiorMantEmpresas">
		
	</div>
</body>
</html>