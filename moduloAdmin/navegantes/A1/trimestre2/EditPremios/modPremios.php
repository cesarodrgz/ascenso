<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$premio5 = $_POST["p5"];
$premio6 = $_POST["p6"];
$premio7 = $_POST["p7"];
$premio8 = $_POST["p8"];

include '../../../../../templates/conexion.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Editar Premios - Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include 'navbarT2.php' ?>


<body>
    <br>
    <div class="container">
        <h1 class="text-primary text-center">Seleccione los premios que desea actualizar</h1>
        <div class="col-xs-12 col-md-12 col-xl-12">
            <div class="alert alert-info text-center" role="alert">
                Trimestre 2 - <?php echo $nombre ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="nombre" value="<?php echo $nombre ?>">

                    <p>Premio 1 - Trimestre 1</p>
                    <select name="p5" id="" class="form-control">
                        <option value="<?php echo $premio5 ?>"> Premio actual asignado: <?php echo  $premio5 ?> </option>
                        <option value="Defensor del mundo">Defensor del mundo</option>
                        <option value="Hacedor del mundo">Hacedor del mundo</option>
                        <option value="Bandera">Bandera</option>
                        <option value="Evento deportivo">Evento deportivo</option>
                    </select> <br>

                    <p>Premio 2 - Trimestre 1</p>
                    <select name="p6" id="" class="form-control">
                        <option value="<?php echo $premio6 ?>"> Premio actual asignado: <?php echo  $premio6 ?> </option>
                        <option value="Defensor del mundo">Defensor del mundo</option>
                        <option value="Hacedor del mundo">Hacedor del mundo</option>
                        <option value="Bandera">Bandera</option>
                        <option value="Evento deportivo">Evento deportivo</option>
                    </select> <br>

                    <p>Premio 3 - Trimestre 1</p>
                    <select name="p7" id="" class="form-control">
                        <option value="<?php echo $premio7 ?>"> Premio actual asignado: <?php echo  $premio7 ?> </option>
                        <option value="Defensor del mundo">Defensor del mundo</option>
                        <option value="Hacedor del mundo">Hacedor del mundo</option>
                        <option value="Bandera">Bandera</option>
                        <option value="Evento deportivo">Evento deportivo</option>
                    </select> <br>

                    <p>Premio 4 - Trimestre 1</p>
                    <select name="p8" id="" class="form-control">
                        <option value="<?php echo $premio8 ?>"> Premio actual asignado: <?php echo  $premio8 ?> </option>
                        <option value="Defensor del mundo">Defensor del mundo</option>
                        <option value="Hacedor del mundo">Hacedor del mundo</option>
                        <option value="Bandera">Bandera</option>
                        <option value="Evento deportivo">Evento deportivo</option>
                    </select> <br>

                    <input type="submit" class="btn btn-success btn-block" value="Actualizar premios" name="send">
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $p5 = $_POST["p5"];
        $p6 = $_POST["p6"];
        $p7 = $_POST["p7"];
        $p8 = $_POST["p8"];

        $actualizar = "UPDATE navbronce SET p5 = '$p5', p6 = '$p6', p7 = '$p7', p8 = '$p8' WHERE id = '$id' AND nombre = '$nombre'";

        $ejecutar = mysqli_query($enlace, $actualizar);
    ?>
        <script>
            <?php if (!$ejecutar) { ?>
                swal.fire({
                    title: "Oops...",
                    text: "Algo salió mal..",
                    icon: "error",
                    button: "OK",
                });
            <?php } else { ?>
                swal.fire({
                    title: "¡Bien hecho!",
                    text: "Premios actualizados Correctamente",
                    icon: "success",
                    button: "OK",
                }).then((result) => {
                    if (result.value) {
                        window.location.href = '../../../opciones.php';
                    }
                });;
            <?php }
        } ?>
        </script>

        <br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp8YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p7pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>