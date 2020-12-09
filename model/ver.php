<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

if ($_POST['ver'] == 'verNota') {
    $codigoEstudiante = $_POST['cedula'];
    $materia = $_POST['materia'];
    $sql = "SELECT persona.codigo, persona.nombre, grupo_alumno.nota from persona inner join grupo_alumno on persona.codigo = grupo_alumno.id_alumno 
    where grupo_alumno.id_alumno = '$codigoEstudiante' and grupo_alumno.id_curso = '$materia'";
    $ejecutar = mysqli_query($conexion, $sql);

    if ($ejecutar) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        $respuesta = array(
            'respuesta' => 'exito',
            'codigo' => $row['codigo'],
            'nombre' => $row['nombre'],
            'nota' => $row['nota']
        );
    } else {
        $respuesta = array(
            'respuesta' => 'error'
        );
    }
    echo json_encode($respuesta);
}

mysqli_close($conexion);