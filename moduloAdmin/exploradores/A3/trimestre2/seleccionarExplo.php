<?php
include '../../../../templates/conexion.php';
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
    <title>T2 | A3 - Exploradores</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Estilos del footer -->
    <link rel="stylesheet" href="../../../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include 'navbar3.php' ?>

<body>
    <br>
    <div class="container">
        <h2 class="text-primary text-center">Año 3 | Trimestre 2</h2>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="alert alert-success text-center" role="alert">
                    Seleccione el Explorador y presione continuar.
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <form action="agregarT2.php" method="post">
                    <select name="nombre" class="form-control">
                        <option value="Seleccionar">Seleccionar</option>
                        <?php
                        //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
                        $consulta = mysqli_query($enlace, "SELECT nombre from usuarios WHERE departamento = 'Exploradores'");
                        ?>

                        <?php foreach ($consulta as $info) : ?>
                            <option value="<?php echo $info['nombre'] ?>"> <?php echo  $info['nombre'] ?> </option>
                        <?php endforeach ?>
                    </select>
                    <br>

                    <input type="submit" class="btn btn-primary" value="Continuar">
                </form>
            </div>
        </div>
    </div>

    <div class="espacio"></div>
    <?php include '../../../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>