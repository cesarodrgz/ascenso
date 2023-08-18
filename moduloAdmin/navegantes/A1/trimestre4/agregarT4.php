<?php
//Inluimos la conexion para realizar el insert de los premios
include '../../../../templates/conexion.php';
//Obtenemos el nombre del navegante
$nombre = $_POST["nombre"]
?>
<!doctype html>
<html lang="en">

<head>
    <title>Agregar Trimestre 4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../../css/foot.css">
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
                    $consulta = mysqli_query($enlace, "SELECT id, user, nombre from usuarios WHERE departamento = 'Navegantes' and nombre = '$nombre'");
                    ?>

                    <?php foreach ($consulta as $info) : ?>
                        <!-- ID invisible -->
                        <input type="hidden" name="id" value="<?php echo $info["id"] ?>">
                        <!-- usuario invisible-->
                        <input type="hidden" name="user" value="<?php echo $info["user"] ?>">
                        <!-- Nombre del navegante-->
                        <input type="hidden" name="nombre" class="form-control" value="<?php echo $info["nombre"] ?>" readonly> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio 1</p>
                        <select name="p13" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Juego">Juego</option>
                            <option value="Arca de Noé">Arca de Noé</option>
                            <option value="De Paseo">De Paseo</option>
                            <option value="Exploradores por el pueblo">Exploradores por el pueblo</option>
                        </select> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio 2</p>
                        <select name="p14" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Juego">Juego</option>
                            <option value="Arca de Noé">Arca de Noé</option>
                            <option value="De Paseo">De Paseo</option>
                            <option value="Exploradores por el pueblo">Exploradores por el pueblo</option>
                        </select> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio 3</p>
                        <select name="p15" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Juego">Juego</option>
                            <option value="Arca de Noé">Arca de Noé</option>
                            <option value="De Paseo">De Paseo</option>
                            <option value="Exploradores por el pueblo">Exploradores por el pueblo</option>
                        </select> <br>

                        <!-- Información de que premio agregará más los premios disponibles-->
                        <p>Asignar Premio 4</p>
                        <select name="p16" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Juego">Juego</option>
                            <option value="Arca de Noé">Arca de Noé</option>
                            <option value="De Paseo">De Paseo</option>
                            <option value="Exploradores por el pueblo">Exploradores por el pueblo</option>
                        </select>

                    <?php endforeach ?>
                    </select>
                    <br>

                    <!-- Botón de guardar-->
                    <input type="submit" class="btn btn-success btn-block" value="Guardar" name="send">
                </form>
            </div>
        </div>
    </div> <br><br>

    <?php include '../../../../templates/foot2.php' ?>

    <?php
    /* Mediante el if comprobamos que las variables a insertar no esten vacias
       mediante el isset, si lo estan tomamos dichas variables de los campos:
       id, user, nombre, p13, p14, p15, p16
    */
    if (isset($_POST["send"])) {
        $id = $_POST["id"];
        $user = $_POST["user"];
        $nombre = $_POST["nombre"];
        $p13 = $_POST["p13"];
        $p14 = $_POST["p14"];
        $p15 = $_POST["p15"];
        $p16 = $_POST["p16"];

        //Declaramos la variable insertar que contendrá la sentencia SQL a utilizar, en este caso insertar  
        //Insertamos los valores de id, user, nombre, p13, p14, p15 y p16
        $actualizar = "UPDATE navbronce SET p13 = '$p13', p14 = '$p14', p15 = '$p15' , p16 = '$p16'
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


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp16YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p15pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>