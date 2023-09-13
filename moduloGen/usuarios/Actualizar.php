<?php
include '../../templates/conexion.php';
include 'metodos.php';
$id = $_POST["id"];
//Iniciamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Actualizar - Administrador General</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="../index.php">
        <img src="../../img/logo.png" alt="LOGO" style="width: 30px;">
    </a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Administrar usuarios</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../departamentos/index.php">Ver premios</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../../templates/cerrarS.php">Salir</a>
            </li>
        </ul>
    </div>
</nav>

<body> <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <h3 class="text-center text-primary">
                    Actualizar usuarios <br> (Administrador General)
                </h3>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-xl-12">
            <?php
            //Realizamos una búsqueda SQL en la tabla usuarios donde mostramos a todos los usuarios del departamento de navegantes
            $consulta = mysqli_query($enlace, "SELECT * from usuarios WHERE id = '$id'");
            while ($datos = mysqli_fetch_array($consulta)) {
            ?>
                <p class="text-center">Foto actual:</p>
                <img class="rounded mx-auto d-block" style="width: 100px" src="../../img/usuarios/<?php echo $datos["foto"] ?>">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>