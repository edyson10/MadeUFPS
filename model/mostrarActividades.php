<?php
header('Content-Type: application/json');

require_once '../controller/conexion.php';

$sql = "SELECT cm.ruta_archivo, cm.fecha_final, cm.num_actividad FROM cargar_microcurriculo cm 
        INNER JOIN curso ON cm.id_curso = curso.id_curso INNER JOIN grupo_alumno ga ON ga.id_curso = curso.id_curso 
        WHERE ga.id_alumno = '9638' AND ga.id_curso = '12'";

$result = mysqli_query($conexion, $sql);
while ($nombre = mysqli_fetch_assoc($result)) {
    echo json_encode($nombre);
}
/*


$con=$conexion->query($sql);
$datos = array();

foreach($con as $row){
    $datos[]=$row;
}

echo json_encode($datos);
*/