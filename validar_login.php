<?php
// 1. Incluimos la conexión aquí, porque aquí sí vamos a consultar la BD
include 'conexion.php'; 

// 2. Recibimos los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// 3. Consultamos la base de datos
// (Asegúrate de que tu tabla se llame 'usuarios' o ajusta según corresponda)
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
$resultado = mysqli_query($conexionsql, $sql);

// 4. Verificamos si existe el usuario
if (mysqli_num_rows($resultado) > 0) {
    // Si es correcto, redirigimos al inventario
    header("Location: inventario.php"); 
} else {
    // Si falla, regresamos al login con un error
    echo "Error: Credenciales incorrectas.";
    echo "<br><a href='index.php'>Volver a intentar</a>";
}
?>