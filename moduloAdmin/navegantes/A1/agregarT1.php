<?php
include '../../../templates/conexion.php';
$nombre = $_POST["nombre"]
?>
<!doctype html>
<html lang="en">

<head>
    <title>Agregar Trimestre 1 - Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-primary text-center">Seleccionar premios - Trimestre 1</h1>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="alert alert-success text-center" role="alert">
                    Agregue los premios que desea guardar.
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <form action="" method="post">
                    <?php
                    //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
                    $consulta = mysqli_query($enlace, "SELECT id, user, nombre from usuarios WHERE departamento = 'Navegantes' and nombre = '$nombre'");
                    ?>

                    <?php foreach ($consulta as $info) : ?>
                        <input type="text" name="id" value="<?php echo $info["id"] ?>">
                        <input type="text" name="user" value="<?php echo $info["user"] ?>">
                        <input type="text" name="nombre" class="form-control" value="<?php echo $info["nombre"] ?>" readonly> <br>
                        <input type="text" name="p1" class="form-control" placeholder="Ingresar Premio 1"> <br>
                        <input type="text" name="p2" class="form-control" placeholder="Ingresar Premio 2"> <br>
                        <input type="text" name="p3" class="form-control" placeholder="Ingresar Premio 3"> <br>
                        <input type="text" name="p4" class="form-control" placeholder="Ingresar Premio 4"> <br>

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
        $p1 = $_POST["p1"];
        $p2 = $_POST["p2"];
        $p3 = $_POST["p3"];
        $p4 = $_POST["p4"];

        $insertar = "INSERT INTO navbronce(id, user, nombre, p1, p2, p3, p4) 
        VALUES('$id',
                '$user',
                '$nombre',
                '$p1',
                '$p2',
                '$p3',
                '$p4')"; 

        $ejecutar = mysqli_query($enlace, $insertar);
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
                        window.location.href = 'seleccionarT.php'
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