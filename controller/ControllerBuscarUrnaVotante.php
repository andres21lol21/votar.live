<?php
require_once('../conexion/conexion.php');

$id = $_POST['idUrna'];

$sql = "SELECT * FROM eleccion WHERE ideleccion = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$urna = $stmt->get_result();

if ($urna->num_rows > 0) {
    header("Location: /proyecto/view/Votante/detalleUrna.php?idUrna=$id");
    exit();
}else {
       echo '
       <script>
       alert("la urna no existe");
       
       window.location.href="/proyecto/view/Votante/BuscarUrna.php";
       </script>';
    }

?>
