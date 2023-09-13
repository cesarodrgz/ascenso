<?php
//Iniciamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../../index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Seleccionar trimeste</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<?php include 'navBarNav2.php' ?>

<body>
    <br>
    <div class="container">
        <h1 class="text-primary text-center">Seleccione el Trimestre</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <img src="../../../img/1.png" class="rounded mx-auto d-block" alt="T1/Q1" style="width: 125px;">
                <br>
                <a href="trimestre1/seleccionarNav.php" class="btn btn-info btn-block">Trimestre 1</a>
            </div>
        </div><br>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <img src="../../../img/2.png" class="rounded mx-auto d-block" alt="T2/Q2" style="width: 125px;">
                <br>
                <a href="trimestre2/seleccionarNav.php" class="btn btn-info btn-block">Trimestre 2</a>
            </div>
        </div><br>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <img src="../../../img/3.png" class="rounded mx-auto d-block" alt="T3/Q3" style="width: 125px;">
                <br>
                <a href="trimestre3/seleccionarNav.php" class="btn btn-info btn-block">Trimestre 3</a>
            </div>
        </div><br>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <img src="../../../img/4.png" class="rounded mx-auto d-block" alt="T4/Q4" style="width: 125px;">
                <br>
                <a href="trimestre4/seleccionarNav.php" class="btn btn-info btn-block">Trimestre 4</a>
            </div>
        </div>
    </div><br>

    <?php include '../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>