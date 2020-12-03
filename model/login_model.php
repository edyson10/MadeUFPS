<?php

require_once '../controller/conexion.php';

//die(json_encode($_POST));

$ingresarUsuario = $_POST['codigo'];
$ingresarContrasena = $_POST['password'];
$ingresarTipo = $_POST['tipo'];

if ($ingresarTipo == 'Seleccione') {
    $respuesta = array('respuesta' => 'seleccion');
    echo json_encode($respuesta);
    return;
} else {
    $sql = "SELECT persona.nombre, persona.codigo, persona.documento, persona.direccion, persona.telefono, persona.correo 
    FROM persona INNER JOIN rol ON persona.rol = rol.id_rol WHERE persona.codigo = '$ingresarUsuario' AND persona.documento = '$ingresarContrasena' 
    AND rol.nombre = '$ingresarTipo'";

    $ejecutar = mysqli_query($conexion, $sql);
    $rowcount = mysqli_num_rows($ejecutar);

    if ($ingresarTipo == 'Director') {
        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = '1';
            $_SESSION['usuario'] = $row['nombre'];
            $_SESSION['codigo'] = $row['codigo'];
            $_SESSION['correo'] = $row['correo'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'admin',
                'usuario' => $row['nombre'],
                'codigo' => $row['codigo'],
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    } else if ($ingresarTipo == 'Docente') {
        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = '2';
            $_SESSION['usuario'] = $row['nombre'];
            $_SESSION['codigo'] = $row['codigo'];
            $_SESSION['correo'] = $row['correo'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'docente',
                'usuario' => $row['nombre'],
                'codigo' => $row['codigo'],
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    } else if ($ingresarTipo == 'Estudiante') {
        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = '3';
            $_SESSION['usuario'] = $row['nombre'];
            $_SESSION['codigo'] = $row['codigo'];
            $_SESSION['correo'] = $row['correo'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'alumno',
                'usuario' => $row['nombre'],
                'codigo' => $row['codigo'],
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    }
}

mysqli_close($conexion);
