function verNota(cedula, materia) {
    var cedulanit = String(cedula);
    console.log("cedula " + cedulanit);
    console.log("materia " + materia);
    $.ajax({
        url: '../model/ver.php',
        data: {
            ver: 'verNota',
            cedula: cedula,
            materia: materia
        },
        type: 'POST',
        success: function(data) {
            var resultado = JSON.parse(data);
            console.log(resultado);
            if (resultado.respuesta == 'exito') {
                document.getElementById('codigoEstudiante').value = resultado.codigo;
                document.getElementById('estudiante').value = resultado.nombre;
                document.getElementById('notaEstudiante').value = resultado.nota;
                console.log(resultado.nota);
            }
        }
    })

}