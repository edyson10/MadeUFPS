<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

$materia = $_POST['materiaAsignar'];
$estudiante = $_POST['estudianteAsignar'];

if ($materia == 'Seleccione' || $estudiante == 'Seleccione') {
    $respuesta = array(
        'respuesta' => 'seleccione'
    );
    echo json_encode($respuesta);
    return;
} else {
    $sqlMateria = "SELECT num_estudiantes FROM curso WHERE id_curso = '$materia'";
    $ejecutar = mysqli_query($conexion, $sqlMateria);
    $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
    $cantidad = $row['num_estudiantes'];

    if ($cantidad <= 0) {
        $respuesta = array(
            'respuesta' => 'estudiante'
        );
        echo json_encode($respuesta);
        return;
    } else {
        $sql = "INSERT INTO grupo_alumno (idgrupo, id_alumno, id_curso, nota) VALUES (NULL, '$estudiante', '$materia', 0);";
        $ejecutar = mysqli_query($conexion, $sql);
        $cantidad = $cantidad - 1;
        $sqlCant = "UPDATE curso SET num_estudiantes = '$cantidad' WHERE id_curso= '$materia'";
        $ejecutarCant = mysqli_query($conexion, $sqlCant);
        if ($ejecutar && $ejecutarCant) {
            $respuesta = array(
                'respuesta' => 'exito'
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
    }
    mysqli_close($conexion);
}
