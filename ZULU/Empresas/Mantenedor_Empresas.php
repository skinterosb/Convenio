<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mantenedor Empresas</title>
<link href="../Estilos/Estilos.css" rel="stylesheet" type="text/css" />
<link href="../../Estilos/jquery-ui-1.10.4.custom.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../../Efectos/jquery-1.10.2.js"> </script>
<script type="text/javascript" src="../../Efectos/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="../../Efectos/jquery.Rut.min.js"></script>
<script type="text/javascript" src="../../Efectos/zulu.js"></script>
<?php
	require("../../Clases/zulu.php");
	$bd = new zulu("127.0.0.1","root","","convenio");
	
?>
</head>
<body>
	<div id="superiorMantEmpresas">	
    
	</div>
	<div id="centralMantEmpresas">
    	<div id="IndexMenuSuperior">
        	<div id="IndexMenuSuperiorMenu">
        		<div id="menu-wrapper">
                	<ul id="hmenu">
                    	<li style="text-align:center"><a id="hmenu-especial" href="../../Index.html"><label id="menu-home"></label></a></li>                   
                    	<li><a ><label id="menu-vales">Vales</label></a>
                        	 	<ul class="sub-menu">
            					<li><a href="../Vales/Ingreso_Vales.php"><label id="menu-vales1">Ingresar Vales</label></a></li>
                				<li><a href="../Listados/Listado_vales.php"><label id="menu-vales2">Listado de Vales</label></a></li>
                				
            				</ul> 
                        </li>
                        <li><a><label id="menu-chofer">Chofer</label></a>
        				 	<ul class="sub-menu">
            					<li><a href="../Chofer/Mantenedor_Chofer.php"><label id="menu-chofer1">Mantenedor Chofer</label></a></li>
                				
                                <li><a href="../Listados/Listado_chofer.php"><label id="menu-chofer2">Listado de Choferes</label></a></li>
            				</ul>   
                        </li>   
                        <li><a><label id="menu-movil">M&oacute;vil</label></a>
        				 	<ul  class="sub-menu">
            					<li><a href="../Movil/Mantenedor_Movil.php"><label id="menu-movil1">Mantenedor M&oacute;vil</label></a></li>
                			
                                <li><a href="../Listados/Listado_moviles.php"><label id="menu-movil2">Listado de M&oacute;viles</label></a></li>
            				</ul>   
                        </li>
                        <li><a ><label id="menu-empresa">Empresas</label></a>
                        	<ul  class="sub-menu">
            					<li><a href="Mantenedor_Empresas.php"><label id="menu-empresa1">Mantenedor Empresa</label></a></li>
                			
                                <li><a href="../Listados/Listado_empresas.php"><label id="meun-empresa2">Listado de Empresas</label></a></li>
            				</ul> 
                        </li>                    
                </div>
            </div>
        </div>
    
		<div id="formularioMantEmpresas" class="formularioMantenedor">  
			<form target="mantenedorEmpresas.php" method="post">
			<div class="claseFormularioTitulo">
				<label>Empresas</label>	
			</div>
			<div class="claseFormularioItems">
				<label id="lblRutEmp">Rut</label>
                
				<input type="text" name="txtRutEmp" id="txtRutEmp">
			</div>
			<div class="claseFormularioItems">
				<label id="lblRazEmp">Razón Social</label>
                
				<input type="text" name="txtRazEmp" id="txtRazEmp">				
			</div>
			<div class="claseFormularioItems">
				<label id="lblDirEmp">Dirección</label>
               
				<input type="text" name="txtDirEmp" id="txtDirEmp">
			</div>
			<div class="claseFormularioItems">
				<label id="lblNumEmp">N° de Contacto</label>
                 
				<input type="text"  name="txtNumEmp" id="txtNumEmp" >
			</div>
			<div class="claseFormularioItems">
					<label id="lblMesEmp">Meses de Convenio</label>
                  
					<input type="text" name="txtMesEmp" id="txtMesEmp">
			</div>
			<div class="claseFormularioItems">
					<label id="lblImaEmp">Imagen</label>
					<input type="file" name="txtImaEmp" id="txtImaEmp">
			</div>
			<div class="claseFormularioItems">
					<label id="lblWebEmp"> Sitio Web</label>
					<input type="url" name="txtWebEmp" id="txtWebEmp">
			</div>	
			<div class="claseFormularioItemsBoton">
					<input type="submit" name="btnIngUsu" id="btnIngUsu" value="Ingresar">
                    <input type="submit" name="btnModUsu" id="btnModUsu" value="Modificar">
                    <input type="submit" name="btnEliUsu" id="btnEliUsu" value="Eliminar">
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