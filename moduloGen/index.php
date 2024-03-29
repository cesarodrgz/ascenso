<?php
//Iniciamos la sesión
session_start();

/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Inicio</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="index.php">Opciones</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="usuarios/index.php">Gestionar usuarios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disable" href="departamentos/index.php" tabindex="-1" aria-disabled="true">Ver premios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disable" href="../templates/cerrarS.php" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav> <br><br><br>

    <div class="container">
        <h2 class="text-center text-primary">Opciones</h2> <br>
        <div class="alert alert-success" role="alert">
            <b>Bienvenido:</b> <?php echo $_SESSION["nombre"]; ?>
        </div>

        <div class="opciones">
            <!-- Usuarios -->
            <img src="../img/usuario.png" alt="logo-usuarios" class="rounded mx-auto d-block" style="width: 115px;">
            <div class="usuarios">
                <a href="usuarios/index.php" class="btn btn-warning btn-block">Gestionar usuarios</a>
            </div> <br>

            <!-- Premios -->
            <img src="../img/premio.png" alt="logo-usuarios" class="rounded mx-auto d-block" style="width: 115px;">

            <div class="departamentos">
                <a href="departamentos/index.php" class="btn btn-warning btn-block">Premios</a>
            </div>
        </div>
    </div> <br><br>

    <!--Inlcuimos el footer-->
    <?php include '../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>