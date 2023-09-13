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
    <title>Seleccionar impresión - Admin</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../css/foot.css">
</head>

<?php include 'navbar.php' ?>

<body>
    <br>
    <div class="container">
        <h1 class="text-primary text-center">Seleccione que desea imprimir</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12 text-center">
                <img src="../../../img/informacion-personal.png" alt="INFORMACION-PERSONAL" style="width: 125px;">
                <br><br>
                <a href="informacionPersonal.php" class="btn btn-info btn-block">Información personal</a>
            </div>
        </div><br>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12 text-center">
                <img src="../../../img/premio2.png" alt="PREMIOS" style="width: 125px;">
                <br><br>
                <a href="registroAscenso.php" class="btn btn-info btn-block">Registro de premios</a>
            </div>
        </div><br>
    </div> <br><br>

    <?php include '../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>