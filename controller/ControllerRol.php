<?php
session_start();
require_once('../conexion/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_SESSION['correo']; // Obtener el correo del usuario

    $nuevoRol = $_POST['nuevo_rol']; // Obtener el nuevo rol seleccionado

    // Intentar actualizar el rol del usuario en la base de datos
    $sql = "UPDATE usuario SET rolUsuario = '$nuevoRol' WHERE correo = '$correo'";
    
    if ($con->query($sql) === TRUE) {
        // Actualización exitosa, actualizar la sesión con el nuevo rol
        $_SESSION['rol'] = $nuevoRol;
        // Redirigir a una página de éxito o mostrar un mensaje en la misma página
        header("Location: ../view/rol.php");
        exit();
    } else {
        // Si hay un error en la actualización, almacenar un mensaje de error en una variable de sesión
        $_SESSION['error_message'] = "Hubo un error al cambiar el rol. Por favor, inténtalo de nuevo.";
        // Redirigir de vuelta a la página anterior (donde se encuentra el formulario de cambio de rol)
        header("Location: ../view/rol.php");
        exit();
    }
}
?>
