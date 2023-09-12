<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$premio5 = $_POST["p5"];
$premio6 = $_POST["p6"];

include '../../../../../../templates/conexion.php';
//Iniamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../../../../../index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Actualizar A2|T3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../../../../../css/foot.css">
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<!--Navbar-->
<?php include '../../../../../../templates/pioneros/nav6.php' ?>

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

                    <p>Premio 1 - Trimestre 3
                        <small>(Premio de destreza)</small>
                    </p>
                    <select name="p5" id="" class="form-control">
                        <option value="<?php echo $premio6 ?>"> Premio actual asignado: <?php echo  $premio5 ?> </option>
                        <option value="Iglesia">Iglesia</option>
                        <option value="Ninguno">Ninguno</option>
                    </select> <br>

                    <p>Premio 2 - Trimestre 3
                        <small>(Premio de bíblico)</small>
                    </p>
                    <select name="p6" id="" class="form-control">
                        <option value="<?php echo $premio7 ?>"> Premio actual asignado: <?php echo  $premio6 ?> </option>
                        <option value="Números">Números</option>
                        <option value="Ninguno">Ninguno</option>
                    </select> <br>

                    <input type="submit" class="btn btn-success btn-block" value="Actualizar premios" name="send">
                </form>
            </div>
        </div>
    </div> <br><br> <br>

    <?php include '../../../../../../templates/foot2.php' ?>

    <?php
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $p5 = $_POST["p5"];
        $p6 = $_POST["p6"];
        $actualizar = "UPDATE pibronce SET p5 = '$p5', p6 = '$p6' WHERE id = '$id'";

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
                        window.location.href = 'index.php';
                    }
                });;
            <?php }
        } ?>
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>