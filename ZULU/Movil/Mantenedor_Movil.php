<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Móvil</title>
<link href="../Estilos/Estilos.css" rel="stylesheet" type="text/css" />
<link href="../../Estilos/jquery-ui-1.10.4.custom.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../../Efectos/jquery-1.10.2.js"> </script>
</head>

<body>
<?php
	require("../../Clases/zulu.php");
	$bd = new zulu("127.0.0.1","root","","convenio");
	$rs[1]="";
	$rs[2]="";
	if(isset($_REQUEST["btnIngMov"])){
		$num_mov = $_REQUEST["txtNumMov"];
		$due_mov = $_REQUEST["cboDueMov"];
		$cho_mov = $_REQUEST["cboChoMov"];
		$ver = $bd->verificar("select * from movil where num_mov = '$num_mov'");
		if($ver == 0){
			$bd->ingresarMovil($num_mov,$due_mov,$cho_mov);
		}else{
			echo "<div id='mensaje'>Movil registrado con anterioridad</div>";
		}
	}
?>
<div id="superiorMantMovil">	
   	
	</div>
	<div id="centralMantMantMovil">
    	<div id="IndexMenuSuperior">
        	<div id="IndexMenuSuperiorMenu">
        		<div id="menu-wrapper">
                	<ul id="hmenu">
                    	<li style="text-align:center"><a id="hmenu-especial" href="../../Index.html"><label id="menu-home"></label></a></li>                   
                    	<li><a><label id="menu-vales">Vales</label></a>
                        	 	<ul class="sub-menu">
            					<li><a href="../Vales/Ingreso_Vales.php"><label id="menu-vales1">Ingresar Vales</label></a></li>
                				<li><a href="../Listados/Listado_vales.php"><label id="menu-vales2">Listado de Vales</label></a></li>
                				
            				</ul> 
                        </li>
                        <li><a ><label id="menu-chofer">Chofer</label></a>
        				 	<ul class="sub-menu">
            					<li><a href="../Chofer/Mantenedor_Chofer.php"><label id="menu-chofer1">Mantenedor Chofer</label></a></li>
                				
                                <li><a href="../Listados/Listado_chofer.php"><label id="menu-chofer2">Listado de Choferes</label></a></li>
            				</ul>   
                        </li>   
                        <li><a ><label id="menu-movil">M&oacute;vil</label></a>
        				 	<ul  class="sub-menu">
            					<li><a href="Mantenedor_Movil.php"><label id="menu-movil1">Mantenedor M&oacute;vil</label></a></li>
                			
                                <li><a href="../Listados/Listado_moviles.php"><label id="menu-movil2">Listado de M&oacute;viles</label></a></li>
            				</ul>   
                        </li>
                        <li><a><label id="menu-empresa">Empresas</label></a>
                        	<ul  class="sub-menu">
            					<li><a href="../Empresas/Mantenedor_Empresas.php"><label id="menu-empresa1">Mantenedor Empresa</label></a></li>
                			
                                <li><a href="../Listados/Listado_empresas.php"><label id="meun-empresa2">Listado de Empresas</label></a></li>
            				</ul> 
                        </li>                    
                </div>
            </div>
        </div>
    
    
    
		<div id="formularioMantUserAdmin" class="formularioMantenedor"> 
         
			<form target="Mantenedor_Movil.php" method="post">
			<div class="claseFormularioTitulo">
				<label>Móviles</label>	
			</div>
			<div class="claseFormularioItems">
				<label id="lblNumMov">N° de Móvil</label>         
				<input type="text" name="txtNumMov" id="txtNumMov" value="<?php echo $rs[1]?>" required="required">
			</div>
			<div class="claseFormularioItems">
				<label id="lblDueMov">Dueño</label>           
				<select id="cboDueMov" name="cboDueMov">
                	<?php $bd->cargarComboChofer($rs[1]); ?>
                </select>			
			</div>
			<div class="claseFormularioItems">
				<label id="lblChoMov">Chofer</label>               
				<select id="cboChoMov" name="cboChoMov">
                	<?php $bd->cargarComboChofer($rs[2]); ?>
                </select>
			</div>
			<div class="claseFormularioItemsBotonMovil">
					<input type="submit" name="btnIngMov" id="btnIngCho" value="Ingresar">
                    <input type="submit" name="btnModMov" id="btnModCho" value="Modificar">
                    <input type="submit" name="btnEliMov" id="btnEliCho" value="Eliminar">
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