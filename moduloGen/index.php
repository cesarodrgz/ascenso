<!doctype html>
<html lang="en">

<head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">Opciones</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="usuarios/index.php">Gestionar usuarios <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disable" href="departamentos/index.php" tabindex="-1" aria-disabled="true">Ver premios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disable" href="../templates/cerrarS.php" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
            </li>
        </ul>
    </div>
</nav> <br><br><br>

    <div class="container">
        <h2 class="text-center text-primary">Opciones <br> (Administrador General)</h2> <br>

        <div class="opciones">
            <div class="usuarios">
                <a href="usuarios/index.php" class="btn btn-warning btn-block">Gestionar usuarios</a>
            </div> <br>

            <div class="departamentos">
                <a href="departamentos/index.php" class="btn btn-warning btn-block">Premios</a>
            </div>
        </div>
    </div> <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!--Inlcuimos el footer-->
    <?php include '../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>