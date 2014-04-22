<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
require("../../Clases/reportes.php");
$bd = new reporte("127.0.0.1","root","","convenio");
$cant_zul = $bd->calculos("select count(id_zulu) from zulu");
?>
<head>
<style>
#contenedor{
	width: 80%;
	margin: auto;	
}
#tabla1{
	width: 90%;
	border: 1px solid black;
	text-align: center;
	margin: auto;	
}
#tabla1 caption{
	font-size: 25px;
	font-weight: bold;
	color: #666;
}
#tabla1 th{
	font-size: 15px;
	background-color:#FF9900;
	color: white;
	font-weight: bold;	
	border-left: 1px solid black;
}
#tabla1 td{
	border-left: 1px solid black;	
}
.totales{
	text-align: center;
	font-weight: bold;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Estilos/Estilos.css" rel="stylesheet" type="text/css" />
<title>Listado Empresas</title>
</head>

<body>
<div id="superiorMantEmpresas">	
   		
	</div>
	<div id="centralMantMantEmpresas">
    
        	<div id="IndexMenuSuperior">
        	<div id="IndexMenuSuperiorMenu">
        		<div id="menu-wrapper">
                	<ul id="hmenu">
                    	<li style="text-align:center"><a id="hmenu-especial" href="../../Index.html"><label id="menu-home"></label></a></li>                   
                    	<li><a ><label id="menu-vales">Vales</label></a>
                        	 	<ul class="sub-menu">
            					<li><a href="../Vales/Ingreso_Vales.php"><label id="menu-vales1">Ingresar Vales</label></a></li>
                				<li><a href="Listado_vales.php"><label id="menu-vales2">Listado de Vales</label></a></li>
                				
            				</ul> 
                        </li>
                        <li><a ><label id="menu-chofer">Chofer</label></a>
        				 	<ul class="sub-menu">
            					<li><a href="../Chofer/Mantenedor_Chofer.php"><label id="menu-chofer1">Mantenedor Chofer</label></a></li>
                				
                                <li><a href="Listado_chofer.php"><label id="menu-chofer2">Listado de Choferes</label></a></li>
            				</ul>   
                        </li>   
                        <li><a ><label id="menu-movil">M&oacute;vil</label></a>
        				 	<ul  class="sub-menu">
            					<li><a href="../Movil/Mantenedor_Movil.php"><label id="menu-movil1">Mantenedor M&oacute;vil</label></a></li>
                			
                                <li><a href="Listado_moviles.php"><label id="menu-movil2">Listado de M&oacute;viles</label></a></li>
            				</ul>   
                        </li>
                        <li><a ><label id="menu-empresa">Empresas</label></a>
                        	<ul  class="sub-menu">
            					<li><a href="../Empresas/Mantenedor_Empresas.php"><label id="menu-empresa1">Mantenedor Empresa</label></a></li>
                			
                                <li><a href="Listado_empresas.php"><label id="meun-empresa2">Listado de Empresas</label></a></li>
            				</ul> 
                        </li>                    
                </div>
            </div>
        </div>
		<div id="ListadoSuperior">
		Filtros:
		</div>
		<div id="ListadoCentralEmpresas">
			<?php
				$bd->listarEmpresa();
			?>	
            <label>Zulus Registradas</label><input type="text" value="<?php echo $cant_zul?>" class="totales"	readonly="readonly"	name="cant_cho" />			
		</div>
      	<div id="">
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