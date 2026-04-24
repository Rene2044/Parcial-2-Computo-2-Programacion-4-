<?php
session_start();
// Si no hay sesión, no dejamos entrar
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

include 'conexion.php'; // <--- ¡AQUÍ SÍ NECESITAS LA CONEXIÓN!
?>

<h1>Inventario - La Despensa de Don Juan</h1>
<a href="logout.php">Cerrar Sesión</a>