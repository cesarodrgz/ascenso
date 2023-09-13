<?php
//Incluimos la clase conexión para realizar busquedas SQL
include "../../templates/conexion.php";
//Iniciamos la variable de sesión
session_start();
//Obtenemos de Inciar sesion el user que esta entrando
$user = $_SESSION['user'];
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../login.php");
}
//Realizamos una búsqueda SQL en la tabla de los premios del año 1
$consulta = mysqli_query($enlace, "SELECT * from pibronce WHERE user = '$user'");
//Realizamos una búsqueda SQL en la tabla de los premios del año 2
$consulta2 = mysqli_query($enlace, "SELECT * from piplata WHERE user = '$user'");
//Realizamos una búsqueda SQL en la tabla de los premios del año 3
$consulta3 = mysqli_query($enlace, "SELECT * from pioro WHERE user = '$user'");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Mis premios - pioneros</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Estilos tabla-->
    <style>
        th {
            background-color: #E7B513;
            width: 100px;
            word-wrap: break-word;
        }

        td {
            width: 100px;
            word-wrap: break-word;
        }

        table {
            table-layout: fixed;
            width: 250px;
        }

        h3 {
            color: #E7B513;
        }
    </style>
</head>

<!--Navbar-->
<?php include '../../templates/pioneros/nav8.php' ?>

<body> <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h3 class="text-center">Premios obtenidos</h3>
                <div class="table-responsive-md">
                    <table class="table">
                        <tr>
                            <thead>
                                <th>Premio 1</th>
                                <th>Premio 2</th>
                                <th>Premio 3</th>
                                <th>Premio 4</th>
                                <th>Premio 5</th>
                                <th>Premio 6</th>
                                <th>Premio 7</th>
                                <th>Premio 8</th>
                                <th>Premio 9</th>
                                <th>Premio 10</th>
                                <th>Premio 11</th>
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
                                    <td><?php echo $datos["p9"]; ?></td>
                                    <td><?php echo $datos["p10"]; ?></td>
                                    <td>N/A</td>
                                </tr>
                            <?php
                            }
                            ?>
                            <?php
                            //Mostramos los datos que coincidan con la consulta SQL realizada
                            while ($datos = mysqli_fetch_array($consulta2)) { ?>
                                <tr>
                                    <td><?php echo $datos["p1"]; ?></td>
                                    <td><?php echo $datos["p2"]; ?></td>
                                    <td><?php echo $datos["p3"]; ?></td>
                                    <td><?php echo $datos["p4"]; ?></td>
                                    <td><?php echo $datos["p5"]; ?></td>
                                    <td><?php echo $datos["p6"]; ?></td>
                                    <td><?php echo $datos["p7"]; ?></td>
                                    <td><?php echo $datos["p8"]; ?></td>
                                    <td><?php echo $datos["p9"]; ?></td>
                                    <td><?php echo $datos["p10"]; ?></td>
                                    <td>N/A</td>
                                </tr>
                            <?php
                            }
                            ?>
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
                                    <td><?php echo $datos["p9"]; ?></td>
                                    <td><?php echo $datos["p10"]; ?></td>
                                    <td><?php echo $datos["p11"]; ?></td>
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