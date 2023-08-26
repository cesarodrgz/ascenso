<?php
//Inluimos la conexion para realizar el insert de los premios
include '../../../../../templates/conexion.php';
//Obtenemos el nombre del seguidor
$nombre = $_POST["nombre"]
?>
<!doctype html>
<html lang="en">

<head>
    <title>Agregar Trimestre 4</title>
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
<?php include '../../../../../templates/seguidores/nav4.php' ?>

<body>
    <br>
    <div class="container">
        <!--Encabezado-->
        <h1 class="text-primary text-center">Trimestre 4</h1>
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
                    $consulta = mysqli_query($enlace, "SELECT id, user, nombre from usuarios WHERE departamento = 'Seguidores' and nombre = '$nombre'");
                    ?>

                    <?php foreach ($consulta as $info) : ?>
                        <!-- ID invisible -->
                        <input type="hidden" name="id" value="<?php echo $info["id"] ?>">
                        <!-- usuario invisible-->
                        <input type="hidden" name="user" value="<?php echo $info["user"] ?>">
                        <!-- Nombre del seguidor-->
                        <input type="hidden" name="nombre" class="form-control" value="<?php echo $info["nombre"] ?>" readonly> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar premio verde</p>
                        <select name="p9" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Hablar en público">Hablar en público</option>
                            <option value="Fotografía">Fotografía</option>
                        </select> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar premio verde</p>
                        <select name="p10" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Hablar en público">Hablar en público</option>
                            <option value="Fotografía">Fotografía</option>
                        </select> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio Bóblico</p>
                        <select name="p11" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="2 Tesalonicenses">2 Tesalonicenses</option>
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
       id, user, nombre, p9, p10, p11
    */
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $user = $_POST["user"];
        $nombre = $_POST["nombre"];
        $p9 = $_POST["p9"];
        $p10 = $_POST["p10"];
        $p11 = $_POST["p11"];

        //Declaramos la variable insertar que contendrá la sentencia SQL a utilizar, en este caso insertar  
        //Insertamos los valores de id, user, nombre, p11, p10, p11 y p10
        $insertar = "UPDATE segplata SET p9 = '$p9', p10 = '$p10', p11 = '$p11' WHERE id = '$id' AND nombre = '$nombre'";

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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp10YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p11pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>