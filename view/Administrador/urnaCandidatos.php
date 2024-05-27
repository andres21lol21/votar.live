<?php
require_once ('../../conexion/conexion.php');
$idBusqueda= $_GET["ideleccion"];
$sql="SELECT * FROM candidato where ideleccion=".$idBusqueda;
$sql1="SELECT * FROM eleccion where ideleccion=".$idBusqueda;


$candidatos= $con->query($sql);
$urna= $con->query($sql1);

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
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  -->
</head>

<body>

  <header>
    <?php include '../../view/navbar.html'; ?>
    

  </header>
    <div class="container">

       <?php include '../../view/menu.html'; ?>

    </div>

    
    <div id="columna2"  >
      <div class="container2" >
          <div>
            
            <?php
        
                if ($urna) {
                  $fila1= mysqli_fetch_assoc($urna);{ 

            ?>

                <a href="../../view/Administrador/urna.php?ideleccion=<?php echo($fila1['ideleccion']) ?>">Agregar Candidatos</a>  

            <?php
                  }
                  }
            ?> 

          </div>
          
          <?php
                if ($candidatos) {
                    while ($fila= mysqli_fetch_assoc($candidatos)){
          ?>
         
                
                <div class="" >
                  
                      <tr>
                          <td><?php echo ($fila['nombre']) ?> <?php echo ($fila['apellido']) ?> </td>
                          <br>
                          <td>ID : <?php echo ($fila['idcandidato']) ?> </td>
                          <br>
                          <td>Edad<?php echo ($fila['edad']) ?></td>
                          <br>
                          <td>partido : <?php echo ($fila['partido']) ?></td>
                          <br>
                          <td>Descripcion: <?php echo ($fila['descripcion']) ?></td>
                      </tr>  

                </div>
      
      
     
      
          <?php
            }
            }
          
          ?>
       
    </div>
      

<footer>
    <?php include '../../view/footer.html'; ?>
</footer>


</body>

</html>