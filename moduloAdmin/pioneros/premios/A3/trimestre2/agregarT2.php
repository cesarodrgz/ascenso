<?php
//Inluimos la conexion para realizar el insert de los premios
include '../../../../../templates/conexion.php';
//Obtenemos el nombre del seguidor
$nombre = $_POST["nombre"];
//Iniamos la sesión
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
    <title>Agregar Trimestre 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<!--Navbar-->
<?php include '../../../../../templates/pioneros/nav4.php' ?>

<body>
    <br>
    <div class="container">
        <!--Encabezado-->
        <h1 class="text-primary text-center">Trimestre 2</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <!--Información complementaria-->
                <div class="alert alert-success text-center" role="alert">
                    Está agregando premios a: <b><?php echo $nombre ?></b>.
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <!-- Inicio del formulario-->
                <form action="" method="post">
                    <?php
                    //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
                    $consulta = mysqli_query($enlace, "SELECT id, user, nombre from usuarios WHERE departamento = 'pioneros' and nombre = '$nombre'");
                    ?>

                    <?php foreach ($consulta as $info) : ?>
                        <!-- ID invisible -->
                        <input type="hidden" name="id" value="<?php echo $info["id"] ?>">
                        <!-- usuario invisible-->
                        <input type="hidden" name="user" value="<?php echo $info["user"] ?>">
                        <!-- Nombre del seguidor-->
                        <input type="hidden" name="nombre" class="form-control" value="<?php echo $info["nombre"] ?>" readonly> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar premio de Destreza</p>
                        <select name="p3" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Ajedres">Ajedres</option>
                        </select> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio Bíblico</p>
                        <select name="p4" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="2 Reyes">2 Reyes</option>
                        </select> <br>

                    <?php endforeach ?>
                    </select>
                    <br>

                    <!-- Botón de guardar-->
                    <input type="submit" class="btn btn-success btn-block" value="Guardar" name="send">
                </form>
            </div>
        </div>
    </div>

    <?php
    /* Mediante el if comprobamos que las variables a insertar no esten vacias
       mediante el isset, si lo estan tomamos dichas variables de los campos:
       id, user, nombre, p3,p4
    */
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $user = $_POST["user"];
        $nombre = $_POST["nombre"];
        $p3 = $_POST["p3"];
        $p4 = $_POST["p4"];

        //Declaramos la variable insertar que contendrá la sentencia SQL a utilizar, en este caso insertar  
        //Insertamos los valores de id, user, nombre, p5, p4, p5 y p4
        $insertar = "UPDATE pioro SET p3 = '$p3', p4 = '$p4' WHERE id = '$id' AND nombre = '$nombre'";

        //Realizamos la ejecución de la sentencia SQL
        $ejecutar = mysqli_query($enlace, $insertar);
    ?>
        <script>
            //Si la sentencia SQL no se ejecuta envía un mensaje de error (se utiliza sweetAlert)
            <?php if (!$ejecutar) { ?>
                swal.fire({
                    title: "Oops...",
                    text: "Algo salió mal..",
                    icon: "error",
                    button: "OK",
                });
                //Si la sentencia SQL se ejecuta envía un mensaje de error (se utiliza sweetAlert) y redirige a agregar premios
            <?php } else { ?>
                swal.fire({
                    title: "¡Bien hecho!",
                    text: "Premios agregados Correctamente",
                    icon: "success",
                    button: "OK",
                }).then((result) => {
                    if (result.value) {
                        window.location.href = '../../../index.php'
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