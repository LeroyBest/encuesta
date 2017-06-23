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
		  			$("#cuerpo").append("<tr ><td><b>"+value.descripcion+"</b></td><td>"+value.colaborador+"</td><td>"+value.correo+"</td><td><a class='btn btn-primary btn-xs' onclick='editCompany()'><i class='fa fa-pencil'></i></a><a class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></td></tr>");
				
				});


		    }
		}

		connect.open('POST','ajax.php?mode=search',true);
		connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		connect.send(form);


		
	});
});

function editCompany(){
	var valida="eliminarCliente";

		/*$('#txtIdEdit').val(id);
		$('#txtNombreEdit').val(nombre);
		$('#txtEmpresaEdit').val(empresa);
		$('#txtCedulaEdit').val(ruc);
		$('#txtCorreoClieEdit').val(correo);
		$('#txtDireccionEdit').val(direccion);
		$('#txtTelefonoClieEdit').val(telefono);*/

	   $("#editCompany").modal();


	  /* $('#btnEditCliente').on('click',function(){
		
		$.post( "?view=cliente&mode=buscar", $( "#formEditCliente" ).serialize()+ "&val=updateCliente" )
			.done(function( data ) {
    		obtenerDatos("buscarCliente");
    		
  			});  		

		});		*/
}