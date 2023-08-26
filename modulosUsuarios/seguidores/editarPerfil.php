<?php
include '../../templates/actualizarS.php';
include "../../templates/conexion.php"; //Incluimos la clase conexión para realizar busquedas SQL
session_start(); //Iniciamos la variable de sesión
$user = $_SESSION['user']; //Obtenemos de Inciar sesion el user que esta entrando

?>
<!doctype html>
<html lang="en">

<head>
    <title>Editar Perfil - Seguidores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../css/foot.css">
</head>

<!--Navbar-->
<?php include '../../templates/seguidores/nav8.php' ?>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h1 class="text-center">
                    Editar Perfil
                </h1>
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <div class="alert alert-info text-center" role="alert">
                        Algunos campos no se pueden editar debido a que asi lo decidio el administrador.
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <?php
                //Realizamos una búsqueda SQL en la tabla usuarios donde mostramos a todos los usuarios del departamento de Seguidores
                $consulta = mysqli_query($enlace, "SELECT * from usuarios WHERE user = '$user'");
                while ($datos = mysqli_fetch_array($consulta)) {
                ?>
                    <p class="text-center">Foto actual:</p>
                    <img class="rounded mx-auto d-block" style="width: 200px" src="../../img/usuarios/<?php echo $datos["foto"] ?>" alt="">
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
                                <input type="text" name="user" class="form-control" value="<?php echo $datos["user"] ?>" readonly>
                            </div>

                            <!--Input para el usuario-->
                            <div class="col-md-6">
                                <label>Contraseña:</label>
                                <input type="text" name="pass" class="form-control" value="<?php echo $datos["pass"] ?>">
                            </div>

                            <!--Input para el usuario-->
                            <div class="col-md-6">
                                <label>Usuario:</label>
                                <input type="text" name="nombre" class="form-control" value="<?php echo $datos["nombre"] ?>" readonly>
                            </div>

                            <!--Input para el usuario-->
                            <div class="col-md-6">
                                <label>Dirección:</label>
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
                                <input type="date" name="fechaNac" class="form-control" value="<?php echo $datos["fechaNac"] ?>" readonly>
                            </div>

                            <!--Input para el usuario-->
                            <div class="col-md-6">
                                <label>Padre:</label>
                                <input type="text" name="padre" class="form-control" value="<?php echo $datos["padre"] ?>" readonly>
                            </div>

                            <!--Input para el usuario-->
                            <div class="col-md-6">
                                <label>Madre:</label>
                                <input type="text" name="madre" class="form-control" value="<?php echo $datos["madre"] ?>" readonly>
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
    </div>


    <br>
    <?php
    include '../../templates/foot2.php'
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>