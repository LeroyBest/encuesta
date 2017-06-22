$(document).ready(function(){


	$('#btnBuscarCo').on('click',function(){

		var connect, form, response, result;

    	form = 'txtbuscarEmpresa=' + $('#txtbuscarEmpresa').val();
    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    	connect.onreadystatechange = function() {
	        if(connect.readyState == 4 && connect.status == 200) {
	        	var datos = JSON.parse(connect.responseText);
	       		console.log(datos);
				$("tbody").empty();
	       		$.each( datos, function( key, value ) {
	       		
		  			console.log(value.descripcion + value.colaborador + value.correo );
		  			$("#cuerpo").append("<tr ><td><b>"+value.descripcion+"</b></td><td>"+value.colaborador+"</td><td>"+value.correo+"</td><td><button id ='reportpdf'><i class='fa fa-file-pdf-o' aria-hidden='true'></i></button></td></tr>");
				
				});


		    }
		}

		connect.open('POST','ajax.php?mode=search',true);
		connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		connect.send(form);


		
	});
});