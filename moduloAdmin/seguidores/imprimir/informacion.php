<?php
//Incluimos la clase conexión para realizar la siguiente busqueda y llenar la tabal
include '../../../templates/conexion.php';
//Realizamos una búsqueda SQL en la tabla usuarios donde mostramos a todos los usuarios del departamento de seguidores
$consulta = mysqli_query($enlace, "SELECT * from usuarios WHERE departamento = 'Seguidores'");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Informacion personal Seguidores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- DataTable CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../css/foot.css">
    <!--Estilos tabla-->
    <style>
        th {
            background-color: #9370DB;
        }
    </style>
</head>

<!--Navbar-->
<?php include '../../../templates/seguidores/nav7.php' ?>

<body>
    <div class="text-center">
        <!-- Logo de navegantes-->
        <img src="../../../img/seguidores.png" alt="logo-seguidores" class="rounded" style="width: 100px;">
    </div>

    <div class="container">
        <div class="col-xs-12 col-md-12 col-xl-12">
            <!-- Título-->
            <h1 class="text-center">
                Imprimir información
            </h1>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <br>
                <!--Tabla para presentar los usuarios -->
                <table class="table table-striped table-bordered table-responsive" id="table">
                    <!--Encabezado de la tabla-->
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Fecha de Nac.</th>
                            <th>Padre</th>
                            <th>Madre</th>
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
                                <td><?php echo $datos["direccion"]; ?></td>
                                <!--Mostramos el telefono -->
                                <td><?php echo $datos["telefono"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["fechaNac"]; ?></td>
                                <!--Mostramos el id -->
                                <td><?php echo $datos["padre"]; ?></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["madre"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><br><br>

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
    <script src="../../../js/dataTableImprimir.js"></script>

</body>

</html>