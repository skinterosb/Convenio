<?php
	date_default_timezone_set("Chile/Continental");
	require("../../Clases/zulu.php");
	$bd = new zulu("127.0.0.1","root","","convenio");
	if(isset($_REQUEST["b"])){
		$bd->filtrarMovil($_REQUEST["b"]);
	}
	if(isset($_REQUEST["btnIngVal"])){
		/*Si se ha presionad el boton btnIngVal se debe preguntar por los daos de dueño y chofer*/			
		
		$fec_ing = date('o/m/d');
		$fec_val = $_REQUEST["txtIngFecVal"];
		$mov_val = $_REQUEST["txtIngMovVal"];
		$cho_val = $_REQUEST["cboIngChoVal"];
		$due_val = $_REQUEST["txtIngPorDueVal"];
		$num_val = $_REQUEST["txtIngTicVal"];
		$zul_val = $_REQUEST["txtIngZulVal"];
		$rec_val = $_REQUEST["txtIngRecIniVal"];
		$esp_val = $_REQUEST["cboIngHorVal"]+":"+$_REQUEST["cboIngMinVal"];
		$bru_val = $_REQUEST["txtIngViajVal"];
		/*$tot_cho_val = $_REQUEST["txtIngPorcentajeChoVal"];
		$tot_mov_val = $_REQUEST["txtIngPorcentajeMovVal"];
		$tot_gan_val = $_REQUEST["txtIngTotalZulVal"];*/
		
		$bd->ingresarVale($fec_ing,$fec_val,$mov_val,$cho_val,$due_val,$num_val,$zul_val,$rec_val,$esp_val,$bru_val);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso de Vales</title>
<link href="../Estilos/Estilos.css" type="text/css" rel="stylesheet"/>
<link href="../../Estilos/jquery-ui-1.10.4.custom.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../../Efectos/jquery-1.10.2.js"> </script>
<script type="text/javascript" src="../../Efectos/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="../../Efectos/vale.js"></script>
<script type="text/javascript" src="../../Efectos/vale-calculos.js"></script>
</head>
<body>
<div id="superiorIngVales">	
		 <div id="superior1">
         	 <label id="lblFecActVal1">Usuario</label>
         </div>
		 <div id="superior2">
    	 <label id="lblFecActVal1">Fecha Actual</label>
         <label id="lblFecActVal2"><?php echo date('d/m/o') ?></label>	
         </div>
         
	</div>
	<div id="centralIngVales">
    	
    <div id="IndexMenuSuperior">
        	<div id="IndexMenuSuperiorMenu">
        		<div id="menu-wrapper">
                	<ul id="hmenu">
                    	<li style="text-align:center"><a id="hmenu-especial" href="../../Index.html"><label id="menu-home"></label></a></li>                   
                    	<li><a ><label id="menu-vales">Vales</label></a>
                        	 	<ul class="sub-menu">
            					<li><a href="Ingreso_Vales.php"><label id="menu-vales1">Ingresar Vales</label></a></li>
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
                        <li><a><label id="menu-empresa">Empresas</label></a>
                        	<ul  class="sub-menu">
            					<li><a href="../Empresas/Mantenedor_Empresas.php"><label id="menu-empresa1">Mantenedor Empresa</label></a></li>
                			
                                <li><a href="../Listados/Listado_empresas.php"><label id="meun-empresa2">Listado de Empresas</label></a></li>
            				</ul> 
                        </li>                    
                </div>
            </div>
        </div>
    	
    
    
		<div id="formularioIngVales" class="formularioMantenedorVales">  
			<form action="Ingreso_Vales.php" method="post">
						<div class="claseFormularioTitulo"> 
                       	 <label>Ingreso de Vales</label>
                        
                        </div>
                        <div id="bloqueVal1">
                        	<div id="1" class="claseblock">
                            	<label id="lblIngFecVal">Fecha de Vale</label>
                                <input type="date" name="txtIngFecVal" id="txtIngFecVal" />
                            </div>
                            <div id="2" class="claseblock" >
                            	<label id="lblIngTicVal">N° Vale</label>
                                <input type="text" name="txtIngTicVal" id="txtIngTicVal" min="1"  />
                          		  
                            </div>
                            <div id="3" class="claseblock" >
                            	<label id="lblIngMovVal">Móvil</label>
                                <input type="text" name="txtIngMovVal" id="txtIngMovVal" min="1" max="200" />
                            </div>
                        </div>
                        <div id="bloqueVal2">
                        	<div id="4" class="claseblock">
                            <section>
                            	<label id="lblIngDueVal">Due&ntilde;o</label>
                                <input type="text" name="txtIngDueVal" id="txtIngDueVal" disabled="disabled" />
                                </section>
                                
                                		<label id="lblIngPorDueVal">Porcentaje</label>
                                        <input type="hidden" name="txtIngPorDueVal" id="txtIngPorDueVal"  />
                                </section>                         
                            </div>
                            <div id="5" class="claseblock" >
                            	<section>
                            		<select id="cboIngChoVal" name="cboIngChoVal">
                                    
                                    </select>
                            	</section>
                            </div>
                            <div id="6" class="claseblock">
                           		 <label id="lblIngZulVal">ZULU</label>
                                 <select id="txtIngZulVal" name="txtIngZulVal">
                                 	<?php
										$bd->cargarComboEmpresa();
									?>
                                 </select>
                           </div> 
                         
                        </div>
                        <div id="bloqueVal3">
                        	
                            
                            <div id="7" class="claseblockspecial" >
                            	<section>
                            	  	<label id="lblIngRecVal">Inicio Recorrido </label>
                                  	<input type="text" name="txtIngRecIniVal" id="txtIngRecIniVal"  />
                                  <input type="button" name="btnIngAddRecIniVal" id="btnIngAddRecIniVal" value="+"/>
                                    
                                  </section>                               
                            </div>
                            
                            <div id="bloqueIngRecIniVal">
                            	<input type="text" name="txtIngRecNueVal" id="txtIngRecNueVal" />
                                <input type="button" name="btnIngRecNueVal" id="btnIngRecNueVal" value="Agregar Recorrido" />
                            </div>    
                                   <div id="11" class="claseblock">
                             	 <label id="lblIngTieVal">T° Espera</label>
                                   <select name="cboIngHorVal" id="cboIngHorVal">
                                  	<option value="0">0</option>
                                  	<option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">24</option>
                                  </select>
                                  <select name="cboIngMinVal" id="cboIngMinVal">
                                  	<option value="0">0</option>
                                  	<option value="1">15</option>
                                    <option value="2">30</option>
                                    <option value="3">45</option>
                                  </select>
                            </div>       
                        </div>
                        <div id="bloqueVal4">
                         <div id="8" class="claseblockspecial" >                                                   
                            <section>                          	  
                                  	<input type="text" name="txtIngRecFinVal" id="txtIngRecFinVal" disabled="disabled" />
                             </section>                           
                            </div>                                            
                        	
                           <div id="7" class="claseblock" >
                            	 <section>
                                		<label id="lblIngViajVal">Valor Viaje</label>
                                        <input type="text" name="txtIngViajVal" id="txtIngViajVal" />
                                </section>
                            </div>
                          
                        </div>
                      
                         <div id="bloqueVal9">
                        	
                            <div id="25" class="claseFormularioItemsBoton" >
                                  <input type="submit" name="btnIngVal" id="btnIngVal"  value="Ingresar"  />
                                  <input type="reset" name="btnLimVal" id="btnLimVal"  value="Limpiar"  />
                            </div>
                           
                         
                        </div>
                        
             </form>
	</div>
     <div id="listadoVales">
    	<div id="listadoTitulo">
        	<label> Listado de Vales Ingresados</label>
        </div>
        <div id="listadoDatos">
        	
        	<!--Tabla-->
        </div>
    
    
    </div>
<div class="claseInferiorMantenedores2">
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