<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chofer</title>
<link href="../Estilos/Estilos.css" rel="stylesheet" type="text/css" />
<link href="../../Estilos/jquery-ui-1.10.4.custom.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../../Efectos/jquery-1.10.2.js"> </script>
<script type="text/javascript" src="../../Efectos/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="../../Efectos/jquery.Rut.min.js"></script>
<script type="text/javascript" src="../../Efectos/chofer.js"></script>
</head>
<body>
<?php
	require("../../Clases/zulu.php");
	$bd = new zulu("127.0.0.1","root","","convenio");
	$rut_cho = "";
	if(isset($_REQUEST["btnIngCho"])){
		$rut_cho = $_REQUEST["txtRutCho"];
		$nom_cho = $_REQUEST["txtNomCho"];
		$app_cho = $_REQUEST["txtAppCho"];
		$apm_cho = $_REQUEST["txtApmCho"];
		$dir_cho = $_REQUEST["txtDirCho"];
		$fon_cho = $_REQUEST["txtNumCho"];
		$ema_cho = $_REQUEST["txtEmaCho"];
		$ver = $bd->verificar("select * from chofer where rut_cho = '$rut_cho'");
		if($ver == 0){
			$bd->ingresarChofer($rut_cho,$nom_cho,$app_cho,$apm_cho,$dir_cho,$fon_cho,$ema_cho);
		}else{
			echo "<div id='mensaje'>Rut registrado con anterioridad</div>";
		}
		
	}
	if(isset($_REQUEST["btnModCho"])){
		$rut_cho = $_REQUEST["txtRutCho"];
		$dir_cho = $_REQUEST["txtDirCho"];
		$fon_cho = $_REQUEST["txtNumCho"];
		$ema_cho = $_REQUEST["txtEmaCho"];
		$bd->modificarChofer($rut_cho,$dir_cho,$fon_cho,$ema_cho);
	}
	if(isset($_REQUEST["btnEliCho"])){
		$rut_cho = $_REQUEST['txtRutCho'];
		$bd->eliminarChofer($rut_cho);
	}
	
?>
	<div id="superiorMantChofer">	
   		
	</div>
	<div id="centralMantMantChofer">
    
        	<div id="IndexMenuSuperior">
        	<div id="IndexMenuSuperiorMenu">
        		<div id="menu-wrapper">
                	<ul id="hmenu">
                    	<li style="text-align:center"><a id="hmenu-especial" href="../../Index.html"><label id="menu-home"></label></a></li>                   
                    	<li><a ><label id="menu-vales">Vales</label></a>
                        	 	<ul class="sub-menu">
            					<li><a href="Mantenedor_Chofer.php"><label id="menu-vales1">Ingresar Vales</label></a></li>
                				<li><a href="../Listados/Listado_chofer.php"><label id="menu-vales2">Listado de Vales</label></a></li>
                				
            				</ul> 
                        </li>
                        <li><a ><label id="menu-chofer">Chofer</label></a>
        				 	<ul class="sub-menu">
            					<li><a href="Mantenedor_Chofer.php"><label id="menu-chofer1">Mantenedor Chofer</label></a></li>
                				
                                <li><a href="../Listados/Listado_chofer.php"><label id="menu-chofer2">Listado de Choferes</label></a></li>
            				</ul>   
                        </li>   
                        <li><a ><label id="menu-movil">M&oacute;vil</label></a>
        				 	<ul  class="sub-menu">
            					<li><a href="../Movil/Mantenedor_Movil.php"><label id="menu-movil1">Mantenedor M&oacute;vil</label></a></li>
                			
                                <li><a href="../Listados/Listado_moviles.php"><label id="menu-movil2">Listado de M&oacute;viles</label></a></li>
            				</ul>   
                        </li>
                        <li><a ><label id="menu-empresa">Empresas</label></a>
                        	<ul  class="sub-menu">
            					<li><a href="../Empresas/Mantenedor_Empresas.php"><label id="menu-empresa1">Mantenedor Empresa</label></a></li>
                			
                                <li><a href="../Listados/Listado_empresas.php"><label id="meun-empresa2">Listado de Empresas</label></a></li>
            				</ul> 
                        </li>                    
                </div>
            </div>
        </div>
        
        
		<div id="formularioMantUserAdmin" class="formularioMantenedor"> 
         
			<form action="Mantenedor_Chofer.php" method="post">
			<div class="claseFormularioTitulo">
				<label>Choferes</label>	
			</div>
			<div class="claseFormularioItems">
				<label id="lblRutCho">Rut</label>         
				<input type="text" name="txtRutCho" id="txtRutCho" required="required">
			</div>
			<div class="claseFormularioItems">
				<label id="lblNomCho">Nombre</label>           
				<input type="text" name="txtNomCho" id="txtNomCho" required="required">				
			</div>
			<div class="claseFormularioItems">
				<label id="lblAppCho">Apellido Paterno</label>               
				<input type="text" name="txtAppCho" id="txtAppCho" required="required">
			</div>
			<div class="claseFormularioItems">
				<label id="lblApmCho">Apellido Materno</label>
                 
				<input type="text"  name="txtApmCho" id="txtApmCho" required="required">
			</div>
			<div class="claseFormularioItems">
					<label id="lblDirCho">Dirección</label>              
					<input type="text" name="txtDirCho" id="txtDirCho" required="required">
			</div>
			<div class="claseFormularioItems">
					<label id="lblNumCho">N° Contacto</label>
					<input type="text" name="txtNumCho" id="txtNumCho" required="required">
			</div>
            <div class="claseFormularioItems">
					<label id="lblEmaCho">Correo Electrónico</label>
					<input type="text" name="txtEmaCho" id="txtEmaCho" required="required">
			</div>
			<div class="claseFormularioItemsBoton">
					<input type="submit" name="btnIngCho" id="btnIngCho" value="Ingresar">
                    <input type="submit" name="btnModCho" id="btnModCho" value="Modificar">
                    <input type="submit" name="btnEliCho" id="btnEliCho" value="Eliminar">
			</div>
		</form>
		</div>
	</div>
	<div class="claseInferiorMantenedores">
		<section >
        	<span class="claseTextoFoot">Sitio Desarrollado por</span>
        </section>
        <section >
        	<span ><a href="../../Index.html">RadioTaxi ABC</a></span>
            <span >Email radiotaxi@correo.cl</span>
            <span >Contacto XXXXXXX</span>    
        </section>
        <section >
        	<span class="claseTextoFoot">2014</span>
        </section>      
	</div>

</body>
</html>