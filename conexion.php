<?php
    $host = 'localhost';
    $dbname = 'despensa_donjuan';
    $username = 'root';
    $password = '123456';

    $conexion = new mysqli($host, $username, $password, $dbname);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
?>
