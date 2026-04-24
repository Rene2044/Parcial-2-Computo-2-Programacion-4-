<?php
// Asegúrate de que este archivo y conexion.php estén en la misma carpeta
include '/phpconexion.php';

// Verificación de seguridad
if (!isset($conexionsql)) {
    die("Error: La conexión a la base de datos no se pudo establecer.");
}

// Recibir datos
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

// Preparar y ejecutar
$stmt = $conexionsql->prepare("INSERT INTO productos (nombre, categoria, cantidad, precio) VALUES (?, ?, ?, ?)");

if ($stmt) {
    $stmt->bind_param("ssis", $nombre, $categoria, $cantidad, $precio);
    
    if ($stmt->execute()) {
        header('Location: inventario.php');
    } else {
        echo "Error al ejecutar la consulta: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $conexionsql->error;
}


?>