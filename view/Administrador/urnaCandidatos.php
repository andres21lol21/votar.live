<?php
require_once ('../../conexion/conexion.php');
$idBusqueda = $_GET["ideleccion"];
$sql = "SELECT * FROM candidato WHERE ideleccion = ? AND eliminado = 0";
$sql1 = "SELECT * FROM eleccion WHERE ideleccion = ?";

$stmt = $con->prepare($sql);
$stmt->bind_param('i', $idBusqueda);
$stmt->execute();
$candidatos = $stmt->get_result();

$stmt1 = $con->prepare($sql1);
$stmt1->bind_param('i', $idBusqueda);
$stmt1->execute();
$urna = $stmt1->get_result();
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
    <?php include '../../view/menu.html'; ?>
  </div>

  <div id="columna2">
    <div class="container2">
      <div>
        <?php
        if ($urna) {
          $fila1 = $urna->fetch_assoc();
        ?>
          <a href="../../view/Administrador/urna.php?ideleccion=<?php echo($fila1['ideleccion']) ?>">Agregar Candidatos</a>  
        <?php
        }
        ?>
      </div>
      
      <?php
      if ($candidatos) {
        while ($fila = $candidatos->fetch_assoc()) {
      ?>
        <div>
          <form action="/proyecto/controller/controllerCandidatos.php" method="post">
            <tr>
              <td><?php echo ($fila['nombre']) ?> <?php echo ($fila['apellido']) ?></td>
              <br>
              <td>ID: <?php echo ($fila['idcandidato']) ?></td>
              <input type="hidden" name="idcandidato" value="<?php echo $fila['idcandidato'] ?>">
              <br>
              <td>Edad: <?php echo ($fila['edad']) ?></td>
              <br>
              <td>Partido: <?php echo ($fila['partido']) ?></td>
              <br>
              <td>Descripcion: <?php echo ($fila['descripcion']) ?></td>
            </tr>
            <br>
            <input type="hidden" name="idbusqueda" value="<?php echo $idBusqueda ?>">
            <input type="hidden" name="eliminar" value="1">
            <button type="submit">Eliminar</button>
          </form>
        </div>
      <?php
        }
      }
      ?>
    </div>
  </div>

  <footer>
    <?php include '../../view/footer.html'; ?>
  </footer>
</body>

</html>
