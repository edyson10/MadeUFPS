<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

if ($_POST['actualizar'] == 'actualizar') {
    $codigo = $_POST['codigo'];
    $nota = $_POST['nota'];
    $materia = $_POST['materia'];

    $sql = "UPDATE grupo_alumno SET nota = '$nota' WHERE id_alumno = '$codigo' and id_curso = '$materia'";

    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
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
