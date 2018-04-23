function validarEmail(email) {
    var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (patron.test(String(email.value).toLowerCase())) {
        $('#validar-correo').css('display', 'none');
    } else {
        $('#validar-correo').css('display', 'inline');

    }
}

$('#btn-inicio').click(function() {
    if ($('#clave-usuario').val() == "") {
        $('#validacion-contrasena').css('display', 'inline');

    } else {
        $('#validacion-contrasena').css('display', 'none');
    }
});