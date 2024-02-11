
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Urna</title>
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

    
    <div id="columna2crear">
    <form action="../controller/controllerUrna.php"method="post">
        <input type="hidden" name="id" value="<?php echo($id) ?>">
        <label for="">Titulo</label>
        <input type="text" name="titulo">
        <br>
        <label for="">Descripcion</label>
        <input type="text" name="descripcion">
        <br>
        <label for="">Fecha Inicio</label>
        <input type="date" name="fechaInicio">
        <br>
        <label for="">Fecha Fin</label>
        <input type="date" name="fechaFin">
        <br>
        <button type="submit">Crear Urna</button>


    </form>

    </div>

  </div>

<footer>

</footer>


</body>

</html>