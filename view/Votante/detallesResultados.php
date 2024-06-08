<?php
require_once ('../../conexion/conexion.php');

$idBusqueda = $_GET["ideleccion"];

// Consulta para obtener los conteos individuales por candidato
$sql = "SELECT candidato.*, 
               COUNT(voto.id_candidato) AS num_registros
        FROM candidato
        LEFT JOIN voto ON candidato.idcandidato = voto.id_candidato AND candidato.ideleccion = voto.eleccion_ideleccion
        WHERE candidato.ideleccion = ?
        GROUP BY candidato.idcandidato";

// Consulta para obtener el conteo total de votos de todos los candidatos
$sqlTotal = "SELECT COUNT(*) AS total_votos
             FROM voto
             WHERE eleccion_ideleccion = ?";

// Preparar y ejecutar la consulta para obtener los conteos individuales por candidato
if ($stmt = $con->prepare($sql)) {
    $stmt->bind_param('i', $idBusqueda);
    $stmt->execute();
    $result = $stmt->get_result();
    $candidatos = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $con->error;
    exit;
}

// Preparar y ejecutar la consulta para obtener el conteo total de votos de todos los candidatos
if ($stmtTotal = $con->prepare($sqlTotal)) {
    $stmtTotal->bind_param('i', $idBusqueda);
    $stmtTotal->execute();
    $resultTotal = $stmtTotal->get_result();
    $totalVotos = $resultTotal->fetch_assoc()['total_votos'];
    $stmtTotal->close();
} else {
    echo "Error al preparar la consulta para el conteo total de votos: " . $con->error;
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../view/css/inicio.css">
  <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <header>
    <?php include '../../view/navbar.html'; ?>
  </header>
  <div class="container">
    <?php include '../../view/Votante/menu.html'; ?>
  </div>

  <div id="columna2">
    <div class="container2">
      <div>
        <h2>Conteo Total de Votos: <?php echo $totalVotos; ?></h2>
      </div>

      <div>
        <h2>Conteo de Votos por Candidato:</h2>
        <?php
        if ($candidatos) {
          foreach ($candidatos as $fila) {
            if ($fila['eliminado']) {
              $status = "(Eliminado)";
            } else {
              $status = "";
            }
        ?>
          <div>
            <h3><?php echo $fila['nombre'] . ' ' . $fila['apellido'] . ' ' . $status; ?></h3>
            <p>ID: <?php echo $fila['idcandidato']; ?></p>
            <p>Edad: <?php echo $fila['edad']; ?></p>
            <p>Partido: <?php echo $fila['partido']; ?></p>
            <p>Descripción: <?php echo $fila['descripcion']; ?></p>
            <p>Cantidad de votos: <?php echo $fila['num_registros']; ?></p>
          </div>
        <?php
          }
        } else {
          echo "No se encontraron candidatos.";
        }
        ?>
      </div>
    </div>

    <footer>
      <?php include '../../view/footer.html'; ?>
    </footer>

  </body>
</html>
