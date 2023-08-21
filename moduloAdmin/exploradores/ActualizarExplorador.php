<?php
include '../../templates/conexion.php';
include 'metodosE.php';
$id = $_POST["id"];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Actualizar Explorador - Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include 'navBarNav.php' ?>

<body> <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h3 class="text-center">
                    Editar Perfil Explorador (Administrador)
                </h3>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-xl-12">
            <?php
            //Realizamos una búsqueda SQL en la tabla usuarios donde mostramos a todos los usuarios del departamento de navegantes
            $consulta = mysqli_query($enlace, "SELECT * from usuarios WHERE id = '$id'");
            while ($datos = mysqli_fetch_array($consulta)) {
            ?>
                <center>
                    <p>Foto actual:</p>
                    <img class="img-fluid img-thumbnail" style="width: 100px" src="../../img/usuarios/<?php echo $datos["foto"] ?>" alt="">
                </center>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row">

                        <input type="hidden" name="id" value="<?php echo $datos["id"] ?>">

                        <!--Input para el usuario-->
                        <div class="col-md-12">
                            <P>Seleccionar Nueva foto</P>
                            <input type="file" name="foto" value="<?php echo $datos["foto"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-6">
                            <label for="">Usuario:</label>
                            <input type="text" name="user" class="form-control" value="<?php echo $datos["user"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-6">
                            <label>Contraseña:</label>
                            <input type="text" name="pass" class="form-control" value="<?php echo $datos["pass"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-6">
                            <label>Usuario:</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $datos["nombre"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-6">
                            <label>Usuario:</label>
                            <input type="text" name="direccion" class="form-control" value="<?php echo $datos["direccion"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-6">
                            <label>Telefono:</label>
                            <input type="text" name="telefono" class="form-control" value="<?php echo $datos["telefono"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-6">
                            <label>Fecha de nacimiento:</label>
                            <input type="date" name="fechaNac" class="form-control" value="<?php echo $datos["fechaNac"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-6">
                            <label>Padre:</label>
                            <input type="text" name="padre" class="form-control" value="<?php echo $datos["padre"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-6">
                            <label>Madre:</label>
                            <input type="text" name="madre" class="form-control" value="<?php echo $datos["madre"] ?>">
                        </div>

                        <!--Input para el usuario-->
                        <div class="col-md-12">
                            <br>
                            <button type="submit" value="btnModificar" name="accion" class="btn btn-warning btn-block">Actualizar</button>
                        </div>

                    </div>
                <?php
            }
                ?>
                </form>
        </div>
    </div>
    <br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>