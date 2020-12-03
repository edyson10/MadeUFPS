<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

$nombreProfesor = $_POST['nombre'];
$cedulaProfesor = $_POST['cedula'];
$codigoProfesor = $_POST['codigo'];
$direccionProfesor = $_POST['direccion'];
$telefonoProfesor = $_POST['telefono'];
$correoProfesor = $_POST['correo'];

$sql = "INSERT INTO persona (documento, nombre, codigo, direccion, telefono, correo, rol) 
        VALUES ('$cedulaProfesor', '$nombreProfesor', '$codigoProfesor', '$direccionProfesor', '$telefonoProfesor', '$correoProfesor', 3)";

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
