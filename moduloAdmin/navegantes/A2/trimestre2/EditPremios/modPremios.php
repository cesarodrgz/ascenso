<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$premio5 = $_POST["p5"];
$premio6 = $_POST["p6"];
$premio7 = $_POST["p7"];
$premio8 = $_POST["p8"];

include '../../../../../templates/conexion.php';
//Iniciamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../../../../index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Actualizar A1|T2</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../../../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Estilos footer-->
    <link rel="stylesheet" href="../../../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<?php include 'navbarT2.php' ?>

<body>
    <br>
    <div class="container">
        <h2 class="text-primary text-center">Actualizar premios</h2>
        <div class="col-xs-12 col-md-12 col-xl-12">
            <div class="alert alert-info text-center" role="alert">
                Está actualizando los premios de: <b><?php echo $nombre ?></b>
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

        $actualizar = "UPDATE navplata SET p5 = '$p5', p6 = '$p6', p7 = '$p7', p8 = '$p8' WHERE id = '$id' AND nombre = '$nombre'";

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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>