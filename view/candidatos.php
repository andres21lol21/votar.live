<div id="InformacionCandidatos"> 



    <form action="../controller/controllerCandidatos.php" method="post">
        <h1>CANDIDATOS</h1>
        <!-- Puedes agregar una imagen aquí si es necesario -->
        <input type="hidden" name="id" value="<?php echo $idc ?>">

        <h3 for="">nombre</h3>
        <input type="text" name="nombre" >

        <h3>apellido</h3>
        <input type="text" name="apellido" >
        
        <h3>edad</h3>
        <input type="number" name="edad" min="10" >
        
        <p>descripcion</p>
        <input type="text" name="descripcion" >
        
        <h3>partido</h3>
        <input type="text" name="partido" >
        <br>

        <!-- Agrega un botón para enviar el formulario -->
        <button type="submit">Guardar</button>
    </form>
 


      </div>