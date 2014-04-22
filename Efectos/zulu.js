// JavaScript Document
$(document).ready(function(e) {
    $('#txtRutEmp').Rut({
  on_error: function(){ alert('Rut incorrecto');}
});
	$(function(){	
	$('#txtRutEmp').autocomplete({
		source : '../../ajax/zulu_ajax.php',
		select : function(event, ui){
				$('#txtRutEmp').attr("disabled",true);
				$('#txtRazEmp').attr("value",ui.item.rsocial);
				$('#txtDirEmp').attr("value",ui.item.ubi);
				$('#txtNumEmp').attr("value",ui.item.fono);
		}
	});
	});
});


