<?php 
require_once ('../models/ModeloCandidato.php');
require_once ('../conexion/conexion.php');

$nombre =  $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad =$_POST['edad'];
$descripcion = $_POST['descripcion'];
$partido = $_POST['partido'];
$urna =  $_POST['urna'];


$candidato = new candidato ($nombre,$apellido,$edad,$descripcion,$partido,$urna);
$nombre = $candidato ->getNombre();
$apellido =$candidato ->getApellido();
$edad =$candidato ->getEdad();
$descripcion =$candidato ->getDescripcion();
$partido =$candidato ->getPartido();
$urna = $candidato ->getUrna();

$sql = "INSERT INTO candidato (nombre, apellido, edad, descripcion, partido, ideleccion) VALUES ('$nombre', '$apellido','$edad','$descripcion','$partido','$urna')";
if ($con->query($sql)){
    header('Location:/proyecto/view/Administrador/inicio.php');
}else {
    echo "error";
}
?>