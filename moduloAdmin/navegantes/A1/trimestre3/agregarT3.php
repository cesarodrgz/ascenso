<?php
include '../../../../templates/conexion.php';
$nombre = $_POST["nombre"]
?>
<!doctype html>
<html lang="en">

<head>
    <title>Agregar Trimestre 3 - Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include 'navbar.php' ?>

<body>
    <br>
    <div class="container">
        <h1 class="text-primary text-center">Seleccionar premios - Año 1 | Trimestre 3</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="alert alert-success text-center" role="alert">
                    Agregue los premios a: <b><?php echo $nombre ?></b>.
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <form action="" method="post">
                    <?php
                    //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
                    $consulta = mysqli_query($enlace, "SELECT id, user, nombre from usuarios WHERE departamento = 'Navegantes' and nombre = '$nombre'");
                    ?>

                    <?php foreach ($consulta as $info) : ?>
                        <input type="hidden" name="id" value="<?php echo $info["id"] ?>">
                        <input type="hidden" name="user" value="<?php echo $info["user"] ?>">
                        <input type="hidden" name="nombre" class="form-control" value="<?php echo $info["nombre"] ?>" readonly> <br>
                        <p>Asignar Premio 9</p>
                        <select name="p9" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Visitando Lugares">Visitando Lugares</option>
                            <option value="Guardián de la ley">Guardián de la ley</option>
                            <option value="Ayudante en el manejo de dinero">Ayudante en el manejo de dinero</option>
                            <option value="Ayudante de patrulla">Ayudante de patrulla</option>
                        </select> <br>

                        <p>Asignar Premio 10</p>
                        <select name="p10" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Visitando Lugares">Visitando Lugares</option>
                            <option value="Guardián de la ley">Guardián de la ley</option>
                            <option value="Ayudante en el manejo de dinero">Ayudante en el manejo de dinero</option>
                            <option value="Ayudante de patrulla">Ayudante de patrulla</option>
                        </select> <br>

                        <p>Asignar Premio 11</p>
                        <select name="p11" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Visitando Lugares">Visitando Lugares</option>
                            <option value="Guardián de la ley">Guardián de la ley</option>
                            <option value="Ayudante en el manejo de dinero">Ayudante en el manejo de dinero</option>
                            <option value="Ayudante de patrulla">Ayudante de patrulla</option>
                        </select> <br>

                        <p>Asignar Premio 12</p>
                        <select name="p12" class="form-control">
                            <option value="Ninguno">Ninguno</option>
                            <option value="Visitando Lugares">Visitando Lugares</option>
                            <option value="Guardián de la ley">Guardián de la ley</option>
                            <option value="Ayudante en el manejo de dinero">Ayudante en el manejo de dinero</option>
                            <option value="Ayudante de patrulla">Ayudante de patrulla</option>
                        </select>

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
        $p9 = $_POST["p9"];
        $p10 = $_POST["p10"];
        $p11 = $_POST["p11"];
        $p12 = $_POST["p12"];

        $actualizar = "UPDATE navbronce SET p9 = '$p9', p10 = '$p10', p11 = '$p11' , p12 = '$p12'
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


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>