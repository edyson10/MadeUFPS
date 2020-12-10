$(document).ready(function() {
    $("#FormRecuperarPass").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        //console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            beforeSend: function() {
                Swal.fire({
                    icon: 'warning',
                    title: 'Espere',
                    text: 'Espere hasta que se envie el correo.',
                    showConfirmButton: false,
                })
                $("#recuperar").prop('disabled', true);
            },
            success: function(data) {
                //console.log(data);
                var resultado = JSON.parse(data);
                if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Exito',
                        'Se ha enviado una contraseña de recuperacion a su correo',
                        'success'
                    )
                    document.getElementById("FormRecuperarPass").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo enviar la contraseña de recuperación'
                    })
                }
            }
        });
    });
});