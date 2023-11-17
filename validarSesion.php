<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "SELECT * FROM usuario WHERE nombreUsuario='$usuario' AND contraseña='$contrasena'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['tipo'] == 'administrador') {
        header('Location: admin/MyResume/index.html');
    } elseif ($row['tipo'] == 'cliente') {
        header('Location: productos.html');
    }
} else {
    // Usuario no válido, puedes redirigirlo a una página de error o mostrar un mensaje.
    echo "Usuario o contraseña incorrectos.";
}

$conn->close();
?>
