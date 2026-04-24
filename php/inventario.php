<?php
include '/phpconexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Inventario - La Despensa de Don Juan</title>
</head>
<body>
    <div class="login-container" style="max-width: 800px;">
        <h2>Gestión de Inventario</h2>
        
        <form action="agregar.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre del Producto" required>
            <input type="text" name="categoria" placeholder="Categoría" required>
            <input type="number" name="cantidad" placeholder="Cantidad" required>
            <input type="text" name="precio" placeholder="Precio ($)" required>
            <button type="submit">Agregar Producto</button>
        </form>

        <hr>

        <table border="1" width="100%" style="margin-top: 20px; border-collapse: collapse;">
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php
            // Verificamos que la variable de conexión exista antes de consultar
            if (isset($conexionsql)) {
                $resultado = mysqli_query($conexionsql, "SELECT * FROM productos");
                
                // Usamos $resultado en el ciclo while
                while($row = mysqli_fetch_array($resultado)) {
                    echo "<tr>
                            <td>{$row['nombre']}</td>
                            <td>{$row['categoria']}</td>
                            <td>{$row['cantidad']}</td>
                            <td>$ {$row['precio']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Error: No se pudo conectar a la base de datos.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>