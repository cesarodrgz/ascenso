<?php
include "../../templates/conexion.php"; //Incluimos la clase conexión para realizar busquedas SQL
//Consulta para mostrar los premios
$consulta = mysqli_query($enlace, "SELECT * from navbronce");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--  Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <title>Premios Navegantes</title>

    <style>
        table thead {
            background-color: #38ef7d;
        }
    </style>
</head>

<body> <br>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>



    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>


</body>

</html>