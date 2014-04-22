// JavaScript Document
$(document).ready(function(e) {
    $('#txtRutCho').Rut({
  on_error: function(){ $('#btnIngCho').attr("disabled",true);},
  on_success: function(){ $("#btnIngCho").attr("disabled",false);
  }
});
	$(function(){	
	$('#txtRutCho').autocomplete({
		source : '../../ajax/chofer_ajax.php',
		select : function(event, ui){
				/*$('#txtRutCho').attr("disabled","disabled");*/
				$('#txtRutCho').attr("name","txtRutCho");
				$('#txtDirCho').attr("name","txtDirCho");
				$('#txtNumCho').attr("name","txtNumCho");
				$('#txtEmaCho').attr("name","txtEmaCho");
				$('#txtNomCho').attr("value",ui.item.nom_cho);
				$('#txtAppCho').attr("value",ui.item.app_cho);
				$('#txtApmCho').attr("value",ui.item.apm_cho);
				$('#txtDirCho').attr("value",ui.item.dir_cho);
				$('#txtNumCho').attr("value",ui.item.fon_cho);
				$('#txtEmaCho').attr("value",ui.item.ema_cho);
		}
	});
	});
});
