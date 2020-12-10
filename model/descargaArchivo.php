<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

$alumno = $_POST['alumno'];
$materia = $_POST['materia'];
//$actividad = $_POST['actividad'];

$sqlMateria = "SELECT cargar_microcurriculo.ruta_archivo FROM cargar_microcurriculo INNER JOIN curso ON cargar_microcurriculo.id_curso = curso.id_curso 
INNER JOIN grupo_alumno ON grupo_alumno.id_curso = curso.id_curso WHERE grupo_alumno.id_alumno = '9638' and grupo_alumno.id_curso = '12'
and cargar_microcurriculo.num_actividad = '1'";
$ejecutar = mysqli_query($conexion, $sqlMateria);
$nombre = mysqli_fetch_assoc($ejecutar);

$ruta = $nombre['ruta_archivo'];
$result = preg_split("~(?<!<)/~", $nombre['ruta_archivo']);

header('Content-Type: application/force-download');
header('Content-Disposition: attachment; filename=' . $result[2]);
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($ruta));

readfile($ruta);
exit;