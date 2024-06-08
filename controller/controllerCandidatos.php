<?php 
require_once ('../models/ModeloCandidato.php');
require_once ('../models/ModeloCandidato.php');
require_once ('../conexion/conexion.php');

if (isset($_POST['eliminar'])) {
    $id = $_POST['idcandidato'];
    $idb = $_POST['idbusqueda'];

    $sql = "UPDATE candidato SET eliminado = 1 WHERE idcandidato = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    echo "<script>
          alert('Candidato marcado como eliminado'); 
          window.location.href='../view/Administrador/urnaCandidatos.php?ideleccion=$idb';
          </script>";
} else {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $descripcion = $_POST['descripcion'];
    $partido = $_POST['partido'];
    $urna = $_POST['urna'];

    $candidato = new candidato($nombre, $apellido, $edad, $descripcion, $partido, $urna);
    $nombre = $candidato->getNombre();
    $apellido = $candidato->getApellido();
    $edad = $candidato->getEdad();
    $descripcion = $candidato->getDescripcion();
    $partido = $candidato->getPartido();
    $urna = $candidato->getUrna();

    $sql = "INSERT INTO candidato (nombre, apellido, edad, descripcion, partido, ideleccion) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssissi', $nombre, $apellido, $edad, $descripcion, $partido, $urna);
    $stmt->execute();

    echo "<script>
          alert('Candidato registrado con éxito'); 
          window.location.href='../view/Administrador/urnaCandidatos.php?ideleccion=$urna';
          </script>";
}
