<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Utilizar una consulta preparada para evitar SQL injection
$query = "SELECT * FROM usuario WHERE nombreUsuario=? AND contraseña=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $usuario, $contrasena);
$stmt->execute();
$result = $stmt->get_result();

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

$stmt->close();
$conn->close();
?>
