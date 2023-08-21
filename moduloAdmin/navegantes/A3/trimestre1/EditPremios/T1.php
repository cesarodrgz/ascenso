<?php
//Incluimos la clase conexión para realizar la siguiente busqueda y llenar la tabal
include '../../../../../templates/conexion.php';
//Realizamos una búsqueda SQL en la tabla usuarios donde mostramos a todos los usuarios del departamento de navegantes
$consulta = mysqli_query($enlace, "SELECT * from navoro");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Actualizar premios T1|A3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos footer-->
    <link rel="stylesheet" href="../../../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- DataTable CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>

<?php include 'navbar1.php' ?>

<body>
    <br>
        <!-- Logo de navegantes-->
        <img src="../../../../../img/navegantes.png" alt="LOGO-NAVEGANTES" class="rounded mx-auto d-block" style="width: 100px;">
    <div class="container">
        <div class="col-xs-12 col-md-12 col-xl-12">
            <!-- Título-->
            <h2 class="text-center text-primary">
                Actualizar premios
            </h2>
        </div>
        <div class="col-xs-12 col-md-12 col-xl-12">
            <div class="alert alert-warning text-center" role="alert">
                <h4>Año 3 | Trimestre 1</h4>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-xl-12">
            <br>
            <!--Tabla para presentar los usuarios -->
            <table class="table table-striped table-bordered table-responsive" id="table">
                <!--Encabezado de la tabla-->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Premio 1</th>
                        <th>Premio 2</th>
                        <th>Premio 3</th>
                        <th>Premio 4</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <!--Cuerpo de la tabla-->
                <tbody>
                    <?php
                    //Mostramos los datos que coincidan con la consulta SQL realizada
                    while ($datos = mysqli_fetch_array($consulta)) { ?>
                        <tr>
                            <!--Mostramos el id -->
                            <td><?php echo $datos["id"]; ?></td>
                            <!--Mostramos el nombre -->
                            <td><?php echo $datos["nombre"]; ?></td>
                            <!--Mostramos la premio 1 -->
                            <td><?php echo $datos["p1"]; ?></td>
                            <!--Mostramos el premio 2 -->
                            <td><?php echo $datos["p2"]; ?></td>
                            <!--Mostramos el premio 3 -->
                            <td><?php echo $datos["p3"]; ?></td>
                            <!--Mostramos el premio 4 -->
                            <td><?php echo $datos["p4"]; ?></td>
                            <!--Botón para ir a editar-->
                            <td>
                                <form action="modPremios.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $datos["id"]; ?>">
                                    <input type="hidden" name="nombre" value="<?php echo $datos["nombre"]; ?>">
                                    <input type="hidden" name="p1" value="<?php echo $datos["p1"]; ?>">
                                    <input type="hidden" name="p2" value="<?php echo $datos["p2"]; ?>">
                                    <input type="hidden" name="p3" value="<?php echo $datos["p3"]; ?>">
                                    <input type="hidden" name="p4" value="<?php echo $datos["p4"]; ?>">
                                    <input type="submit" value="Editar" class="btn btn-primary">
                                </form>
                                <br>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div><br><br>

    

    <?php include '../../../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- DataTable -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <!-- DataTable Script para español-->
    <script src="../../../../../js/dataTable.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
</body>

</html>