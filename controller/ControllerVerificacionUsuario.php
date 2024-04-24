<?php
require_once ('../conexion/conexion.php');

// Obtener el correo del formulario
$correo = $_POST['correo'];

// Consultar la base de datos para verificar si el correo ya está registrado
$consulta = "SELECT * FROM usuario WHERE correo = '$correo'";
$resultado = $con->query($consulta);

if ($resultado->num_rows > 0) {
    // El usuario ya está registrado
    $usuarioRegistrado = true;
} else {
    // El usuario no está registrado
    $usuarioRegistrado = false;
}

// Puedes devolver el resultado como JSON si lo necesitas en JavaScript
echo json_encode(['usuarioRegistrado' => $usuarioRegistrado]);

$con->close();
?>
