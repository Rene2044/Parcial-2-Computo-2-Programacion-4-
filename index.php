<?php
    include '/phpconexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Login - La Despensa de Don Juan</title>
</head>
<body>
    <div class="login-container">
        <h2>La Despensa de Don Juan</h2>
        <form action="inventario.php" method="POST">
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Ingresar al Sistema</button>
        </form>
    </div>
</body>
</html>