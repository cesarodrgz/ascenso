<?php
//Incluimos la clase conexión para realizar la siguiente busqueda y llenar la tabal
include '../../../templates/conexion.php';
//Realizamos una búsqueda SQL en la tabla usuarios donde mostramos a todos los usuarios del departamento de navegantes
$consulta = mysqli_query($enlace, "SELECT * from navbronce");
$consulta2 = mysqli_query($enlace, "SELECT * from navplata");
$consulta3 = mysqli_query($enlace, "SELECT * from navoro");
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
    <title>Registro de Ascenso Navegantes</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- DataTable CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../css/foot.css">

    <style>
        table th {
            background-color: #22a593;
            color: white;
        }
    </style>
</head>

<?php include 'navbar.php' ?>

<body>
    <br>
    <div class="text-center">
        <!-- Logo de navegantes-->
        <img src="../../../img/navegantes.png" alt="LOGO-NAVEGANTES" style="width: 150px;">
    </div>

    <div class="container">
        <div class="col-xs-12 col-md-12 col-xl-12">
            <!-- Título-->
            <h2 class="text-center">
                Guardar Ascenso
            </h2>

            <div class="">
                <!--Tabla para presentar los usuarios -->
                <table class="table table-striped table-bordered table-responsive" id="tableH">
                    <!--Encabezado de la tabla-->
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Premio 1</th>
                            <th>Premio 2</th>
                            <th>Premio 3</th>
                            <th>Premio 4</th>
                            <th>Premio 5</th>
                            <th>Premio 5</th>
                            <th>Premio 7</th>
                            <th>Premio 8</th>
                            <th>Premio 9</th>
                            <th>Premio 10</th>
                            <th>Premio 11</th>
                            <th>Premio 12</th>
                            <th>Premio 13</th>
                            <th>Premio 14</th>
                            <th>Premio 15</th>
                            <th>Premio 16</th>
                        </tr>
                    </thead>
                    <!--Cuerpo de la tabla-->
                    <tbody>
                        <?php
                        //Mostramos los datos que coincidan con la consulta SQL realizada
                        while ($datos = mysqli_fetch_array($consulta)) { ?>
                            <tr>
                                <!--Mostramos el nombre -->
                                <td><?php echo $datos["nombre"]; ?></td>
                                <!--Mostramos la direccion -->
                                <td><?php echo $datos["p1"]; ?></td>
                                <!--Mostramos el telefono -->
                                <td><?php echo $datos["p2"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p3"]; ?></td>
                                <!--Mostramos el id -->
                                <td><?php echo $datos["p4"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p5"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p6"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p7"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p8"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p9"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p10"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p11"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p12"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p13"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p14"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p15"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p16"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <?php
                        //Mostramos los datos que coincidan con la consulta SQL realizada
                        while ($datos = mysqli_fetch_array($consulta2)) { ?>
                            <tr>
                                <!--Mostramos el nombre -->
                                <td><?php echo $datos["nombre"]; ?></td>
                                <!--Mostramos la direccion -->
                                <td><?php echo $datos["p1"]; ?></td>
                                <!--Mostramos el telefono -->
                                <td><?php echo $datos["p2"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p3"]; ?></td>
                                <!--Mostramos el id -->
                                <td><?php echo $datos["p4"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p5"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p6"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p7"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p8"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p9"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p10"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p11"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p12"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p13"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p14"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p15"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p16"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <?php
                        //Mostramos los datos que coincidan con la consulta SQL realizada
                        while ($datos = mysqli_fetch_array($consulta3)) { ?>
                            <tr>
                                <!--Mostramos el nombre -->
                                <td><?php echo $datos["nombre"]; ?></td>
                                <!--Mostramos la direccion -->
                                <td><?php echo $datos["p1"]; ?></td>
                                <!--Mostramos el telefono -->
                                <td><?php echo $datos["p2"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p3"]; ?></td>
                                <!--Mostramos el id -->
                                <td><?php echo $datos["p4"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p5"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p6"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p7"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p8"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p9"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p10"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p11"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p12"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p13"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p14"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p15"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p16"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <br><br>

    <?php include '../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- DataTable -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

    <!-- DataTable Script para español-->
    <script src="../../../js/dataTableImprimirH.js"></script>

</body>

</html>