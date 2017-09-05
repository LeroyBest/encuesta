$(document).ready(function(){
	$("#tipo").change(function(){
		//alert('correcto');

		 	var connect, form, response, result;

	    	form = $( "#reportesForm").serialize()+ "&seccion="+$("#tipo").val();
	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
		        	console.log($("#tipo").val());
		        	var datos = JSON.parse(connect.responseText);
		        	console.log(datos);
		        	$("#nombre").empty();
		        	$.each( datos, function( key, value ) {
		       		
			  			//console.log(value.descripcion + value.colaborador + value.correo );
			  			$("#nombre").append("<option>"+value.descripcion+"</option>");
					
					});
			    }
			}

			connect.open('POST','ajax.php?mode=reporte',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send(form);
	});
});