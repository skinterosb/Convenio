<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	require("Clases/zulu.php");
	$bd = new zulu("127.0.0.1","root","","convenio");
	if(isset($_REQUEST["btn_reg_zulu"])){
		$rut_zulu = $_REQUEST["txt_rut_zulu"];
		$rso_zulu = $_REQUEST["txt_rso_zulu"];
		$ubi_zulu = $_REQUEST["txt_ubi_zulu"];
		$fono_zulu = $_REQUEST["txt_fono_zulu"];
		$bd->registrarZulu($rut_zulu,$rso_zulu,$ubi_zulu,$fono_zulu);
	}
	
	
?>
<title>Zulu</title>
<link href="Estilos/estilos.css" type="text/css" rel="stylesheet" />
<link href="Estilos/jquery-ui-1.10.4.custom.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="Efectos/jquery-1.10.2.js"> </script>
<script type="text/javascript" src="Efectos/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="Efectos/jquery.Rut.min.js"></script>
<script type="text/javascript" src="Efectos/zulu.js"></script>

</head>
<body>
	<div class="contenedor">
    	<form name="form_zulu" class="formularios" method="post" action="zulu_view.php">
        	<fieldset>
            	<legend>Mantenedor ZULU</legend>
                <div class="completo">
                	<label>Rut:</label><input type="text" maxlength="14" class="textos" name="txt_rut_zulu" id="txt_rut_zulu" required="required"/>
                    <div id="resultado">
                
                	</div>
                </div>
                
                <div class="completo">
                	<label>Razon Social:</label><input type="text" maxlength="50" class="textos" name="txt_rso_zulu" id="txt_rso_zulu" required="required"/>
                </div>
                <div class="completo">
                	<label>Ubicación:</label><input type="text" maxlength="50" class="textos" name="txt_ubi_zulu" id="txt_ubi_zulu" required="required"/>
                </div>
                <div class="completo">
                	<label>Telefono:</label><input type="text" maxlength="50" class="textos" name="txt_fono_zulu" id="txt_fono_zulu" required="required"/>
                    
                </div>
            </fieldset>
        	<div class="botones">
            	<input type="submit" class="btn" name="btn_reg_zulu" id="btn_reg_zulu" value="Registrar Zulu" />
                <input type="submit" class="btn" name="btn_mod_zulu" value="Modificar Zulu" />
                <input type="submit" class="btn" name="btn_reset_zulu" value="Cancelar" />
            </div>
        </form>
    
    </div>
</body>
</html>