<?php
include '../../../../templates/conexion.php';
//Iniciamos la sesión
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
    <title>Trimestre 2 - Exploradores</title>
    <!-- Icono -->
    <link rel="shortcut icon" href="../../../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<!-- Navbar -->
<?php include 'navbar3.php' ?>

<body>
    <br>
    <div class="container">
        <h2 class="text-primary text-center">Año 1 | Trimestre 2</h2>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="alert alert-success text-center" role="alert">
                    Seleccione el Explorador y presione continuar.
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <form action="agregarT2.php" method="post">
                    <select name="nombre" class="form-control">
                        <option value="Seleccionar">Seleccionar</option>
                        <?php
                        //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
                        $consulta = mysqli_query($enlace, "SELECT nombre from usuarios WHERE departamento = 'Exploradores'");
                        ?>

                        <?php foreach ($consulta as $info) : ?>
                            <option value="<?php echo $info['nombre'] ?>"> <?php echo  $info['nombre'] ?> </option>
                        <?php endforeach ?>
                    </select>
                    <br>

                    <input type="submit" class="btn btn-primary" value="Continuar">
                </form>
            </div>
        </div>
    </div>

    <!-- espacio -->
    <div class="espacio"></div>
    <!-- Footer -->
    <?php include '../../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>