<?php
require_once('../conexion/conexion.php');
require_once('../controller/ControllerBuscarUrna.php');


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['idUrna'])) {
    $idUrna = $_GET['idUrna'];
    
    $urna = buscarUrnaPorID($idUrna);
    
    if ($urna === null) {
        $mensajeError = "No se encontró ninguna urna con ese ID.";
    } else {
        
        header("Location: ../../view/Admin/detalleUrna.php?idUrna=$idUrna");
        exit();
    }
}
?>
