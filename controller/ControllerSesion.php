<?php
session_start();
require_once('../conexion/conexion.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['pass'];

    $consulta = "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$contraseña'";
    $resultado = $con->query($consulta);

    if ($resultado->num_rows > 0) {
        $_SESSION['correo'] = $correo;
        
        header("Location: ../view/rol.php");
        exit();
    }else {
        header("Location: ../index.php");
         exit();
     }
} else {
    header("Location: ../view/error.php");
    exit();
}
?>