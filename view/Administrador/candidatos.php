<?php
require_once ('../../conexion/conexion.php');
$idBusqueda= $_GET["ideleccion"];
$sql1="SELECT * FROM eleccion where ideleccion=".$idBusqueda;
$urna= $con->query($sql1);
?>
<div id="InformacionCandidatos"> 

    <table class="tablaContainer">

    <form action="../../controller/controllerCandidatos.php" method="post" id="agregarCandidatos">
        <h1>CANDIDATOS</h1>
        <?php

                if ($urna) {
                $fila1= mysqli_fetch_assoc($urna);{ 
                }}
                ?>
    
                
       
        <input type="hidden" name="id" value="<?php echo ($fila1['ideleccion']) ?>">
        <thead>

            <tr>
                <th><h3>nombre</h3></th>
                <th><h3>apellido</h3></th>
                <th><h3>edad</h3></th>
                <th><p>descripcion</p></th>
                <th><h3>partido</h3></th>
                <th><h3>urna</h3></th>
                <!-- <th><h3>imagen</h3></th> -->
            </tr>

        </thead>

        <tbody>

            <tr>
                    
                <td><input type="text" name="nombre" id="nombre"></td>

                
                <td><input type="text" name="apellido" id="apellido"></td>
                
                
                <td><input type="number" name="edad" min="10" id="edad"></td>
                
                
                <td><input type="text" name="descripcion" id="descripcion"></td>
                
                
                <td><input type="text" name="partido" id="partido" ></td>

                
                <td><label><?php echo($fila1['ideleccion']) ?></label></td>
                <input type="hidden" name="urna" value="<?php echo($fila1['ideleccion']) ?>">
            

                <br>                
                <!-- <td><input type="file" id="imageUpload" name="image" accept="image/*"></td> -->
                <br>
               
            </tr>
            
        </tbody>
        
    </table>
    <br>
        <button type="submit">Guardar</button>
    </form>
      </div>
    <script src="/proyecto/view/js/validacionEspacioBl.js">    </script>