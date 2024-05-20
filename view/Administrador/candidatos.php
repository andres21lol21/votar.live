<div id="InformacionCandidatos"> 

    <table class="tablaContainer">

    <form action="../controller/controllerCandidatos.php" method="post">
        <h1>CANDIDATOS</h1>
        <!-- Puedes agregar una imagen aquí si es necesario -->
        <input type="hidden" name="id" value="<?php echo $idc ?>">
        <thead>
            <tr>
                <th><h3 for="">nombre</h3></th>
                <th><h3>apellido</h3></th>
                <th><h3>edad</h3></th>
                <th><p>descripcion</p></th>
                <th><h3>partido</h3></th>
                <th><h3>imagen</h3></th>
            </tr>



        </thead>

        <tbody>
            <tr>
                    
                <td><input type="text" name="nombre" ></td>

                
                <td><input type="text" name="apellido" ></td>
                
                
                <td><input type="number" name="edad" min="10" ></td>
                
                
                <td><input type="text" name="descripcion" ></td>
                
                
                <td><input type="text" name="partido" ></td>
                <br>

                
                <td><input type="file" id="imageUpload" name="image" accept="image/*"></td>
                <br>
                
                <!-- Agrega un botón para enviar el formulario -->
               
            </tr>
            
    
        </tbody>
        
    </table>
    <br>
        <button type="submit">Guardar</button>
    </form>
      </div>