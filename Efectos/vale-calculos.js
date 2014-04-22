// JavaScript Document
$(document).ready(function(e) {
    $('#txtIngViajVal').keypress(ValidaSoloNumeros);
	$('#txtIngHorVal').keypress(ValidaSoloNumeros);
	$('#txtIngTicVal').keypress(ValidaSoloNumeros);
	$('#txtIngMovVal').keypress(ValidaSoloNumeros);
	$('#txtIngViajVal').blur(calcular);
	$('#txtIngHorVal').blur(calcular);
	$('#cboIngMinVal').blur(calcular);
	$('#bloqueIngRecIniVal').hide();
	$('#btnIngAddRecIniVal').click(mostrarDiv);
	$('#btnIngRecNueVal').click(ocultarDiv);
	var x = 0;
});

/*******************************************************************/
/*Funcion para mostrar Div de agregar Recorrido en Ingreso de Vales*/
/*******************************************************************/
function mostrarDiv(){
	$('#formularioIngVales').attr('disabled','true');
	$('#bloqueIngRecIniVal').show();
	$('#txtIngRecNueVal').val("");
	x++;
}
/*Funcion para ocultar Div de agregar Recorrido en Ingreso de Vales*/
function ocultarDiv(){
	$('#bloqueIngRecIniVal').hide();
	$('#formularioIngVales').attr('disabled','false');
	var reco = $('#txtIngRecNueVal').val();
	$('#txtIngRecFinVal').attr("value","-"+reco);
	}
	

function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)){ 
  event.returnValue = false;
 }
}
function calcular(){
	var valor_viaje = parseInt($('#txtIngViajVal').val());
	var hor_viaje = 5000 * parseInt($('#txtIngHorVal').val());
	var min_viaje = 1250 * parseInt($('#cboIngMinVal').val());
	var valorEsp_viaje = hor_viaje + min_viaje;
	$('#txtIngTotTieVal').attr('value',valorEsp_viaje);
	$('#txtIngTotSerVal').attr('value',valor_viaje);
	$('#txtIngTotFinVal').attr('value',valor_viaje + valorEsp_viaje);
	var id_due = $('#txtIngPorDueVal').val();
	var id_cho = $('#txtIngPorChoVal').val();
	var por_cho = 0, por_due = 0, util = 0;
	var util = (valor_viaje + valorEsp_viaje) * 0.015;
	tot_movil = (valor_viaje + valorEsp_viaje) - util;
	$('#txtIngTotalZulVal').attr('value',util);
	$('#txtIngPorcentajeMovVal').attr('value',tot_movil);
	if(id_due == id_cho){
			
	}
		
}