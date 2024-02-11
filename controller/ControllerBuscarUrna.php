<?php
require_once('../conexion/conexion.php');

function buscarUrnaPorID($idUrna) {
    global $con;
    
    $sql = "SELECT * FROM eleccion WHERE ideleccion = '$idUrna'";
    
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>
