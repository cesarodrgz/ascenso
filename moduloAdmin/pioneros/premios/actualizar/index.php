<?php
//Iniamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../../../index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Seleccionar año</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<!--NavBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="../../index.php">
        <img src="../../../../img/pioneros.png" alt="LOGO-pioneros" style="width: 30px;">
    </a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="A1/index.php">Año 1</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="A2/index.php">Año 2</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="A3/index.php">Año 3</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../../../../templates/cerrarS.php">Cerrar sesión</a>
            </li>
        </ul>
    </div>
</nav>

<body> <br>
    <div class="container">
        <!--Título-->
        <h1 class="text-primary text-center">Actualizar Premios</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="alert alert-secondary text-center" role="alert">
                    Seleccione el año al que desea agregar premios al Pionero
                </div>
            </div>
        </div>

        <!--Año 1-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <img src="../../../../img/bronce.png" class="rounded mx-auto d-block" alt="A1-BRONCE" style="width: 125px;">
                <br>
                <a href="A1/index.php" class="btn btn-info btn-block">Año 1 - Bronce</a>
            </div>
        </div><br>

        <!--Año 2-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <img src="../../../../img/plata.png" class="rounded mx-auto d-block" alt="A2-PLATA" style="width: 125px;">
                <br>
                <a href="A2/index.php" class="btn btn-info btn-block">Año 2 - Plata</a>
            </div>
        </div> <br>

        <!--Año 3-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <img src="../../../../img/oro.png" class="rounded mx-auto d-block" alt="A3-ORO" style="width: 125px;">
                <br>
                <a href="A3/index.php" class="btn btn-info btn-block">Año 3 - Oro</a>
            </div>
        </div>
    </div> <br>

    <!--Inlcuimos el footer-->
    <?php include '../../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>