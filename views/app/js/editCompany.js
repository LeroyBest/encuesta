$(document).ready(function(){


	$('#btnBuscarCo').on('click',function(){

		var company = $('#txtbuscarEmpresa').val();

		listCompany(company);
	});
});

function editCompany(id,empresa,gerente,correo){
	var valida="eliminarCliente";
	var company = $('#txtbuscarEmpresa').val();
	
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
		        	$("#msg").html("<div class='alert alert-dismissible alert-success'><strong>Exito!</strong> La informacion ha sido actualizada satisfactoriamente. <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button></div>");
					listCompany(company);

			    }
			}

			connect.open('POST','ajax.php?mode=modify',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send(form);

		});		
}

function deleteCompany(){

	$("#deleteCompany").modal();

}

function listCompany(company){
	var connect, form, response, result;

    	form = 'txtbuscarEmpresa=' + company;
    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    	connect.onreadystatechange = function() {
	        if(connect.readyState == 4 && connect.status == 200) {
	        	var datos = JSON.parse(connect.responseText);
	       		console.log(datos);
				$("tbody").empty();
	       		$.each( datos, function( key, value ) {
	       		
		  			//console.log(value.descripcion + value.colaborador + value.correo );
		  			$("#cuerpo").append("<tr ><td><b>"+value.descripcion+"</b></td><td>"+value.colaborador+"</td><td>"+value.correo+"</td><td><a class='btn btn-primary btn-xs' onclick='editCompany("+'"'+value.id_empresa+'",'+'"'+value.descripcion+'",'+'"'+value.colaborador+'",'+'"'+value.correo+'"'+")'><i class='fa fa-pencil'> editar</i></a><a class='btn btn-danger btn-xs' onclick='deleteCompany()'><i class='fa fa-trash-o'> borrar</i></a></td></tr>");
				console.log("onclick='editCompany("+'"'+value.id_empresa+'",'+'"'+value.descripcion+'",'+'"'+value.descripcion+'",'+'"'+value.descripcion+'"'+")'");
				});


		    }
		}

		connect.open('POST','ajax.php?mode=search',true);
		connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		connect.send(form);


}