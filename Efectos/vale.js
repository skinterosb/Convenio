// JavaScript Document
$(document).ready(function(e) {
    $('#txtIngMovVal').blur(CargarDatos);
	
	
});
 
function CargarDatos(){
		var consulta = $('#txtIngMovVal').val();
		 $.ajax({
	  	  	  type: "POST",
	  	  	  url: "../../ZULU/Vales/Ingreso_Vales.php",
	  	  	  data: "b="+consulta,
	  	  	  dataType: "html",
	  	  	  error: function(error){
	  	  	  	  alert("error petición ajax" + eval(error));
	  	  	  },
	  	  	  success: function(data){        
				$("#txtIngDueVal").attr("value","");
				$("#txtIngPorDueVal").attr("value","");
					if(parseInt(data) == 0){
						alert('Movil No Encontrado');	
						$('#txtIngMovVal').focus();
					}else{
						var datos = data.split("-"); 
					  $("#txtIngDueVal").attr("value",datos[0]+" " + datos[1] + " " + datos[2] );
					  $("#txtIngPorDueVal").attr("value",datos[3]);
					}
				 					
	  	  	  }
			  /*Tomar datos entregados y buscar posibles choferes asociados a ese dueño*/
			  var id_mov = $('#txtIngMovVal').val();
			  
			  
	  	  });	  
}
$(function(){	
	$('#txtIngChoVal').autocomplete({
		source : '../../ajax/chofer_vale_ajax.php',
		select : function(event, ui){
				/*$('#txtRutCho').attr("disabled","disabled");*/
				$('#txtIngPorChoVal').attr("value",ui.item.id_cho);
		}
	});
	});


