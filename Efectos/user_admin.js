// JavaScript Document
$(document).ready(function(e) {
$(function(){	
	$('#txtLogUser').autocomplete({
		source : '../../ajax/user_admin.php',
		select : function(event, ui){
				/*$('#txtRutCho').attr("disabled","disabled");*/
				$('#txtLogUser').attr("name","txtRutCho");
				$('#txtPasUser').attr("value",ui.item.pas_user);
				$('#txtNomUser').attr("value",ui.item.nom_user);
				$('#txtApeUser').attr("value",ui.item.ape_user);
				$('#txtCelUser').attr("value",ui.item.cel_user);
				$('#txtEmaUser').attr("value",ui.item.ema_user);
		}
	});
	});
});