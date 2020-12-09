$(document).ready(function() {
    $("#FormLogin").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        //console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                //console.log(data);
                var resultado = JSON.parse(data);
                if (resultado.respuesta == 'exitoso') {
                    Swal.fire(
                        'Iniciaste Sesión',
                        'Bienvenido(a) a MadeUFPS',
                        'success'
                    )
                    if (resultado.rol == 'admin') {
                        setTimeout(function() {
                            window.location.href = "view/Registrar-curso.php";
                        }, 2000);
                    } else if (resultado.rol == 'alumno') {
                        setTimeout(function() {
                            window.location.href = "view/Estudiante.php";
                        }, 2000);
                    } else if (resultado.rol == 'docente') {
                        setTimeout(function() {
                            window.location.href = "view/Registrar-notas.php";
                        }, 2000);
                    }
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Usuario y/o contraseña incorrectos'
                    })
                } else if (resultado.respuesta == 'seleccion') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Debes de seleccionar un rol correcto'
                    })
                }
            }
        });
    });
});