<?php
require_once ('../conexion/conexion.php');

$sql="SELECT * FROM eleccion ";

$urna= $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/inicio.css">
  <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  -->
</head>

<body>

  <header>
    <?php include '../view/navbar.html'; ?>
    

  </header>
    <div class="container">

       <?php include '../view/menu.html'; ?>

    </div>

    
    <div id="columna2">
      <div class="container3">
      <h1>datos urna</h1>
      <?php
      $id= $_GET['ideleccion'];
      $sql= "SELECT * FROM eleccion where ideleccion = $id";
      $urna= $con->query($sql);
    //echo ($usuario);

    if($urna){
        $fila= mysqli_fetch_assoc($urna);
    ?>
    <form action="../controller/ControllerUrna.php"method="post">
        <input type="hidden" name="id" value="<?php echo($id) ?>">
        <label for="">titulo</label>
        <input type="text" name="titulo" value="<?php echo $fila['titulo'] ?>">
        <br>
        <label for="">descripcion</label>
        <input type="text" name="descripcion"  value="<?php echo $fila['descripcion'] ?>">
        <br>
        <label for="">fecha inicio</label>
        <input type="date" name="fechaInicio"  value="<?php echo $fila['fechaInicio'] ?>">
        <br>
        <label for="">fecha fin</label>
        <input type="date" name="fechaFin"  value="<?php echo $fila['fechaFin'] ?>">
        <br>
        <form action="../controller/ControllerUrna.php" method="post">
                         <input type="hidden" name="actualizar">
                         <input type="hidden" name="ideleccion" value="<?php echo($fila['ideleccion']) ?>">
                         <button>actualizar</button>
                    </form>
        <form action="../controller/ControllerUrna.php" method="post">
                         <input type="hidden" name="eliminar">
                         <input type="hidden" name="ideleccion" value="<?php echo($fila['ideleccion']) ?>">
                         <button>eliminar</button>
                    </form>



    <?php
    }

    ?>


        
     </div>

    </div>

  </div>

<footer>
    <?php include '../view/footer.html'; ?>
</footer>


</body>

</html>