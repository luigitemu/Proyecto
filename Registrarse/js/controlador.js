var correcto = false;

function validarEmail(email) {
    var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (patron.test(String(email.value).toLowerCase())) {
        $('#validar-correo').css('display', 'none');
        correcto = true;

    } else {
        $('#validar-correo').css('display', 'inline');
        $('#validacion-correo').css('display', 'none');
        correcto = false;
    }
}





$("#btn-registrarse").click(function(event) {

    if ($('#txt-nombre').val() == "") {
        $('#validacion-nombre').css('display', 'inline');
        correcto = false;
    } else {
        $('#validacion-nombre').css('display', 'none');
        correcto = true;
    }

    if ($('#txt-correo').val() == "") {
        $('#validacion-correo').css('display', 'inline');
        correcto = false;
    } else {
        $('#validacion-correo').css('display', 'none');
        correcto = true;
    }



    if ($('#txt-apellido').val() == "") {
        $('#validacion-apellido').css('display', 'inline');
        correcto = false;

    } else {
        $('#validacion-apellido').css('display', 'none');
        correcto = true;
    }

    if ($('#txt-contrasena').val() == "") {
        $('#validacion-contrasena').css('display', 'inline');
        correcto = false;
    } else {
        $('#validacion-contrasena').css('display', 'none');
        correcto = true;
    }

    if ($('#txt-celular').val() == "") {
        $('#validacion-celular').css('display', 'inline');
        correcto = false;
    } else {
        $('#validacion-celular').css('display', 'none');
        correcto = true;
    }

    if ($('#txt-fecha-nacimiento').val() == "") {
        $('#validacion-fecha-nacimiento').css('display', 'inline');
        correcto = false;
    } else {
        $('#validacion-fecha-nacimiento').css('display', 'none');
        correcto = true;
    }
    if (correcto)
        mandar();

});

function mandar() {
    var fechaN = document.getElementById("txt-fecha-nacimiento").value;
    var parametros = 'nombre=' + $("#txt-nombre").val() +
        "&" + 'apellido=' + $("#txt-apellido").val() +
        "&" + 'correo=' + $("#txt-correo").val() +
        "&" + 'clave=' + $("#txt-contrasena").val() +
        "&" + 'celular=' + $("#txt-celular").val() +
        "&" + 'fecha=' + fechaN +
        "&" + 'genero= ' + $("#slc-genero").val() +
        "&" + 'imagen= ' + $("#slc-url-img").val();

    alert("Se enviara esto a procesar.php: " + parametros);

    $.ajax({
        url: 'ajax/procesar-registro.php',
        method: 'POST',
        dataType: "json",
        data: parametros,
        success: function(respuesta) {
            console.log(respuesta);
            if (respuesta.codigoResultado == 0)
                window.location.assign("http://localhost/google-plus/sesion-iniciada/index.php");
        }
    });


}