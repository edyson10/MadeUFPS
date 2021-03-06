/*
Metodo para registrar un curso desde el panel de director
*/
$(document).ready(function() {
    $("#FormRegistroCurso").on('submit', function(e) {
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
                        'Se ha registrado correctamente el curso',
                        'success'
                    )
                    document.getElementById("FormRegistroCurso").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al registrar',
                        text: '¡Profesor ya existente!'
                    })
                } else if (resultado.respuesta == 'mal') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Las contraseñas no coinciden'
                    })
                }
            }
        });
    });
});

/**
 * Método para registrar un docente
 */
$(document).ready(function() {
    $("#FormRegistroProfesor").on('submit', function(e) {
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
                        'Se ha registrado correctamente el profesor ',
                        'success'
                    )
                    document.getElementById("FormRegistroProfesor").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al registrar',
                        text: '¡Profesor ya existente!'
                    })
                } else if (resultado.respuesta == 'mal') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Las contraseñas no coinciden'
                    })
                }
            }
        });
    });
});

/**
 * Método para registrar un estudiante
 */
$(document).ready(function() {
    $("#FormRegistroEstudiante").on('submit', function(e) {
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
                        'Se ha registrado correctamente el estudiante',
                        'success'
                    )
                    document.getElementById("FormRegistroEstudiante").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al registrar',
                        text: 'Estudiante ya existente!'
                    })
                }
            }
        });
    });
});
/**
 * Método para registrar un curso nuevo
 */
$(document).ready(function() {
    $("#FormAsignarEstudiante").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: $(this).attr("action"),
            data: datos,
            type: $(this).attr("method"),
            success: function(data) {
                console.log(data);
                var resultado = JSON.parse(data);
                console.log('->' + resultado.respuesta);
                if (resultado.respuesta == 'seleccione') {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Ups!',
                        text: 'Seleccione una asignatura y/o estudiante correctos'
                    })
                } else if (resultado.respuesta == 'estudiante') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Advertencia',
                        text: 'No se pueden registrar más estudiantes'
                    })
                } else if (resultado.respuesta == 'exito') {
                    Swal.fire(
                        'Correcto!',
                        'Se ha asignado correctamente el estudiante',
                        'success'
                    )
                    document.getElementById("FormAsignarEstudiante").reset();
                } else if (resultado.respuesta == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocurrio un error al asignar el estudiante'
                    })
                }
            }
        });
    });
});