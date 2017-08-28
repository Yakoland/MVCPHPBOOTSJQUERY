$( document ).ready(function() {

	$('#buscarbtn').click(function (event) {
		event.preventDefault();

		_nrotramite = $("#buscartxt").val();
		url='BuscarTramite.php';
		$.ajax({
			type: "POST",
			url: url,
			dataType: 'json',
			encoding: "UTF-8",
			data: {
				'nrotramite': _nrotramite
			},
			success:  function (response) {
				if(response.resp=='vacio'){
					$("#resultados").html('No se encontraron Resultados');
					return;
				}
				var resultados= response;
				_html='<table class="table table-bordered"><tr><th style="width: 10px">Id</th><th>Nro. Radicado</th><th>Descripcion</th><th style="width: 110px">Fecha</th><th style="width: 110px">Eliminar</th></tr>';
				$.each(resultados, function (key, value) {
					
					_html += '<tr><td>' + value.IDRADICADO + '</td>' + '<td>' + value.NRORADICADO + '</td>'+ '<td>' + value.DESCRIPCION + '</td>'+ '<td>' + value.FECHA + '</td>'+ '<td>' +  '<button id="eliminar" valor="'+value.IDRADICADO+'" onclick="eliminartramite(this)" class="label label-danger">Eliminar</button>' + '</td><tr>';
				});
				_html += '</table>';
				$("#resultados").html(_html);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown, xhr, error){
				alert('Error en la Aplicacion - Consulte al Administrador');
			}
		}); 		
	});

});

function eliminartramite(objeto){
	event.preventDefault();
		idAEliminar=objeto.attributes['valor'].value;
		url='EliminarTramite.php';
		$.ajax({
			type: "POST",
			url: url,
			dataType: 'json',
			encoding: "UTF-8",
			data: {
				'idtramite': idAEliminar
			},
			success:  function (response) {
				var resultados= response;
				_html='Registro Eliminado';
				$("#resultados").html(_html);
			},
			error: function(XMLHttpRequest, textStatus, errorThrown, xhr, error){
				alert('Error en la Aplicacion - Consulte al Administrador');
			}
		}); 		
}
function creartramite(objeto){
	event.preventDefault();

		_nura=$("#radicado").val();		
		_titu=$("#titulo").val();
		_tema=$("#tema").val();
		_dia=$("#dia").val();
		_mes=$("#mes").val();
		_ano=$("#ano").val();
				
		valid=validartodo(_nura,_titu,_tema,_dia,_mes,_ano);
		if(valid==false){
			return;
		}
		url='CrearTramite.php';
		$.ajax({
			type: "POST",
			url: url,
			dataType: 'json',
			encoding: "UTF-8",
			data: {
				'nura': _nura,
				'titu': _titu,
				'tema': _tema,
				'dia': _dia,
				'mes': _mes,
				'ano': _ano
			},
			success:  function (response) {
				if(response.resp=='repetido'){
					alert("Imposible Crear Nro de Radicado Ya Existe!!");
					return;
				}else{
					var resultados= response;
					_html='Registro Agregado';
					$("#radicado").val('');
					$("#titulo").val('');
					$("#tema").val('');
					$("#dia").val('');
					$("#mes").val('');
					$("#ano").val('');
					alert(_html);
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown, xhr, error){
				alert('Error en la Aplicacion - Consulte al Administrador');
			}
		}); 		
}

function validarSiNumero(numero){
    if (!/^([0-9])*$/.test(numero)){
      return false;
	}else{
		return true;
	}
}
function validartodo(_nura,_titu,_tema,_dia,_mes,_ano){
	if(_nura.length <= 0){
		alert("El numero de Radicado No Puede Estar Vacio");
		return false;	
	}
	if(_titu.length <= 0){
		alert("El Titulo No Puede Estar Vacio");
		return false;	
	}
	if(_tema==null){
		alert("El Tema No Puede Estar Vacio");
		return false;	
	}
	if(_dia==null){
		alert("El Dia No Puede Estar Vacio");
		return false;	
	}
	if(_mes==null){
		alert("El Mes No Puede Estar Vacio");
		return false;	
	}
	if(_ano==null){
		alert("El Año No Puede Estar Vacio");
		return false;	
	}	
	valid=validarSiNumero(_nura);
	if(valid==false){
		$("#radicado").focus();
		alert("El numero de Radicado debe ser solo numerico");
		return false;
	}
}