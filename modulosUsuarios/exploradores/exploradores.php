<?php
include "../../templates/conexion.php"; //Incluimos la clase conexión para realizar busquedas SQL
session_start(); //Iniciamos la variable de sesión
$user = $_SESSION['user']; //Obtenemos de Inciar sesion el user que esta entrando

$consulta = mysqli_query($enlace, "SELECT nombre from usuarios where user = '$user'"); //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
?>
<!doctype html>
<html lang="en">

<?php include 'navbarNU.php' ?>

<head>
  <title>Inicio - Navegantes</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../../css/foot.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-xl-12 text-center">
        <img src="../../img/exploradores.png" alt="LOGO-EXPLORADORES" style="width: 150px;">
      </div>
    </div> 

    <div class="row">
      <div class="col-xs-12 col-md-6 col-xl-12">
        <div class="alert alert-success" role="alert">
          <h4 class="text-center">
            Bienvenido:
            <?php
            //Mostramos los datos que coincidan con la consulta SQL realizada
            while ($datos = mysqli_fetch_array($consulta)) {
              //Mostramos el nombre el usuario que obtenemos de la consulta realizada
              echo $datos["nombre"];
            }
            ?>
          </h4>
        </div>
      </div>

      <div class="col-xs-12 col-md-6 col-xl-12 text-center">
        <img src="../../img/usuario.png" alt="LOGO-EDITAR-PERFIL" style="width: 150px;">
        <a href="editarPerfil.php" class="btn btn-primary btn-block">Editar Perfil</a> <br>
      </div>

      <div class="col-xs-12 col-md-6 col-xl-12 text-center">
        <img src="../../img/premio.png" alt="LOGO-PREMIOS" style="width: 150px;">
        <a href="verPremios.php" class="btn btn-primary btn-block">Ver mis premios</a>
      </div>
    </div>
  </div>

  <br><br>
  <?php
  include '../../templates/foot2.php' //Incluimos el footer
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>