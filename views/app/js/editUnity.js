$(document).ready(function(){


	$('#btnBuscarUn').on('click',function(){

		var unity = $('#txtbuscarUnidad').val();

		listUnity(unity);
	});
});

function editCompany(id,unidad,jefe,correo){
	var valida="eliminarCliente";
	var unity = $('#txtbuscarUnidad').val();
	
		$('#txtUnidad').val(unidad);
		$('#txtJefe').val(jefe);
		$('#txtCorreo').val(correo);
	

	   $("#editUnity").modal();


	  $('#btnEditUnidad').on('click',function(){
	
  			var connect, form, response, result;

	    	form = $( "#formEditUnity").serialize()+ "&id="+id+"&seccion=Unidad";
	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
		        	$("#msg").html("<div class='alert alert-dismissible alert-success'><strong>Exito!</strong> La informacion ha sido actualizada satisfactoriamente. <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button></div>");
					listUnity(unity);

			    }
			}

			connect.open('POST','ajax.php?mode=modify',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send(form);

		});		
}

function deleteCompany(id){

	var company = $('#txtbuscarUnidad').val();

		$("#deleteCompany").modal();

		$('#btnDeletEmpresa').on('click',function(){
	
  			var connect, form, response, result;

	    	form = "id="+id;
	    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	    	connect.onreadystatechange = function() {
		        if(connect.readyState == 4 && connect.status == 200) {
		        	var r = connect.responseText;
		        	console.log(r);
		        	$("#msg").html("<div class='alert alert-dismissible alert-success'><strong>Exito!</strong> Informacion actualizada correctamente. <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button></div>");
					listUnity(unity);

			    }
			}

			connect.open('POST','ajax.php?mode=delete',true);
			connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			connect.send(form);

		});	

}


function listUnity(unity){
	var connect, form, response, result;

    	form = 'txtbuscarUnidad=' + unity +"&seccion=Unidad";
    	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    	connect.onreadystatechange = function() {
	        if(connect.readyState == 4 && connect.status == 200) {
	        	var datos = JSON.parse(connect.responseText);
	       		//console.log(datos);
				$("tbody").empty();
				if(datos == 0 ){
					$("#msg").html('<div class="alert alert-warning"><b>Verificar</b> No se encontraron registros con esa descripcion, favor escribir palabra completa para una busqueda mas eficiente. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
		       	}
		       	else
		       	{
		       		$.each( datos, function( key, value ) {
		       		
			  			//console.log(value.descripcion + value.colaborador + value.correo );
			  			$("#cuerpo").append("<tr ><td><b>"+value.descripcion+"</b></td><td>"+value.colaborador+"</td><td>"+value.correo+"</td><td>"+value.empresa+"</td><td><a class='btn btn-primary btn-xs' onclick='editCompany("+'"'+value.id_empresa+'",'+'"'+value.descripcion+'",'+'"'+value.colaborador+'",'+'"'+value.correo+'"'+")'><i class='fa fa-pencil'> editar</i></a><a class='btn btn-danger btn-xs' onclick='deleteCompany("+'"'+value.id_empresa+'"'+")'><i class='fa fa-trash-o'> borrar</i></a></td></tr>");
					
					});


		       	}

		    }
		}

		connect.open('POST','ajax.php?mode=search',true);
		connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		connect.send(form);


}