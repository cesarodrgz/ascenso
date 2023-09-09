<?php
//Inluimos la conexion para realizar el insert de los premios
include '../../../../templates/conexion.php';
//Obtenemos el nombre del navegante
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
    <title>Agregar Trimestre 1 - Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../../../css/foot.css">
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include 'navbar2.php' ?>

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
                    $consulta = mysqli_query($enlace, "SELECT id, user, nombre from usuarios WHERE departamento = 'Exploradores' and nombre = '$nombre'");
                    ?>

                    <?php foreach ($consulta as $info) : ?>
                        <!-- ID invisible -->
                        <input type="hidden" name="id" value="<?php echo $info["id"] ?>">
                        <!-- usuario invisible-->
                        <input type="hidden" name="user" value="<?php echo $info["user"] ?>">
                        <!-- Nombre del navegante-->
                        <input type="hidden" name="nombre" class="form-control" value="<?php echo $info["nombre"] ?>" readonly> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio 5</p>
                        <select name="p5" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Dibujantes">Dibujantes</option>
                            <option value="Ciudadanía">Ciudadanía</option>
                        </select> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio 6</p>
                        <select name="p6" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Dibujantes">Dibujantes</option>
                            <option value="Ciudadanía">Ciudadanía</option>
                        </select> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio de Liderazgo</p>
                        <select name="p7" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Premio de liderazgo 301">Premio de liderazgo 301</option>
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
       id, user, nombre, p5, p6, p7, p16
    */
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $user = $_POST["user"];
        $nombre = $_POST["nombre"];
        $p5 = $_POST["p5"];
        $p6 = $_POST["p6"];
        $p7 = $_POST["p7"];

        //Declaramos la variable insertar que contendrá la sentencia SQL a utilizar, en este caso insertar  
        //Insertamos los valores de id, user, nombre, p5, p6, p7 y p16
        $actualizar = "UPDATE explobronce SET p5 = '$p5', p6 = '$p6', p7 = '$p7'
                        WHERE id = '$id' AND nombre = '$nombre'";

        //Realizamos la ejecución de la sentencia SQL
        $ejecutar = mysqli_query($enlace, $actualizar);
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
                        window.location.href = '../../agregarPremios.php'
                    }
                });;
            <?php }
        } ?>
        </script>

        <br><br>
        <?php include '../../../../templates/foot2.php' ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp16YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p7pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>