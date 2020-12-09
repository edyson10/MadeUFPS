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

/**
 * Método para actualizar una nota
 */
function actualizarNota(materia) {
    console.log(materia);
    var codigo = document.getElementById("codigoEstudiante").value;
    var nota = document.getElementById("notaEstudiante").value;
    $.ajax({
        url: '../model/actualizarNota.php',
        data: {
            actualizar: 'actualizar',
            codigo: codigo,
            materia: materia,
            nota: nota
        },
        type: 'POST',
        success: function(data) {
            var resultado = JSON.parse(data);
            console.log(resultado);
            if (resultado.respuesta == 'exito') {
                Swal.fire(
                    'Exito',
                    'La nota ha sido cambiada',
                    'success'
                ), setTimeout(function() {
                    location.reload();
                }, 2000);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se pudo actualizar la nota'
                })
            }
        }
    });
}