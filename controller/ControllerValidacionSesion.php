<?php
require_once('../conexion/conexion.php');
session_start();

function obtenerDatosUsuario($conexion) {
    if (isset($_SESSION['correo'])) {
        $correoUsuario = $_SESSION['correo'];
        
        $sql = "SELECT * FROM usuario WHERE correo = '$correoUsuario'";
        
        $usuario = $conexion->query($sql);

        if ($usuario && $usuario->num_rows > 0) {
            return $usuario->fetch_assoc();
        }
    }
    return null;
}
?>
