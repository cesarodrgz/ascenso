<?php
//Iniamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../../index.php");
} ?>
<!doctype html>
<html lang="en">

<head>
    <title>Seleccionar impresión - Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../css/foot.css">
</head>

<!--NavBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="index.php">
        <img src="../../../img/seguidores.png" alt="logo-seguidores" class="rounded" style="width: 30px;">
    </a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Opciones <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../administrarseg.php" aria-disabled="true">Administrar Usuarios</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../premios/index.php" aria-disabled="true">Agregar premios</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../premios/actualizar/index.php" aria-disabled="true">Actualizar premios</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../imprimir/index.php" aria-disabled="true">Imprimir</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../../../templates/cerrarS.php" aria-disabled="true">Cerrar sesión</a>
            </li>
        </ul>
    </div>
</nav>

<body>
    <br>
    <div class="container">
        <h1 class="text-primary text-center">Seleccione que desea imprimir</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12 text-center">
                <img src="../../../img/informacion-personal.png" alt="INFORMACION-PERSONAL" style="width: 125px;">
                <br><br>
                <a href="informacion.php" class="btn btn-info btn-block">Información personal</a>
            </div>
        </div><br>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12 text-center">
                <img src="../../../img/premio2.png" alt="PREMIOS" style="width: 125px;">
                <br><br>
                <a href="ascenso.php" class="btn btn-info btn-block">Registro de premios</a>
            </div>
        </div><br>
    </div> <br><br>

    <?php include '../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>