<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$p5 = $_POST["p5"];
$p6 = $_POST["p6"];
$p7 = $_POST["p7"];

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

    <link rel="stylesheet" href="../../../../../css/foot.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include 'navbar1.php' ?>

<body>
    <br>
    <div class="container">
        <h1 class="text-primary text-center">Seleccione los premios que desea actualizar</h1>
        <div class="col-xs-12 col-md-12 col-xl-12">
            <div class="alert alert-info text-center" role="alert">
                Trimestre 1 - <?php echo $nombre ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="nombre" value="<?php echo $nombre ?>">

                    <p>Premio 1 - Trimestre 4</p>
                    <select name="p5" id="" class="form-control">
                        <option value="<?php echo $p5 ?>"> Premio actual asignado: <?php echo  $p5 ?> </option>
                        <option value="Dibujantes">Dibujantes</option>
                        <option value="Ciudadanía">Ciudadanía</option>
                        <option value="Ninguno">Ninguno</option>
                    </select> <br>

                    <p>Premio 2 - Trimestre 4</p>
                    <select name="p6" id="" class="form-control">
                        <option value="<?php echo $p6 ?>"> Premio actual asignado: <?php echo  $p6 ?> </option>
                        <option value="Dibujantes">Dibujantes</option>
                        <option value="Ciudadanía">Ciudadanía</option>
                        <option value="Ninguno">Ninguno</option>
                    </select> <br>

                    <p>Premio 3 - Trimestre 4</p>
                    <select name="p7" id="" class="form-control">
                        <option value="<?php echo $p7 ?>"> Premio actual asignado: <?php echo  $p7 ?> </option>
                        <option value="Premio de liderazgo 301">Premio de liderazgo 301</option>
                        <option value="Ninguno">Ninguno</option>
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

        $actualizar = "UPDATE explobronce SET p5 = '$p5', p6 = '$p6', p7 = '$p7' WHERE id = '$id' AND nombre = '$nombre'";

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
        <?php include '../../../../../templates/foot2.php' ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp16YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p7pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>