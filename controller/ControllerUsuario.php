<?php
require_once ('../models/modeloUsuario.php');
require_once ('../conexion/conexion.php');

    $nombre =  $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNacimiento =$_POST['fechaNac'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
   
    // Verificar si el usuario ya está registrado
    $consulta = "SELECT * FROM usuario WHERE correo = '$correo'";
    $resultado = $con->query($consulta);

    if ($resultado->num_rows > 0) {
        // El usuario ya está registrado, puedes redirigirlo a una página de error o mostrar un mensaje
        echo "<script>
          alert('el usuario ya se encuentra registrado'); window.location.href='../view/index.php';</script>";
    } else {


    $usuario = new usuario ($nombre,$apellido,$fechaNacimiento,$telefono,$correo,$contraseña);
    $name = $usuario ->getNombre();
    $lastname = $usuario ->getApellido();
    $birthday =$usuario ->getFechaNac();
    $telefono =$usuario ->getTelefono();
    $email =$usuario ->getCorreo();
    $pass = $usuario ->getContraseña();

    $sql = "INSERT INTO usuario (nombre, apellido,correo,telefono,contraseña,fechaNacimiento) VALUES ('$name', '$lastname','$correo','$telefono','$pass','$birthday')";

    if ($con->query($sql)){
        echo "<script>
          alert('usuario registrado con exito'); window.location.href='../view/index.php';</script>";
        // header('Location:../view/index.php');
    }else {
        echo "error";
    }
   }
    
    $con->close();


?>
