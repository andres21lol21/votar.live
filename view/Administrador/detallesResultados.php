<?php
require_once ('../../conexion/conexion.php');
$idBusqueda= $_GET["ideleccion"];
// $sql="SELECT * FROM candidato where ideleccion=".$idBusqueda;
$sql="SELECT candidato.*,
voto.id_candidato AS id_candidato, 
voto.eleccion_ideleccion AS id_eleccion
FROM candidato
INNER JOIN voto ON candidato.ideleccion = voto.eleccion_ideleccion
WHERE candidato.ideleccion =".$idBusqueda;
// $sql1="SELECT * FROM eleccion where ideleccion=".$idBusqueda;
// $sql2="SELECT * FROM voto where eleccion_ideleccion".$idBusqueda;


$candidatos= $con->query($sql);
// $voto= $con->query($sql2);

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
            
            <!-- <?php
        
                if ($voto) {
                  $fila1= mysqli_fetch_assoc($voto);{ 

            ?>

                <a href="../../view/Administrador/urna.php?ideleccion=<?php echo($fila1['ideleccion']) ?>">Agregar Candidatos</a>  

            <?php
                  }
                  }
            ?>  -->

          </div>
           
          <?php
                if ($candidatos) {
                    while ($fila= mysqli_fetch_assoc($candidatos)){
          ?>
         
                
                <div class="" >

                <form action="/proyecto/controller/controllerCandidatos.php" method="post">
                  
                      <tr>
                          <td><?php echo ($fila['nombre']) ?> <?php echo ($fila['apellido']) ?> </td>
                          <br>
                          <td>ID : <?php echo ($fila['idcandidato']) ?> </td>
                          <input type="hidden" name="idcandidato" value="<?php echo $fila['idcandidato'] ?>">
                          <br>
                          <td>Edad<?php echo ($fila['edad']) ?></td>
                          <br>
                          <td>partido : <?php echo ($fila['partido']) ?></td>
                          <br>
                          <td>Descripcion: <?php echo ($fila['descripcion']) ?></td>
                          <br>
                          <td>cantidad de votos: <?php echo ($fila['id_candidato']) ?></td>
                      </tr>
                      <br>
                       <input type="hidden" name="idbusqueda" value="<?php echo $idBusqueda ?>">
                      <input type="hidden" name="eliminar">
                      <button type="sumbit">eliminar</button> 
                </form>
                
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