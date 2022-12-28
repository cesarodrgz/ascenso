<?php
include 'metodos.php';
include '../../templates/conexion.php';

$consulta = mysqli_query($enlace, "SELECT id, user, nombre, direccion, telefono, foto from usuarios WHERE departamento = 'Navegantes'"); //Realizamos una búsqueda SQL en la tabla usuarios donde el usuario sea igual a lo que traiga la variable de incio de sesión
?>
<!doctype html>
<html lang="en">

<head>
  <title>Administrar Usuarios - Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- DataTable CSS-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
</head>

<body>
  <br>
  <center>
    <img src="../../img/navegantes.png" alt="LOGO-NAVEGANTES" style="width: 150px;">
  </center>
  <div class="container">
    <div class="col-xs-12 col-md-12 col-xl-12">
      <h1 class="text-center">
        Administrar Usuarios
      </h1>
      <br>
      <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal">
        Agregar Usuario
      </button>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal" id="modal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Gestión de Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-row">
                  <input type="hidden" name="id">

                  <div class="col-md-6">
                    <label>Usuario</label>
                    <input type="text" name="user" class="form-control" placeholder="Usuario del navegante">
                  </div>

                  <div class="col-md-6">
                    <Label>Contraseña</Label>
                    <input type="text" name="pass" class="form-control" placeholder="Contraseña">
                  </div>

                  <br><br>
                  <div class="col-md-12">
                    <Label>Foto de perfil</Label>
                    <input type="file" accept="image/jpg" name="foto" class="form-control">
                  </div>

                  <br>
                  <div class="col-md-12">
                    <Label>Nombre</Label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre del navegante">
                  </div>

                  <br>
                  <div class="col-md-12">
                    <Label>Direccion</Label>
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion del navegante">
                  </div>

                  <br>
                  <div class="col-md-6">
                    <Label>Telefono</Label>
                    <input type="tel" name="telefono" class="form-control" placeholder="Telefono">
                  </div>

                  <br>
                  <div class="col-md-6">
                    <Label>Fecha de nacimiento</Label>
                    <input type="date" name="fechaNac" class="form-control">
                  </div>

                  <br>
                  <div class="col-md-6">
                    <Label>Padre</Label>
                    <input type="text" name="padre" class="form-control" placeholder="Nombre del padre">
                  </div>

                  <br>
                  <div class="col-md-6">
                    <Label>Madre</Label>
                    <input type="text" name="madre" class="form-control" placeholder="Nombre de la madre">
                  </div>

                  <input type="hidden" name="departamento" id="" value="Navegantes" readonly>

                </div>
              </div>
              <div class="modal-footer">
                <button value="btnAgregar" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>

    <div class="col-xs-12 col-md-12 col-xl-12">
      <br>
      <table class="table" id="table">
        <thead>
          <tr>
            <th>ID</th>
            <td>Foto</td>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //Mostramos los datos que coincidan con la consulta SQL realizada
          while ($datos = mysqli_fetch_array($consulta)) { ?>
            <tr>
              <td><?php echo $datos["id"]; ?></td>
              <td><img class="img-fluid img-thumbnail" style="width: 100px" src="../../usuarios/<?php echo $datos["foto"] ?>" alt=""></td>
              <td><?php echo $datos["user"]; ?></td>
              <td><?php echo $datos["nombre"]; ?></td>
              <td><?php echo $datos["direccion"]; ?></td>
              <td><?php echo $datos["telefono"]; ?></td>
              <td><input type="button" value="Editar" class="btn btn-primary"></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- DataTable -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

  <!-- DataTable Script-->
  <script src="../../js/dataTable.js"></script>


</body>

</html>