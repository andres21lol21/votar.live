<?php
require_once ('../../conexion/conexion.php');
require_once ('../../controller/ControllerValidacionSesion.php');

$datosUsuario = obtenerDatosUsuario($con);

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
        <?php include '../../view/Votante/menu.html'; ?>
    </div>

    <div id="columna2perfil">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($datosUsuario !== null) : ?>
                <tr>
                    <td><?php echo $datosUsuario['nombre']; ?></td>
                    <td><?php echo $datosUsuario['apellido']; ?></td>
                    <td><?php echo $datosUsuario['correo']; ?></td>
                    <td><?php echo $datosUsuario['telefono']; ?></td>
                    <td><?php echo $datosUsuario['rolUsuario']; ?></td>
                </tr>
                <?php else : ?>
                <tr>
                    <td colspan="5">No se encontraron datos del usuario.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <footer>
        <?php include '../../view/footer.html'; ?>
    </footer>

</body>

</html>
