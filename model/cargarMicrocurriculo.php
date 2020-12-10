<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

$archivo = $_FILES["archivo"];
$materia = $_POST['materia'];
$actividad = $_POST['actividad'];
$fecha = $_POST['fecha'];
$directorio = "Archivos/actividades/";

if ($materia == 'Seleccione') {
    echo "mal";
    return;
}

if (!is_dir($directorio)) {
    mkdir($directorio, 0755, true);
}

$resultado = move_uploaded_file($archivo["tmp_name"], $directorio . $archivo["name"]);

$archivo_url = $directorio . $archivo["name"];

$sql = "INSERT INTO cargar_microcurriculo (id_carga, id_curso, ruta_archivo, fecha_final, num_actividad) VALUES (NULL, '$materia', '$archivo_url', '$fecha', '$actividad')";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "exito";
} else {
    echo "error";
}
