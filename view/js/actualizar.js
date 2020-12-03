/**
 * Método para registrar un docente
 */
$(document).ready(function() {
    $("#FormPerfil").on('submit', function(e) {
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
                //console.log('->' + resultado.respuesta);
                if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha actualizado correctamente los datos',
                        'success'
                    )
                    setTimeout(function() {
                        location.reload();
                    }, 2000);
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Se produjo un error al actualizar!'
                    })
                }
            }
        });
    });
});