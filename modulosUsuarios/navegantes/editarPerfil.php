<?php
include "../../templates/conexion.php"; //Incluimos la clase conexión para realizar busquedas SQL
session_start(); //Iniciamos la variable de sesión
$user = $_SESSION['user']; //Obtenemos de Inciar sesion el user que esta entrando
?>
<!doctype html>
<html lang="en">

<head>
    <title>Editar Perfil - Navegantes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h1 class="text-center">
                    Editar Perfil
                </h1>
                <h4 class="text-center">Foto de Perfil</h4>
                <center>
                    <?php
                    $consulta = mysqli_query($enlace, "SELECT * from usuarios WHERE user = '$user'"); //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
                    while ($datos = mysqli_fetch_array($consulta)) { ?>

                        <img src="../../img/logo.png" alt="FotoPerfil" style="width: 150px;">
                        <form action="" method="post">

                            <br>
                            <br>
                            <input type="hidden" name="id" value="<?php echo $datos["id"] ?>">
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="user" readonly class="form-control" value="<?php echo $datos["nombre"] ?>">

                            <br>
                            <label for="Direccion">Direccion</label>
                            <input type="text" name="direccion" class="form-control" value="<?php echo $datos["direccion"] ?>">

                            <br>
                            <label for="Telefono">Telefono</label>
                            <input type="tel" name="telefono" class="form-control" value="<?php echo $datos["telefono"] ?>">

                            <br>
                            <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                            <input type="varchar" name="fecha de nacimiento" readonly class="form-control" value="<?php echo $datos["fechaNac"] ?>">

                            <br>
                            <label for="Padre">Padre</label>
                            <input type="text" name="padre" readonly class="form-control" value="<?php echo $datos["padre"] ?>">

                            <br>
                            <label for="Madre">Madre</label>
                            <input type="text" name="madre" readonly class="form-control" value="<?php echo $datos["madre"] ?>">

                        <?php
                    }
                        ?>

                        <br>
                        <input type="submit" value="GUARDAR" class="btn btn-success btn-block" name="send">
                        </form>
                        <?php
                        if (isset($_POST["send"])) {
                            $id = $_POST["id"];
                            $direccion = $_POST["direccion"];
                            $telefono = $_POST["telefono"];

                            $modificar = "UPDATE usuarios SET 
                                            direccion = '" . $direccion . "',
                                            telefono = '" . $telefono . "'
                                            WHERE id = " . $id . ";";

                            $ejecutar = mysqli_query($enlace, $modificar);
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
                                    text: "Perfil Actualizado Correctamente",
                                    icon: "success",
                                    button: "OK",
                                }).then((result) => {
                                    if (result.value) {
                                        window.location.href = 'editarPerfil.php'
                                    }
                                });;
                            <?php }
                        } ?>
                        </script>
                </center>
            </div>
        </div>
    </div>

    <br>
    <?php
    include '../../templates/footer.php'
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>