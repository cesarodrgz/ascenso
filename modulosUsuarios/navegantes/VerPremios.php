<?php
include "../../templates/conexion.php"; //Incluimos la clase conexión para realizar busquedas SQL
session_start(); //Iniciamos la variable de sesión
$user = $_SESSION['user']; //Obtenemos de Inciar sesion el user que esta entrando
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../login.php");
}
$consulta = mysqli_query($enlace, "SELECT p1, p2, p3, p4, p5, p6, p7, p8 from navbronce WHERE user = '$user'"); //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
$consulta2 = mysqli_query($enlace, "SELECT p9, p10, p11, p12, p13, p14, p15, p16 from navbronce WHERE user = '$user'"); //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
$consulta3 = mysqli_query($enlace, "SELECT p1, p2, p3, p4, p5, p6, p7, p8 from navplata WHERE user = '$user'"); //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
$consulta4 = mysqli_query($enlace, "SELECT p9, p10, p11, p12, p13, p14, p15, p16 from navplata WHERE user = '$user'"); //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión

?>
<!doctype html>
<html lang="en">

<head>
    <title>Mis premios - Navegantes</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        table thead {
            background-color: #22a593;
            color: white;
        }
    </style>
</head>

<?php include 'navbarNU.php' ?>

<body> <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h3 class="text-center text-success">Premios obtenidos en el año 1</h3>
            </div>
            <div class="table-responsive-md">
                <table class="table">
                    <tr>
                        <thead>
                            <td>Premio 1</td>
                            <td>Premio 2</td>
                            <td>Premio 3</td>
                            <td>Premio 4</td>
                            <td>Premio 5</td>
                            <td>Premio 6</td>
                            <td>Premio 7</td>
                            <td>Premio 8</td>
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
                                <td><?php echo $datos["p4"]; ?></td>
                                <td><?php echo $datos["p5"]; ?></td>
                                <td><?php echo $datos["p6"]; ?></td>
                                <td><?php echo $datos["p7"]; ?></td>
                                <td><?php echo $datos["p8"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="table-responsive-md">
                <table class="table">
                    <tr>
                        <thead>
                            <td>Premio 9</td>
                            <td>Premio 10</td>
                            <td>Premio 11</td>
                            <td>Premio 12</td>
                            <td>Premio 13</td>
                            <td>Premio 14</td>
                            <td>Premio 15</td>
                            <td>Premio 16</td>
                        </thead>
                    </tr>
                    <tbody>
                        <?php
                        //Mostramos los datos que coincidan con la consulta SQL realizada
                        while ($datos = mysqli_fetch_array($consulta2)) { ?>
                            <tr>
                                <td><?php echo $datos["p9"]; ?></td>
                                <td><?php echo $datos["p10"]; ?></td>
                                <td><?php echo $datos["p11"]; ?></td>
                                <td><?php echo $datos["p12"]; ?></td>
                                <td><?php echo $datos["p13"]; ?></td>
                                <td><?php echo $datos["p14"]; ?></td>
                                <td><?php echo $datos["p15"]; ?></td>
                                <td><?php echo $datos["p16"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h3 class="text-center text-success">Premios obtenidos en el año 2</h3>
            </div>
            <div class="table-responsive-md">
                <table class="table">
                    <tr>
                        <thead>
                            <td>Premio 1</td>
                            <td>Premio 2</td>
                            <td>Premio 3</td>
                            <td>Premio 4</td>
                            <td>Premio 5</td>
                            <td>Premio 6</td>
                            <td>Premio 7</td>
                            <td>Premio 8</td>
                        </thead>
                    </tr>
                    <tbody>
                        <?php
                        //Mostramos los datos que coincidan con la consulta SQL realizada
                        while ($datos = mysqli_fetch_array($consulta3)) { ?>
                            <tr>
                                <td><?php echo $datos["p1"]; ?></td>
                                <td><?php echo $datos["p2"]; ?></td>
                                <td><?php echo $datos["p3"]; ?></td>
                                <td><?php echo $datos["p4"]; ?></td>
                                <td><?php echo $datos["p5"]; ?></td>
                                <td><?php echo $datos["p6"]; ?></td>
                                <td><?php echo $datos["p7"]; ?></td>
                                <td><?php echo $datos["p8"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="table-responsive-md">
                <table class="table">
                    <tr>
                        <thead>
                            <td>Premio 9</td>
                            <td>Premio 10</td>
                            <td>Premio 11</td>
                            <td>Premio 12</td>
                            <td>Premio 13</td>
                            <td>Premio 14</td>
                            <td>Premio 15</td>
                            <td>Premio 16</td>
                        </thead>
                    </tr>
                    <tbody>
                        <?php
                        //Mostramos los datos que coincidan con la consulta SQL realizada
                        while ($datos = mysqli_fetch_array($consulta4)) { ?>
                            <tr>
                                <td><?php echo $datos["p9"]; ?></td>
                                <td><?php echo $datos["p10"]; ?></td>
                                <td><?php echo $datos["p11"]; ?></td>
                                <td><?php echo $datos["p12"]; ?></td>
                                <td><?php echo $datos["p13"]; ?></td>
                                <td><?php echo $datos["p14"]; ?></td>
                                <td><?php echo $datos["p15"]; ?></td>
                                <td><?php echo $datos["p16"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    include '../../templates/foot2.php'
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>