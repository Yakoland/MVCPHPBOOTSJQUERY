$( document ).ready(function() {
	$('#entrar').click(function (event) {
		event.preventDefault();
			_mail = $("#inputEmail3").val();
			_pass = $("#inputPassword3").val();
			url='login.php';
			$.ajax({
					type: "POST",
					url: url,
					dataType: 'html',
					encoding: "UTF-8",
					data: {
						'vemail': _mail,
						'vpass': _pass,
					},
					success:  function (response) {
						if(response!='ok'){
							alert(response);
						}else{
							window.location.replace("tramite.php");
						}
					},
					error: function(XMLHttpRequest, textStatus, errorThrown, xhr, error){
						alert('Error en la Aplicacion - Consulte al Administrador');
					}
			}); 		
	});
});
('#loginForm').bootstrapValidator({
	 message: 'Este valor no es valido',
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
		 inputEmail3: {
			 validators: {
				 notEmpty: {
					 message: 'El nombre de usuario es requerido'
				 }
			 }
		 },
		 inputPassword3: {
			 validators: {
				 notEmpty: {
					 message: 'La contraseña es requerida'
				 }
			 }
		 }
	 }
});