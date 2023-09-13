<?php
//Iniamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Opciones Seguidores Administrador</title>
    <!-- Icono -->
    <link rel="shortcut icon" href="../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<!--NavBar-->
<?php include '../../templates/seguidores/nav1.php' ?>

<body>
    <div class="container">
        <div class="col">
            <div class="col-xs-12 col-md-6 col-xl-12">
                <h1 class="text-center">Opciones</h1>
                <br>
                <img src="../../img/jefe.png" class="rounded mx-auto d-block" alt="IMG-ADMIN" style="width: 150px;">
                <a href="administrarseg.php" class="btn btn-primary btn-block">Administrar Usuario</a>
            </div>

            <div class="col-xs-12 col-md-6 col-xl-12">
                <br>
                <img src="../../img/agregar.png" class="rounded mx-auto d-block" alt="IMG-AGREGAR-PREMIOS" style="width: 125px;">
                <a href="premios/index.php" class="btn btn-primary btn-block">Agregar Premios</a>
            </div>

            <div class="col-xs-12 col-md-6 col-xl-12">
                <br>
                <img src="../../img/verificar.png" class="rounded mx-auto d-block" alt="IMG-VERIFICAR" style="width: 125px;">
                <a href="premios/actualizar/index.php" class="btn btn-primary btn-block">Actualizar Premios</a>
            </div>

            <div class="col-xs-12 col-md-6 col-xl-12 text-center">
                <br>
                <img src="../../img/imprimir.png" class="rounded mx-auto d-block" alt="IMG-VERIFICAR" style="width: 125px;">
                <a href="imprimir/index.php" class="btn btn-primary btn-block">Imprimir</a>
            </div>
        </div>
    </div> <br>

    <?php
    include '../../templates/foot2.php';
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>