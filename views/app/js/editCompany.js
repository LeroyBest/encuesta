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
	       		
		  			//console.log(value.descripcion + value.colaborador + value.correo );
		  			$("#cuerpo").append("<tr ><td><b>"+value.descripcion+"</b></td><td>"+value.colaborador+"</td><td>"+value.correo+"</td><td><a class='btn btn-primary btn-xs' onclick='editCompany("+'"'+value.id_empresa+'",'+'"'+value.descripcion+'",'+'"'+value.colaborador+'",'+'"'+value.correo+'"'+")'><i class='fa fa-pencil'></i></a><a class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></td></tr>");
				console.log("onclick='editCompany("+'"'+value.id_empresa+'",'+'"'+value.descripcion+'",'+'"'+value.descripcion+'",'+'"'+value.descripcion+'"'+")'");
				});


		    }
		}

		connect.open('POST','ajax.php?mode=search',true);
		connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		connect.send(form);


		
	});
});

function editCompany(id,empresa,gerente,correo){
	var valida="eliminarCliente";

	
		$('#txtEmpresa').val(empresa);
		$('#txtGerente').val(gerente);
		$('#txtCorreo').val(correo);
	

	   $("#editCompany").modal();


	  $('#btnEditEmpresa').on('click',function(){
	
  			var connect, form, response, result;

	    	form = $( "#formEditCompany").serialize()+ "&id="+id;
	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
		        	//var datos = JSON.parse(connect.responseText);
		       		//console.log(datos);
					
			    }
			}

			connect.open('POST','ajax.php?mode=modify',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send(form);

		});		
}