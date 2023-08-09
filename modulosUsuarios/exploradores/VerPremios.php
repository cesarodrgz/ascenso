<?php
include "../../templates/conexion.php"; //Incluimos la clase conexión para realizar busquedas SQL
session_start(); //Iniciamos la variable de sesión
$user = $_SESSION['user']; //Obtenemos de Inciar sesion el user que esta entrando

$consulta = mysqli_query($enlace, "SELECT * from explobronce WHERE user = '$user'"); //Realizamos una búsqueda SQL en la tabla de los premios del año 1
$consulta2 = mysqli_query($enlace, "SELECT * from exploplata WHERE user = '$user'"); //Realizamos una búsqueda SQL en la tabla de los premios del año 2
$consulta3 = mysqli_query($enlace, "SELECT * from explooro WHERE user = '$user'"); //Realizamos una búsqueda SQL en la tabla de los premios del año 3
?>
<!doctype html>
<html lang="en">

<head>
    <title>Mis premios - Exploradores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include 'navbarNU.php' ?>

<body> <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h3 class="text-center text-success">Premios obtenidos en el Año 1</h3>
                <div class="table-responsive-md">
                    <table class="table">
                        <tr>
                            <thead>
                                <td><b>Premio 1</b></td>
                                <td><b>Premio 2</b></td>
                                <td><b>Premio 3</b></td>
                                <td><b>Premio 4</b></td>
                                <td><b>Premio 5</b></td>
                                <td><b>Premio 6</b></td>
                            </thead>
                        </tr>
                        <tbody>
                            <?php
                            //Mostramos los datos que coincidan con la consulta SQL realizada
                            while ($datos = mysqli_fetch_array($consulta)) { ?>
                                <tr>
                                    <td><?php echo $datos["p1"]; ?></td>
                                    <td><?php echo $datos["p2"]; ?></td>
                                    <td><?php echo $datos["p3"]; ?></td>
                                    <td><?php echo $datos["p5"]; ?></td>
                                    <td><?php echo $datos["p6"]; ?></td>
                                    <td><?php echo $datos["p7"]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h3 class="text-center text-success">Premios obtenidos en el Año 2</h3>
                <div class="table-responsive-md">
                    <table class="table">
                        <tr>
                            <thead>
                                <td><b>Premio 1</b></td>
                                <td><b>Premio 2</b></td>
                                <td><b>Premio 3</b></td>
                                <td><b>Premio 4</b></td>
                                <td><b>Premio 5</b></td>
                                <td><b>Premio 6</b></td>
                            </thead>
                        </tr>
                        <tbody>
                            <?php
                            //Mostramos los datos que coincidan con la consulta SQL realizada
                            while ($datos2 = mysqli_fetch_array($consulta2)) { ?>
                                <tr>
                                    <td><?php echo $datos2["p1"]; ?></td>
                                    <td><?php echo $datos2["p2"]; ?></td>
                                    <td><?php echo $datos2["p3"]; ?></td>
                                    <td><?php echo $datos2["p4"]; ?></td>
                                    <td><?php echo $datos2["p5"]; ?></td>
                                    <td><?php echo $datos2["p6"]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h3 class="text-center text-success">Premios obtenidos en el Año 3</h3>
                <div class="table-responsive-md">
                    <table class="table">
                        <tr>
                            <thead>
                                <td><b>Premio 1</b></td>
                                <td><b>Premio 2</b></td>
                                <td><b>Premio 3</b></td>
                                <td><b>Premio 4</b></td>
                                <td><b>Premio 5</b></td>
                            </thead>
                        </tr>
                        <tbody>
                            <?php
                            //Mostramos los datos que coincidan con la consulta SQL realizada
                            while ($datos2 = mysqli_fetch_array($consulta3)) { ?>
                                <tr>
                                    <td><?php echo $datos2["p1"]; ?></td>
                                    <td><?php echo $datos2["p2"]; ?></td>
                                    <td><?php echo $datos2["p3"]; ?></td>
                                    <td><?php echo $datos2["p4"]; ?></td>
                                    <td><?php echo $datos2["p5"]; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <div class="espacio"></div><br><br><br>
    <?php
    include '../../templates/foot2.php'
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>