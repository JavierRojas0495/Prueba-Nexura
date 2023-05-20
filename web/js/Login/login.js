function alertProcess(accion, descripcion, type) {
    Swal.fire(
        accion,
        descripcion,
        type
    )
}

function successLogin(nombre) {
    let timerInterval
    Swal.fire({
        title: 'Bienvenido ! <br> <strong>' + nombre + '!</strong>',
        html: 'Iniciando sesión espere.',
        timer: 1500,
        timerProgressBar: true,
        showConfirmButton: false,
        allowOutsideClick: false,
        allowEscapeKey: false,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    })
}

function successLogout(nombre) {
    let timerInterval
    Swal.fire({
        title: 'Hasta Luego ! <br> <strong>' + nombre + '!</strong>',
        html: 'Cerrando sesión espere.',
        timer: 1500,
        timerProgressBar: true,
        showConfirmButton: false,
        allowOutsideClick: false,
        allowEscapeKey: false,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    })
}

function validaVacio(valor) {
    valor = valor.replace("&nbsp;", "");
    valor = valor == undefined ? "" : valor;
    if (!valor || 0 === valor.trim().length) {
        return true;
    }
    else {
        return false;
    }
}

function redireccionarPagina(url) {
    window.location = url;
}

$("#exampleInputEmail").blur(function () {

    email = document.getElementById("exampleInputEmail").value;

    if (email.trim().length == 0) {
        document.getElementById('exampleInputEmail').focus();
        alertProcess('Notificación', "Ingresar El Correo Electronico", 'error');
        return false;
    }

    let url = "ajax.php?modulo=Login&controlador=Login&funcion=consultarCorreo";

    $.ajax({
        type: "POST",
        url: url,
        data: "email=" + email,
        success: function (result) {

            if (result.length <= 2) {
                $('#imageUsu').attr('src', "img/imgCargarUsuarios/usuario_sin_foto.jpg");
                alertProcess('Notificación', "Correo no registrado", 'error');
            } else {
                respuesta = JSON.parse(result);
                $('#imageUsu').attr('src', respuesta[0]['ruta_img']);
            }

        }, error: function (result) {
            alertProcess('Notificación', "Ocurrio un error", 'error');
            setTimeout('document.location.reload()', 2000);
        }
    });

});

$('.login-index').on('click', function (e) {

    email = document.getElementById("exampleInputEmail").value;
    pass = document.getElementById("exampleInputPassword").value;

    if (validaVacio(email)) {

        document.getElementById('exampleInputEmail').focus();
        alertProcess('Notificación', "El correo electronico no puede estar vacio", 'error');
        return false;
    }

    if (validaVacio(pass)) {

        document.getElementById('exampleInputPassword').focus();
        alertProcess('Notificación', "La contraseña no puede estar vacia", 'error');
        return false;
    }


    let url = "ajax.php?modulo=Login&controlador=Login&funcion=login";

    let data = {
        "correo": email,
        "password": pass
    };

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function (result) {
            //console.log(result);
            if (result.length <= 2) {
                alertProcess('Error', "Correo o Contraseña Incorrectos", 'error');
            } else {
                let respuesta = JSON.parse(result);

                //console.log(respuesta);
                sessionStorage.setItem("nombre", respuesta[0]['nombre']);
                sessionStorage.setItem("rol", respuesta[0]['rol']);
                sessionStorage.setItem("usuario", respuesta[0]['id']);
                //console.log(sessionStorage);

                successLogin(respuesta[0]['nombre']);
                url = 'index.php';
                setTimeout("redireccionarPagina('" + url + "')", 1500);
            }


        }, error: function (result) {
            alertProcess('Notificación', "Ocurrio un error", 'error');
            setTimeout('document.location.reload()', 1500);
        }
    });


});

$('.logout-index').on('click', function (e) {

    let usuario = sessionStorage.getItem('usuario');
    let nombre = sessionStorage.getItem('nombre');
    let url = "ajax.php?modulo=Login&controlador=Login&funcion=logout";

    $.ajax({
        type: "GET",
        url: url,
        data: "id=" + usuario,
        success: function (result) {
            successLogout(nombre);
            sessionStorage.clear();
            url = 'index.php';
            setTimeout("redireccionarPagina('" + url + "')", 1500);

        }, error: function (result) {

            alertProcess('Notificación', "Ocurrio un error", 'error');
            setTimeout('document.location.reload()', 2000);
        }
    });
})