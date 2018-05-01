function validarEmail(email) {
    var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (patron.test(String(email.value).toLowerCase())){
    	//email.classList.remove("is-invalid");
    	//email.classList.add("is-valid");
    	$('#validar-correo').css('display','none');
    }
    else{
    	$('#validar-correo').css('display','inline');
    	//email.classList.remove("is-valid");
    	//email.classList.add("is-invalid");
    }
}


/*var validando = function(){
	validacion('txt-nombre');
	validacion('txt-contrasena');
	validacion('txt-celular');
	validacion('txt-fecha-nacimiento');
}
*/


$("#btn-registrarse").click(function(event) {
	//alert("hola perros");
	if ($('#txt-nombre').val()==""){
		$('#validacion-nombre').css('display','inline');

	} else {
		$('#validacion-nombre').css('display','none');
	}


	if ($('#txt-apellido').val()==""){
		$('#validacion-apellido').css('display','inline');

	} else {
		$('#validacion-apellido').css('display','none');
	}

	if ($('#txt-contrasena').val()==""){
		$('#validacion-contrasena').css('display','inline');

	} else {
		$('#validacion-contrasena').css('display','none');
	}

	if ($('#txt-fecha-nacimiento').val()==""){
		$('#validacion-fecha-nacimiento').css('display','inline');

	} else {
		$('#validacion-fecha-nacimiento').css('display','none');
	}
	
});

