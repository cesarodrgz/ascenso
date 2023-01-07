<!doctype html>
<html lang="en">

<head>
    <title>Opciones Exploradores - Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include 'navBarNav.php' ?>

<body>
    <br>
    <div class="container">
        <div class="col">
            <div class="col-xs-12 col-md-6 col-xl-12 text-center">
                <h1 class="text-center">Opciones</h1>
                <br>
                    <img src="../../img/jefe.png" alt="IMG-ADMIN" style="width: 150px;">
                <a href="administrarusuario.php" class="btn btn-primary btn-block">Administrar Usuario</a>
            </div>

            <div class="col-xs-12 col-md-6 col-xl-12 text-center">
                <br>
                    <img src="../../img/agregar.png" alt="IMG-AGREGAR-PREMIOS" style="width: 125px;">
                <br>
                <a href="agregarPremios.php" class="btn btn-primary btn-block">Agregar Premios</a>
            </div>

            <div class="col-xs-12 col-md-6 col-xl-12 text-center">
                <br>
                    <img src="../../img/verificar.png" alt="IMG-VERIFICAR" style="width: 125px;">
                <br>
                <a href="A1/seleccionarA.php" class="btn btn-primary btn-block">Actualizar Premios</a>
            </div>

            <div class="col-xs-12 col-md-6 col-xl-12 text-center">
                <br>
                    <img src="../../img/imprimir.png" alt="IMG-VERIFICAR" style="width: 125px;">
                <br>
                <br>
                <a href="imprimir/seleccionar.php" class="btn btn-primary btn-block">Imprimir</a>
            </div>
        </div>
    </div> <br>

    <?php
        include '../../templates/foot2.php';
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>