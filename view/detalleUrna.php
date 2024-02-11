<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/inicio.css">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body>

    <header>
        <?php include '../view/navbar.html'; ?>
    </header>

    <div class="container">
        <?php include '../view/menu.html'; ?>
    </div>

    <div id="columna2">
       
            <?php if (isset($mensajeError)) : ?>
                <p><?php echo $mensajeError; ?></p>
            <?php else : ?>
                <h1>Detalles de la Urna</h1>
                
                <?php if (isset($urna)) : ?>
                    <p>ID: <?php echo $urna['ideleccion']; ?></p>
                    <p>Título: <?php echo $urna['titulo']; ?></p>
                <?php endif; ?>
            <?php endif; ?>
    </div>

    <footer>
        <?php include '../view/footer.html'; ?>
    </footer>

</body>

</html>
