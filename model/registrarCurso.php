<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

$nombreCurso = $_POST['nombreCurso'];
$codigoCurso = $_POST['codigoCurso'];
$codigoDocente = $_POST['docenteCurso'];
$numEstudiantes = $_POST['estudiantesCurso'];

$sql = "INSERT INTO curso (id_curso, nombre, docente, num_estudiantes) VALUES ('$codigoCurso', '$nombreCurso', '$codigoDocente', '$numEstudiantes')";

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

mysqli_close($conexion);
