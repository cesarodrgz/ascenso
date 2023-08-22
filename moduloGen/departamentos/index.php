<!doctype html>
<html lang="en">

<head>
    <title>Selecionar departamento</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Footer estilos-->
    <link rel="stylesheet" href="../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        #seguidores {
            background-color: #BDB76B;
            color: black;
        }

        #exploradores {
            background-color: #228B22;
            color: black;
        }
    </style>
</head>

<body> <br>

    <div class="container">
        <div class="departamento">
            <h2 class="text-center text-primary">Seleccione el departamento</h2>
        </div>

        <div class="alerta text-center">
            <div class="alert alert-secondary" role="alert">
                Verá los premios del departamento que seleccione
            </div>
        </div>

        <div class="select">
            <div class="navegantes">
                <a href="premiosNav.php" class="btn btn-warning btn-block">Navegantes</a>
            </div> <br>

            <div class="Pioneros">
                <a href="#" class="btn btn-danger btn-block">Pioneros</a>
            </div> <br>

            <div class="Seguidores">
                <a href="#" class="btn btn-block" id="seguidores">Seguidores</a>
            </div> <br>

            <div class="Exploradores">
                <a href="#" class="btn btn-block" id="exploradores">Exploradores</a>
            </div> 
        </div>
    </div><br><br><br><br><br><br><br><br>

    <?php include '../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>