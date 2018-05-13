var validacion = false;

function validarEmail(email) {
    var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (patron.test(String(email.value).toLowerCase())) {
        $('#validar-correo').css('display', 'none');

        validacion = true;
    } else {
        $('#validar-correo').css('display', 'inline');
        $('#validacion-correo').css('display', 'none');
        validacion = false;

    }
}

$('#btn-inicio').click(function() {
    // alert("esta vacio vez");

    if ($('#txt-contrasena').val() == "" || $('#txt-correo').val() == "") {

        $('#validacion-contrasena').css('display', 'inline'); //validacion-correo
        $('#validacion-correo').css('display', 'inline');
        validacion = false;
    } else {
        $('#validacion-contrasena').css('display', 'none');
        $('#validacion-correo').css('display', 'none');
        validacion = true;
    }
    if (validacion) {
        mandar();
    }
});

function mandar() {

    var parametros = 'correo=' + $("#txt-correo").val() + "& " +
        'clave=' + $("#txt-contrasena").val();

    //alert("Se enviara esto a procesar.php: " + parametros);

    $.ajax({
        url: 'ajax/procesar-inicio-sesion.php',
        method: 'POST',
        data: parametros,
        dataType: "json",
        success: function(data) {
            console.log(data);
            if (data.codigoResultado == 0) {
                window.location.assign("http://localhost/google-plus/sesion-iniciada/index.php");
            } else {
                $('#encontro-usuario').css('display', 'inline');
            }
        }
    });
    //alert("Inicio de sesion Exitoso! " + data);
}