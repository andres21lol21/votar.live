<?php
require_once ('../../conexion/conexion.php');

$id = isset($_GET['idUrna']) ? (int)$_GET['idUrna'] : 0;

if ($id > 0) {
    $sql = "SELECT * FROM eleccion WHERE ideleccion = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $urna = $stmt->get_result();
} else {
    echo "ID de urna no válido.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-wi  dth, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../view/css/inicio.css">
  <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  -->
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
      <?php
            if ($urna) {
                 while ($fila= mysqli_fetch_assoc($urna)){
      ?>
      <a href="../../view/Votante/urnaCandidatos.php?ideleccion=<?php echo($fila['ideleccion']) ?>" onclick="verificarEstado()">
      <div  >
        
            <tr>
                <td><?php echo ($fila['titulo']) ?> </td>
                <br>
                <td>ID : <?php echo ($fila['ideleccion']) ?> </td>
                <br>
                <td><?php echo ($fila['descripcion']) ?></td>
                <br>
                <td>fecha inicio : <?php echo ($fila['fechaInicio']) ?></td>
                <br>
                <td>fecha cierre : <?php echo ($fila['fechaFin']) ?></td>
                <input type="hidden" id="estadoU" value="<?php echo($fila['estado']) ?>">
                <br>
                <td>estado : <?php echo ($fila['estado']) ?></td>
                    
      </div>
      </a>  
      <?php
          }
          }
      ?>
      
     </div>

    </div>

  </div>

<footer>
    <?php include '../../view/footer.html'; ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="/proyecto/view/js/validacionUrna.js"></script>
</body>

</html>