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
    <title>Actualizar premios - seleccionar año</title>
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

<body> <br>
    <div class="container">
        <!--Título-->
        <h2 class="text-primary text-center">Actualizar Premios</h2>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="alert alert-secondary text-center" role="alert">
                    Seleccione el año al que desea actualizar
                </div>
            </div>
        </div>


        <!--Año 1-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <center>
                    <img src="../../../img/bronce.png" alt="A1-BRONCE" style="width: 125px;">
                </center>
                <br>
                <a href="EditarPremiosSelectT.php" class="btn btn-info btn-block">Año 1 - Bronce</a>
            </div>
        </div><br>

        <!--Año 2-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <center>
                    <img src="../../../img/plata.png" alt="A1-BRONCE" style="width: 125px;">
                </center>
                <br>
                <a href="EditarPremiosSelectT.php" class="btn btn-info btn-block">Año 2 - Plata</a>
            </div>
        </div> <br>

        <!--Año 3-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <center>
                    <img src="../../../img/oro.png" alt="A1-BRONCE" style="width: 125px;">
                </center>
                <br>
                <a href="EditarPremiosSelectT.php" class="btn btn-info btn-block">Año 3 - Oro</a>
            </div>
        </div>
    </div> <br>

    <!--Inlcuimos el footer-->
    <?php include '../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>