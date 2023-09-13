<!doctype html>
<html lang="en">

<head>
    <title>Inicio</title>
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/foot.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php" style="color: white;">ASCENSO LDJ 10</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#nosotros">Nosotros</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#acerca" tabindex="-1" aria-disabled="true">Acerca de</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <img src="img/logo.png" alt="LOGO" style="width: 150px;" class="mx-auto d-block rounded">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="font-weight-bold">
                    CONTROL DE ASCENSO
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="font-weight-bold">Destacamento León de Judá 10 SM</h3>
            </div>
            <br>
            <div class="col-sm-12 col-md-6 col-lg-12">
                <a href="login.php" class="btn btn-success btn-lg btn-block">ENTRAR</a>
            </div>
        </div>
        <br><br><br>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1 id="nosotros" class="font-weight-bold">Nosotros</h1>
                <p style="text-align: justify;">
                    EXPLORADORES DEL REY, ES UN MINISTERIO INFANTO JUVENIL CON EL ÚNICO OBJETIVO DE EVANGELIZAR,
                    EQUIPAR Y EMPODERAR
                    LA PRÓXIMA GENERACIÓN DE HOMBRES DE DIOS
                    Y LÍDERES SIERVOS DE POR VIDA.
                </p>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1 id="acerca" class="font-weight-bold">Acerca de</h1>
                <p style="text-align: justify;">
                    NUESTROS HORARIOS DE LAS REUNIONES SON TODOS LOS DOMINGOS DE 8:30 AM A 10:00
                    AM EN EL PARQUE DE LA URBANIZACIÓN SANTA EMILIA, SAN MIGUEL, EL SALVADOR.
                </p>
            </div>
        </div>
    </div> <br>

    <?php
    include 'templates/foot.php';
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>