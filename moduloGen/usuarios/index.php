<?php
//Incluimos la clase conexión para realizar la siguiente busqueda y llenar la tabal
include '../../templates/conexion.php';
//incluimos los metodos
include 'metodos.php';
//Iniciamos la sesión
session_start();
/*Si la variable de sesión que contiene el ID está vacía
entonces nos regresa al index, esto para evitar que vuelva
hacía atrás después de cerrar sesión
*/
if (empty($_SESSION["id"])) {
    header("Location: ../../login.php");
}
//Realizamos una búsqueda SQL en la tabla usuarios donde mostramos a todos los usuarios del departamento de Exploradors
$consulta = mysqli_query($enlace, "SELECT * from usuarios");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Gestión de Usuarios</title>
    <!-- icono -->
    <link rel="shortcut icon" href="../../img/logo.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../css/foot.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- DataTable CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <style>
        img {
            width: 100px;
        }
    </style>
</head>

<body> <br>
    <!--Navbar-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="../index.php">Opciones</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Gestionar usuarios <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disable" href="../departamentos/index.php" tabindex="-1" aria-disabled="true">Ver premios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disable" href="../../templates/cerrarS.php" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </nav> <br><br><br>

        <!--Inicio del body-->
        <img src="../../img/logo.png" class="rounded mx-auto d-block">
        <h2 class="text-center text-primary">Gestión de usuarios <br> (Administrador general)</h2> <br>

        <div class="container">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <!-- Botón modal para agregar nuevos usuarios-->
                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modal">
                    Agregar explorador
                </button>

                <!--Inicio del formulario con "multipart/form-data" para poder incorporar las fotos -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal" id="modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--Título del modal-->
                                    <h5 class="modal-title">Gestión de Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-row">
                                        <!--Input para el ID (oculto para el usuario)-->
                                        <input type="hidden" name="id">

                                        <!--Input para el usuario-->
                                        <div class="col-md-6">
                                            <label>Usuario</label>
                                            <input type="text" name="user" class="form-control" placeholder="Usuario del Explorador">
                                        </div>

                                        <!--Input para la contraseña-->
                                        <div class="col-md-6">
                                            <Label>Contraseña</Label>
                                            <input type="text" name="pass" class="form-control" placeholder="Contraseña">
                                        </div>

                                        <!--Input para la foto de perfil-->
                                        <br>
                                        <div class="col-md-6">
                                            <Label>Foto</Label>
                                            <input type="file" accept="image/jpg" name="foto" class="form-control">
                                        </div>

                                        <!--Input para el departamento-->
                                        <br>
                                        <div class="col-md-6">
                                            <Label>Departamento</Label>
                                            <select name="departamento" id="" class="form-control">
                                                <option value="Navegantes">Navegantes</option>
                                                <option value="Pioneros">Pioneros</option>
                                                <option value="Seguidores">Seguidores</option>
                                                <option value="Exploradores">Exploradores</option>
                                            </select>
                                        </div>

                                        <!--Input para el nombre del Explorador -->
                                        <br>
                                        <div class="col-md-12">
                                            <Label>Nombre</Label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del Explorador">
                                        </div>

                                        <!--Input para la direccion -->
                                        <br>
                                        <div class="col-md-12">
                                            <Label>Direccion</Label>
                                            <input type="text" name="direccion" class="form-control" placeholder="Direccion del Explorador">
                                        </div>

                                        <!--Input para el telefono-->
                                        <br>
                                        <div class="col-md-6">
                                            <Label>Telefono</Label>
                                            <input type="tel" name="telefono" class="form-control" placeholder="Telefono">
                                        </div>

                                        <!--Input para la fecha de nacimiento -->
                                        <br>
                                        <div class="col-md-6">
                                            <Label>Fecha de nacimiento</Label>
                                            <input type="date" name="fechaNac" class="form-control">
                                        </div>

                                        <!--Input para el nombre del padre -->
                                        <br>
                                        <div class="col-md-6">
                                            <Label>Padre</Label>
                                            <input type="text" name="padre" class="form-control" placeholder="Nombre del padre">
                                        </div>

                                        <!--Input para el nombre de la madre-->
                                        <br>
                                        <div class="col-md-6">
                                            <Label>Madre</Label>
                                            <input type="text" name="madre" class="form-control" placeholder="Nombre de la madre">
                                        </div>

                                        <!--Input para el departamento definido en "Exploradors"-->
                                        <input type="hidden" name="departamentoL" id="" value="Exploradores" readonly>

                                    </div>
                                </div>
                                <!--Footer del modal -->
                                <div class="modal-footer">
                                    <!--Botón para agregar -->
                                    <button value="btnAgregar" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                                    <!--Botón para cerrar el formulario -->
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <br>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <!-- Botón modal para agregar nuevos usuarios-->
                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#administrador">
                    Agregar administrador departamento
                </button>

                <!--Inicio del formulario con "multipart/form-data" para poder incorporar las fotos -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal" id="administrador" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--Título del modal-->
                                    <h5 class="modal-title">Gestión de administradores</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-row">
                                        <!--Input para el ID (oculto para el usuario)-->
                                        <input type="hidden" name="id">

                                        <!--Input para el usuario-->
                                        <div class="col-md-6">
                                            <label>Usuario</label>
                                            <input type="text" name="user" class="form-control" placeholder="Usuario del líder">
                                        </div>

                                        <!--Input para la contraseña-->
                                        <div class="col-md-6">
                                            <Label>Contraseña</Label>
                                            <input type="text" name="pass" class="form-control" placeholder="Contraseña">
                                        </div>

                                        <!--Input para la foto de perfil-->
                                        <br>
                                        <div class="col-md-6">
                                            <Label>Foto</Label>
                                            <input type="file" accept="image/jpg" name="foto" class="form-control">
                                        </div>

                                        <!--Input para la fecha de nacimiento -->
                                        <br>
                                        <div class="col-md-6">
                                            <Label>Fecha de nacimiento</Label>
                                            <input type="date" name="fechaNac" class="form-control">
                                        </div>

                                        <!--Input para el nombre del Explorador -->
                                        <br>
                                        <div class="col-md-12">
                                            <Label>Nombre</Label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre del líder">
                                        </div>

                                        <!--Input para la direccion -->
                                        <br>
                                        <div class="col-md-12">
                                            <Label>Departamento</Label>
                                            <select name="departamento" id="" class="form-control">
                                                <option value="administradorNav">Navegantes</option>
                                                <option value="administradorPi">Pioneros</option>
                                                <option value="administradorSe">Seguidores</option>
                                                <option value="administradorEx">Exploradores</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer del modal -->
                                <div class="modal-footer">
                                    <!--Botón para agregar -->
                                    <button value="btnAgregarL" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                                    <!--Botón para cerrar el formulario -->
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-xs-12 col-md-12 col-xl-12">
                <br>
                <!--Tabla para presentar los usuarios -->
                <table class="table table-striped table-bordered table-responsive" id="table">
                    <!--Encabezado de la tabla-->
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Departamento</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <!--Cuerpo de la tabla-->
                    <tbody>
                        <?php
                        //Mostramos los datos que coincidan con la consulta SQL realizada
                        while ($datos = mysqli_fetch_array($consulta)) { ?>
                            <tr>
                                <!--Mostramos la foto -->
                                <td><img class="img-fluid img-thumbnail" style="width: 100px" src="../../img/usuarios/<?php echo $datos["foto"] ?>" alt=""></td>
                                <!--Mostramos el usuario -->
                                <td><?php echo $datos["user"]; ?></td>
                                <!--Mostramos el nombre -->
                                <td><?php echo $datos["nombre"]; ?></td>
                                <!--Mostramos la direccion -->
                                <td><?php echo $datos["direccion"]; ?></td>
                                <!--Mostramos el telefono -->
                                <td><?php echo $datos["telefono"]; ?></td>
                                <td><?php echo $datos["departamento"]; ?></td>

                                <td>
                                    <form action="Actualizar.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $datos["id"]; ?>">
                                        <!--Botón para ir a editar-->
                                        <input type="submit" value="Editar" class="btn btn-primary">
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>

    <?php include '../../templates/foot2.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- DataTable -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <!-- DataTable Script para español-->
    <script src="../../js/dataTable.js"></script>

</body>

</html>