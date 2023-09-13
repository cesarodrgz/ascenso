<?php
//Incluimos la clase conexión para realizar busquedas SQL
include "../../templates/conexion.php";
//Consulta para mostrar los premios
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
    header("Location: ../../login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- icono -->
    <link rel="shortcut icon" href="../../img/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS FOOTER-->
    <link rel="stylesheet" href="../../css/foot.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <title>Premios Navegantes</title>
    <!--Diseño de tabla-->
    <style>
        th {
            background-color: #FFC300;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="../index.php">Opciones</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../usuarios/index.php">Gestionar usuarios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../departamentos/index.php" tabindex="-1" aria-disabled="true">Ver premios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disable" href="../../templates/cerrarS.php" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav> <br><br><br>

    <img src="../../img/navegantes.png" class="mx-auto d-block" style="width: 100px;">
    <h1 class="text-center">Premios de navegantes</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
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
                            <th>Premio 12</th>
                            <th>Premio 13</th>
                            <th>Premio 14</th>
                            <th>Premio 15</th>
                            <th>Premio 16</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($datos = mysqli_fetch_array($consulta)) { ?>
                            <tr>
                                <td><?php echo $datos["nombre"]; ?></td>
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
                                <td><?php echo $datos["p12"]; ?></td>
                                <td><?php echo $datos["p13"]; ?></td>
                                <td><?php echo $datos["p14"]; ?></td>
                                <td><?php echo $datos["p15"]; ?></td>
                                <td><?php echo $datos["p16"]; ?></td>
                            </tr>
                        <?php
                        }

                        ?>
                        <!--AÑO 2-->
                        <?php
                        while ($datos = mysqli_fetch_array($consulta2)) { ?>
                            <tr>
                                <td><?php echo $datos["nombre"]; ?></td>
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
                                <td><?php echo $datos["p12"]; ?></td>
                                <td><?php echo $datos["p13"]; ?></td>
                                <td><?php echo $datos["p14"]; ?></td>
                                <td><?php echo $datos["p15"]; ?></td>
                                <td><?php echo $datos["p16"]; ?></td>
                            </tr>
                        <?php
                        }

                        ?>
                        <!--AÑO 3-->
                        <?php
                        while ($datos = mysqli_fetch_array($consulta3)) { ?>
                            <tr>
                                <td><?php echo $datos["nombre"]; ?></td>
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
    </div> <br>

    <?php include '../../templates/foot2.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <!-- Buttons y traducción DataTables -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                language: {
                    search: "Buscar:",
                    zeroRecords: "Sin resultados encontrados",
                    info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    infoFiltered: "(Filtrado de _MAX_ total entradas)",
                    lengthMenu: "Mostrar _MENU_ Entradas",
                    paginate: {
                        first: "Primero",
                        last: "Ultimo",
                        next: "Siguiente",
                        previous: "Anterior",
                    },
                },
                dom: "Bfrtilp",
                buttons: [{
                    extend: "pdfHtml5",
                    titleAttr: "PDF",
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    footer: true,
                    className: 'btn btn-danger'
                }]
            });
        });
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>


</body>

</html>