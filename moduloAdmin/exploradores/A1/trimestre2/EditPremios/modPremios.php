<?php
//Variables envías del formulario anterior
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$premio2 = $_POST["p2"];
//Incluimos la clase conexión para realizar la siguiente busqueda y llenar la tabla
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
    <title>Actualizar T2|A1</title>
    <!-- Icono -->
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

<!-- Navbar -->
<?php include 'navbarT2.php' ?>

<body>
    <br>
    <div class="container">
        <h2 class="text-primary text-center">Actualizar premios</h2>
        <div class="col-xs-12 col-md-12 col-xl-12">
            <div class="alert alert-info text-center" role="alert">
                Esta actualizando los premios de: <b><?php echo $nombre ?></b>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="nombre" value="<?php echo $nombre ?>">

                    <p>Premio 1 - Trimestre 2</p>
                    <select name="p2" id="" class="form-control">
                        <option value="<?php echo $premio2 ?>"> Premio actual asignado: <?php echo  $premio2 ?> </option>
                        <option value="Salud Pública">Salud Pública</option>
                        <option value="Ninguno">Ninguno</option>
                    </select> <br>

                    <input type="submit" class="btn btn-success btn-block" value="Actualizar premios" name="send">
                </form>
            </div>
        </div>
    </div>

    <?php
    //Recibimos los datos al presionar el botón
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $p2 = $_POST["p2"];

        //Consulta a ejecutar
        $actualizar = "UPDATE explobronce SET p2 = '$p2' WHERE id = '$id' AND nombre = '$nombre'";

        //Ejecutamos la consulta
        $ejecutar = mysqli_query($enlace, $actualizar);
    ?>
        <script>
            //Si la consulta no se ejecuta muestra el mensaje de error siguiente
            <?php if (!$ejecutar) { ?>
                swal.fire({
                    title: "Oops...",
                    text: "Algo salió mal..",
                    icon: "error",
                    button: "OK",
                });
            <?php } else { ?>
                //Si la consulta se ejecuta correctamente muestra el siguiente mensaje
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

        <div class="espacio"></div>

        <!-- footer -->
        <?php include '../../../../../templates/foot2.php' ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>