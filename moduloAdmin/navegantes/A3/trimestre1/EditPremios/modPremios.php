<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$premio1 = $_POST["p1"];
$premio2 = $_POST["p2"];
$premio3 = $_POST["p3"];
$premio4 = $_POST["p4"];

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
    <title>Actualizar A3|T1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../../../../css/foot.css">
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<?php include 'navbar1.php' ?>

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
                    <select name="p1" id="" class="form-control">
                        <option value="<?php echo $premio1 ?>"> Premio actual asignado: <?php echo  $premio1 ?> </option>
                        <option value="Artes">Artes</option>
                        <option value="Misiones Generales">Misiones Generales</option>
                        <option value="Historia">Historia</option>
                        <option value="Evangelización">Evangelización</option>
                    </select> <br>

                    <p>Premio 2 - Trimestre 1</p>
                    <select name="p2" id="" class="form-control">
                        <option value="<?php echo $premio2 ?>"> Premio actual asignado: <?php echo  $premio2 ?> </option>
                        <option value="Artes">Artes</option>
                        <option value="Misiones Generales">Misiones Generales</option>
                        <option value="Historia">Historia</option>
                        <option value="Evangelización">Evangelización</option>
                    </select> <br>

                    <p>Premio 3 - Trimestre 1</p>
                    <select name="p3" id="" class="form-control">
                        <option value="<?php echo $premio3 ?>"> Premio actual asignado: <?php echo  $premio3 ?> </option>
                        <option value="Artes">Artes</option>
                        <option value="Misiones Generales">Misiones Generales</option>
                        <option value="Historia">Historia</option>
                        <option value="Evangelización">Evangelización</option>
                    </select> <br>

                    <p>Premio 4 - Trimestre 1</p>
                    <select name="p4" id="" class="form-control">
                        <option value="<?php echo $premio4 ?>"> Premio actual asignado: <?php echo  $premio4 ?> </option>
                        <option value="Artes">Artes</option>
                        <option value="Misiones Generales">Misiones Generales</option>
                        <option value="Historia">Historia</option>
                        <option value="Evangelización">Evangelización</option>
                    </select> <br>

                    <input type="submit" class="btn btn-success btn-block" value="Actualizar premios" name="send">
                </form>
            </div>
        </div>
    </div> <br><br>

    <?php include '../../../../../templates/foot2.php' ?>

    <?php
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $p1 = $_POST["p1"];
        $p2 = $_POST["p2"];
        $p3 = $_POST["p3"];
        $p4 = $_POST["p4"];

        $actualizar = "UPDATE navoro SET p1 = '$p1', p2 = '$p2', p3 = '$p3', p4 = '$p4' WHERE id = '$id'";

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

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>