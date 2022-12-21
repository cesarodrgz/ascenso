<!doctype html>
<html lang="en">

<head>
  <title>Administrar Usuarios - Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-xl-12">
        <h1 class="text-center">
          Administrar Usuarios
        </h1>
        <br>
        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal">
          Agregar Usuario
        </button>

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
                <form action="" method="post">
                  <input type="hidden" name="id">

                  <div class="col-md-12">
                    <label>Usuario</label>
                  <input type="text" name="" class="form-control" placeholder="Usuario del navegante">
                  </div>
                  
                  <div class="col-md-12">
                    <Label>Contraseña</Label>
                  <input type="text" name="" class="form-control" placeholder="Contraseña">
                  </div>
                  

                  <br>
                  <div class="col-md-12">
                  <Label>Foto de perfil</Label>
                  <input type="file" name="" class="form-control">
                  </div>
                  
                  <br>
                  <div class="col-md-12">
                  <Label>Nombre</Label>
                  <input type="text" name="" class="form-control" placeholder="Nombre del navegante">
                  </div>

                  <br>
                  <div class="col-md-12">
                  <Label>Direccion</Label>
                  <input type="text" name="" class="form-control" placeholder="Direccion del navegante">
                  </div>

                  <br>
                  <div class="col-md-6">
                  <Label>Telefono</Label>
                  <input type="tel" name="" class="form-control" placeholder="Telefono">
                  </div>

                  <br>
                  <div class="col-md-6">
                  <Label>Fecha de nacimiento</Label>
                  <input type="date" class="form-control" placeholder="">
                  </div>

                  <br>
                  <div class="col-md-12">
                  <Label>Padre</Label>
                  <input type="text" class="form-control" placeholder="Nombre del padre">
                  </div>

                  <br>
                  <div class="col-md-12">
                  <Label>Madre</Label>
                  <input type="text" class="form-control" placeholder="Nombre de la madre">
                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-12 col-xl-12">
        <br>
        <table class="table" id="usuarios">
          <thead>
            <tr>
              <th>ID</th>
              <th>Usuario</th>
              <th>Nombre</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>julio@gmail.com</td>
              <td>Julio Chica</td>
              <td><img src="../../img/plus-circle.svg+ " alt=""></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
      <script src="../../js/dataTable.js"></script>
      <script>
        $(document).ready(function() {
          $('#usuarios').DataTable();
        });
      </script>
</body>

</html>