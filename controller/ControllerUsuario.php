<?php
require_once ('../models/modeloUsuario.php');
require_once ('../conexion/conexion.php');

    $nombre =  $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNacimiento =$_POST['fechaNac'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
   



    $usuario = new usuario ($nombre,$apellido,$fechaNacimiento,$telefono,$correo,$contraseña);
    $name = $usuario ->getNombre();
    $lastname = $usuario ->getApellido();
    $birthday =$usuario ->getFechaNac();
    $telefono =$usuario ->getTelefono();
    $email =$usuario ->getCorreo();
    $pass = $usuario ->getContraseña();

    $sql = "INSERT INTO usuario (nombre, apellido,correo,telefono,contraseña,fechaNacimiento) VALUES ('$name', '$lastname','$correo','$telefono','$pass','$birthday')";

    if ($con->query($sql)){
        header('Location:../view/index.php');
    }else {
        echo "error";
    }
    $con->close();


?>