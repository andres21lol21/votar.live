<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyecto</title>
    <link rel="stylesheet" href="view/css/estilop.css">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
</head>
<body>
    
   
    <main>
        <div class="container">
            <div >
                 <div id="logo" > <img src="view/img/Black___White_Minimalist_Business_Logo-removebg-preview.png" alt=""> </div>
                   <div id="texto">
                <!-- <h1> VOTACIONES MAS SEGURAS</p>   -->
            </div>
            </div>

        <div >
            <div class="sesion">
            <h1> INICIO DE SESION</h1>
            
            
            <form id="formIS" action="controller/ControllerSesion.php"method="post">

                <div>
                <label for="">CORREO</label>
                <input id="correo" type="email"  name="correo" />
                </div>
                <div>
                <label > CONTRASEÑA </label>
                <input id ="contrasena"type="password" min="" name="pass" />
                </div>
                <p class="registro">¿NO TIENES CUENTA? <A class="registro" href="registro.html"> REGISTRATE</p> </A>
                <button type="submit"> INICIAR SESION </button>
            </form>
                

           
            </div>
        </div>
       </div>
        
    </main>
<script src="/proyecto/view/js/validacionInSesion.js"></script>
</body>
</html>