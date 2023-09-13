<?php
include '../../../../templates/conexion.php';
$nombre = $_POST["nombre"];
//Iniciamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../../../index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>T2 | A2 Agregar</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<?php include 'navbar3.php' ?>

<body>
    <br>
    <div class="container">
        <h1 class="text-primary text-center">Trimestre 2</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="alert alert-success text-center" role="alert">
                    Está agregando premios a: <b><?php echo $nombre ?></b>.
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <form action="" method="post">
                    <?php
                    //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
                    $consulta = mysqli_query($enlace, "SELECT id, user, nombre from usuarios WHERE departamento = 'Exploradores' and nombre = '$nombre'");
                    ?>

                    <?php foreach ($consulta as $info) : ?>
                        <input type="hidden" name="id" value="<?php echo $info["id"] ?>">
                        <input type="hidden" name="user" value="<?php echo $info["user"] ?>">
                        <input type="hidden" name="nombre" class="form-control" value="<?php echo $info["nombre"] ?>" readonly> <br>
                        <p>Asignar Premio 2</p>
                        <select name="p2" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Electricidad">Electricidad</option>
                        </select> <br>

                    <?php endforeach ?>
                    </select>
                    <br>

                    <input type="submit" class="btn btn-success btn-block" value="Guardar" name="send">
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $user = $_POST["user"];
        $nombre = $_POST["nombre"];
        $p2 = $_POST["p2"];


        $actualizar = "UPDATE exploplata SET p2 = '$p2'
                        WHERE id = '$id' AND nombre = '$nombre'";

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
                    text: "Premios agregados Correctamente",
                    icon: "success",
                    button: "OK",
                }).then((result) => {
                    if (result.value) {
                        window.location.href = '../../agregarPremios.php'
                    }
                });;
            <?php }
        } ?>
        </script>

        <br><br><br><br><br>

        <?php include '../../../../templates/foot2.php' ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>