<?php

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    /* CONEXION CON EL SERVIDOR LOCAL PC */
    $conexion = mysqli_connect("localhost","root","","madeufps");
    /* CONEXION CON EL SERVIDOR GIDIS UFPS */
    //$conexion = mysqli_connect("localhost","madeufps_admin","ayd2020","madeufps_madeufps");
    //echo "Connected successfully";
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}
