<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

session_start();
$codigo = $_SESSION['codigo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

if (!empty($telefono) && !empty($direccion)) {
    $sql = "UPDATE persona SET direccion = '$direccion', telefono = '$telefono' WHERE codigo = '$codigo'";
} else if (empty($direccion)) {
    $sql = "UPDATE persona SET telefono = '$telefono' WHERE codigo = '$codigo'";
} else if (empty($telefono)) {
    $sql = "UPDATE persona SET direccion = '$direccion' WHERE codigo = '$codigo'";
}

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
