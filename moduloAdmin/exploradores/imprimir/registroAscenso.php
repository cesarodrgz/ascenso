<?php
//Incluimos la clase conexión para realizar la siguiente busqueda y llenar la tabal
include '../../../templates/conexion.php';
//Realizamos una búsqueda SQL para los premios del año 1
$consulta = mysqli_query($enlace, "SELECT * from explobronce");
//Realizamos una búsqueda SQL para los premios del año 2
$consulta2 = mysqli_query($enlace, "SELECT * from exploplata");
//Realizamos una búsqueda SQL para los premios del año 3
$consulta3 = mysqli_query($enlace, "SELECT * from explooro");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Registro de Ascenso Exploradores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <img src="../../../img/exploradores.png" alt="LOGO" style="width: 100px;">
    </div>

    <div class="container">
        <div class="col-xs-12 col-md-12 col-xl-12">
            <!-- Título-->
            <h2 class="text-center">
                Guardar Ascenso
            </h2>

            <div class="col-xs-12 col-md-12 col-xl-12">
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
                            <th>Premio 6</th>
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
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p5"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p6"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p7"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <!--Año 2-->
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
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p4"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p5"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p6"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        <!--Año 3-->
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
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p4"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["p5"]; ?></td>
                                <td></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <br><br>

    <!--Footer-->
    <?php include '../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- DataTable -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <!-- DataTable Script para español-->
    <script src="../../../js/dataTableImprimirH.js"></script>

</body>

</html>