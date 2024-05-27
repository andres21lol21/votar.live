<?php
require_once ('../models/ModeloVoto.php');
require_once ('../conexion/conexion.php');



$idUsuario = $_POST["idusuario"];

$fechaHora = $_POST["fecha"];

$idCandidato = $_POST["idcandidato"];

$eleccion_ideleccion = $_POST["eleccion"];

$consulta = "SELECT * FROM voto WHERE idUsuario = '$idUsuario' AND eleccion_ideleccion = '$eleccion_ideleccion'" ;
$resultado = $con->query($consulta);

    if ($resultado->num_rows > 0) {
        // El usuario ya está registrado, puedes redirigirlo a una página de error o mostrar un mensaje
        echo "<script>
          alert('Usted ya realizo un voto en esta urna'); 
          window.location.href='../view/Votante/urnaCandidatos.php?ideleccion=$eleccion_ideleccion';
          </script>";
    } else {
$voto= new voto ($idUsuario, $fechaHora, $idCandidato, $eleccion_ideleccion);

$idUsuario = $voto -> getidUsuario();
$fechaHora = $voto -> getfechaHora();
$idCandidato = $voto -> getidCandidato();
$eleccion_ideleccion = $voto -> geteleccion_ideleccion();

$sql = "INSERT INTO voto (idUsuario, fechaHora,id_candidato,eleccion_ideleccion) VALUES ('$idUsuario', '$fechaHora','$idCandidato','$eleccion_ideleccion')";

if ($con->query($sql)){
    echo "<script>
      alert('voto registrado con exito'); 
      window.location.href='../view/Votante/urnaCandidatos.php?ideleccion=$eleccion_ideleccion';
      </script>";
   
}else {
    echo "error";
}
    }

$con->close();

?>