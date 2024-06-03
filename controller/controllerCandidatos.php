<?php 
require_once ('../models/ModeloCandidato.php');
require_once ('../conexion/conexion.php');



if (isset($_POST['eliminar'])) {
    $id = $_POST['idcandidato'];
    $idb = $_POST['idbusqueda'];
    echo $id;

    $sql = "DELETE FROM candidato WHERE idcandidato = $id";
    $urna= $con->query($sql);
    echo "<script>
          alert('candidato eliminado'); 
          window.location.href='../view/Administrador/urnaCandidatos.php?ideleccion=$idb';
          </script>";
    // header('Location:/proyecto/view/Administrador/inicio.php');

} 

else{
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
}
}
?>