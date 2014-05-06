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
					  $("#cboIngChoVal").html("<option value="+datos[7]+">"+datos[4]+" " +datos[5]+" " +datos[6]+"</option><option value="+datos[11]+">"+datos[8]+" " +datos[9]+ " " +datos[10]+"</option>");
					}
				 					
	  	  	  }
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


