<?php 
require_once ('../models/ModeloCandidato.php');
require_once ('../conexion/conexion.php');

$nombre =  $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad =$_POST['edad'];
$descripcion = $_POST['descripcion'];
$partido = $_POST['partido'];


$candidato = new candidato ($nombre,$apellido,$edad,$descripcion,$partido);
$nombre = $candidato ->getNombre();
$apellido =$candidato ->getApellido();
$edad =$candidato ->getEdad();
$descripcion =$candidato ->getDescripcion();
$partido =$candidato ->getPartido();


$sql = "INSERT INTO candidato (nombre, apellido, edad, descripccion, partido) VALUES ('$nombre', '$apellido','$edad','$descripcion','$partido')";
if ($con->query($sql)){
    header('Location:../view/inicio.php');
}else {
    echo "error";
}
?>