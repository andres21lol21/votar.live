<?php
require_once ('../models/ModeloUrna.php');
require_once ('../conexion/conexion.php');

if (isset($_POST['eliminar'])) {
    
    $id = $_POST['ideleccion'];
    echo $id;

    $sql = "DELETE FROM eleccion WHERE ideleccion = $id";
    $urna= $con->query($sql);

    header('Location:/proyecto/view/Administrador/inicio.php');
}
elseif(isset($_POST['actualizar'])){
    $id = $_POST['ideleccion'];
    echo $id;

    $titulo = $_POST['titulo'];
    $descripcion =$_POST['descripcion'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];
    

    $urna = new urna ($titulo,$descripcion,$fechaInicio,$fechaFin);
    $titulo = $urna ->getTitulo();
    $descripcion =$urna ->getDescripcion();
    $Finicio =$urna ->getFechaInicio();
    $Ffin =$urna ->getFechaFin();


    $sql= "UPDATE eleccion SET titulo='$titulo', descripcion='$descripcion', fechaInicio ='$Finicio', fechaFin ='$Ffin'  WHERE eleccion.ideleccion= $id";
    $urna= $con->query($sql);

    header('Location:../view/Administrador/inicio.php');

}
else {
        
    
    $titulo = $_POST['titulo'];
    $descripcion =$_POST['descripcion'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];
    

    $urna = new urna ($titulo,$descripcion,$fechaInicio,$fechaFin);
    $titulo = $urna ->getTitulo();
    $descripcion =$urna ->getDescripcion();
    $Finicio =$urna ->getFechaInicio();
    $Ffin =$urna ->getFechaFin();

    $sql = "INSERT INTO eleccion (titulo, descripcion, fechaInicio, fechaFin) VALUES ('$titulo', '$descripcion','$Finicio','$Ffin')";

    if ($con->query($sql)){
        header('Location:../view/Administrador/inicio.php');
    }else {
        echo "error";
    }

}
    $con->close();


?>