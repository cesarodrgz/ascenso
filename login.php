<?php
//Incluimos la conexión para validar el login
include 'templates/conexion.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Icono -->
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/foot.css">
</head>

<body>
    <!-- Inicio navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php" style="color: white;">ASCENSO LDJ 10</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Nosotros</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Acerca de</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
                </li>
            </ul>
        </div>
    </nav> 
    <!-- Fin navbar -->
    <br>

    <!-- Logo del ministerio -->
    <img src="img/logo.png" alt="LOGO" style="width: 150px;" class="rounded mx-auto d-block">

    <!-- Inicio del container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-primary">Inciar sesión</h1>
                <!-- Incluimos aquí la clase de iniciar sesión -->
                <?php include "templates/iniciarS.php" ?>
            </div>
        </div>

        <!-- Formulario de inicio de sesión -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <form action="" method="post">
                    <label for="user">Usuario</label>
                    <input type="text" name="usuario" id="user" class="form-control" placeholder="Ingrese su usuario">
                    <br>
                    <label for="pass">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña">
                    <br>
                    <input type="submit" class="btn btn-success btn-block" name="btningresar" value="ENTRAR">
                </form>
            </div>
        </div>
    </div>
    <!-- Fin del container -->

    <br><br>

    <!-- Incluimos el footer -->
    <?php
    include 'templates/foot.php';
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>