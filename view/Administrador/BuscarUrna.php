<?php
require_once ('../../conexion/conexion.php');

$sql="SELECT * FROM eleccion where ideleccion=idUrna1";

$urna= $con->query($sql);

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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body>

    <header>
        <?php include '../../view/navbar.html'; ?>
    </header>

    <div class="container">
        <?php include '../../view/menu.html'; ?>
    </div>

    <div id="columna2">
       
        <h1>Buscar Urna por ID</h1>
    <form id="busqueda" action="../../view/Administrador/detalleUrna.php" method="GET">
        <label for="idUrna1" >ID de Urna:</label>
        <input type="text" id="idU" name="idUrna" required>
        <button type="submit">Buscar</button>
    </form>
    </div>

    <footer>
        <?php include '../../view/footer.html'; ?>
    </footer>
    
    
 <script src="../../view/js/msError.js">
    
</script>   
</body>


</html>
