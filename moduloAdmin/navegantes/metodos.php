<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN SweetAlert 1-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php

    //Asignamos el contenido de los inputs de texto en variables
    //Validamos que no esten vacios y si lo estan no se coloca nada
    $id = (isset($_POST['id'])) ? $_POST['id'] : ""; //Variable ID
    $user = (isset($_POST['user'])) ? $_POST['user'] : ""; //Variable del correo o usuario
    $pass = (isset($_POST['pass'])) ? $_POST['pass'] : ""; //Variable de la contraseña
    $foto = (isset($_FILES['foto']["name"])) ? $_FILES['foto'] : ""; //Variable de la foto
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : ""; //Variable del nombre
    $direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : ""; //Variable del dirección
    $telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : ""; //Variable del telefono
    $fechaNac = (isset($_POST['fechaNac'])) ? $_POST['fechaNac'] : ""; //Variable de la fecha de nacimiento
    $padre = (isset($_POST['padre'])) ? $_POST['padre'] : ""; //Variable nombre del padre
    $madre = (isset($_POST['madre'])) ? $_POST['madre'] : ""; //Variable nombre de la madre
    $departamento = (isset($_POST['departamento'])) ? $_POST['departamento'] : ""; //Variable del departamento


    //Validamos los botones
    $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

    /*Inicializamos el botón de agregar en verdadero
    mientras que los de modificar, eliminar y cancelar los desactivamos*/
    $accionAgregar = "";

    //Incluimos la conexion
    include '../../templates/conexionPDO.php';

    //Iniciamos un switch case
    switch ($accion) {
            //Cuando el caso sea de agregar
        case 'btnAgregar':

            //Prepara la sentencia SQL que se utilizará para agregar la información de los usuarios
            //No agregamos el ID porque este la BBDD lo genera automaticamente
            $sentencia = $pdo->prepare("INSERT INTO usuarios (user, pass, foto, nombre, direccion, telefono, fechaNac, padre, madre, departamento) 
        VALUES (:user, :pass, :foto, :nombre, :direccion, :telefono, :fechaNac, :padre, :madre, :departamento)");

            //Obtenemos los valores de los txt
            $sentencia->bindParam(':user', $user); //Usuario
            $sentencia->bindParam(':pass', $pass); //Contraseña

            //ANTES DE AGREGAR LA FOTO//

            //Obtenemos la fecha actual
            $fecha = new DateTime();
            //Definimos que la variable "nombreArchivo" va contener la fecha y le concatenamos el nombre de la foto
            //Si no se selecciona foto colocamos una imagen por defecto en este caso "imagen.png"
            $nombreArchivo = ($foto != "") ? $fecha->getTimestamp() . "_" . $_FILES["foto"]["name"] : "imagen.png";

            //Obtenemos el nombre temporal de la foto
            $tmpFoto = $_FILES["foto"]["tmp_name"];

            //Si el usuario selecciona una foto entonces
            if ($tmpFoto) {
                //Se mueve la foto a la carpeta predeterminada y le concatenamos la variable "nombreArchivo" para que se guarde con un nuevo nombre con la fecha y hora
                move_uploaded_file($tmpFoto, "img/" . $nombreArchivo);
            }

            $sentencia->bindParam(':foto', $nombreArchivo); //Foto
            $sentencia->bindParam(':nombre', $nombre); //Nombre
            $sentencia->bindParam(':direccion', $direccion); //Dirección
            $sentencia->bindParam(':telefono', $telefono); //Telefono
            $sentencia->bindParam(':fechaNac', $fechaNac); //Fecha de nacimiento
            $sentencia->bindParam(':padre', $padre); //Nombre del padre
            $sentencia->bindParam(':madre', $madre); //Nombre de la madre
            $sentencia->bindParam(':departamento', $departamento); //Departamento
            $sentencia->execute(); //Ejecutamos la variable sentencia

            //Mensajes para el administrador de Navegantes
            //Mensajes para el administrador de Navegantes
            if (!$sentencia) {
    ?>
                <script>
                    //Si el usuario no se agrego enviamos el siguiente mensaje
                    Swal.fire(
                        'Ups.. Algo salió mal',
                        'Presiona OK para continuar',
                        'error'
                    ).then(function() {
                        window.location = "ActualizarNavegante.php";
                    });
                </script>
            <?php
            } else { ?>
                <script>
                    Swal.fire(
                        '¡Buen trabajo!',
                        'Usuario agregado correctamente',
                        'success'
                    ).then(function() {
                        window.location = "administrarusuario.php";
                    });
                </script>
            <?php
            }
            break;
            break; //Terminamos el caso

        case 'btnModificar':

            $sentencia = $pdo->prepare("UPDATE usuarios SET
                user=:user,
                pass=:pass,
                nombre=:nombre,
                direccion=:direccion,
                telefono=:telefono,
                fechaNac=:fechaNac,
                padre=:padre,
                madre=:madre WHERE id=:id");

            //Obtenemos los valores de los txt
            $sentencia->bindParam(':id', $id); //Usuario 1
            $sentencia->bindParam(':user', $user); //Usuario 1
            $sentencia->bindParam(':pass', $pass); //Contraseña 2
            $sentencia->bindParam(':nombre', $nombre); //Nombre 4
            $sentencia->bindParam(':direccion', $direccion); //Dirección 5
            $sentencia->bindParam(':telefono', $telefono); //Telefono 6
            $sentencia->bindParam(':fechaNac', $fechaNac); //Fecha de nacimiento 7
            $sentencia->bindParam(':padre', $padre); //Nombre del padre 8
            $sentencia->bindParam(':madre', $madre); //Nombre de la madre 9
            $sentencia->execute(); //Ejecutamos la variable sentencia

            //Obtenemos la fecha actual
            $fecha = new DateTime();
            //Definimos que la variable "nombreArchivo" va contener la fecha y le concatenamos el nombre de la foto
            //Si no se selecciona foto colocamos una imagen por defecto en este caso "imagen.png"
            $nombreArchivo = ($foto != "") ? $fecha->getTimestamp() . "_" . $_FILES["foto"]["name"] : "imagen.png";

            //Obtenemos el nombre temporal de la foto
            $tmpFoto = $_FILES["foto"]["tmp_name"];

            //Si el usuario selecciona una foto entonces
            if ($tmpFoto != "") {
                //Se mueve la foto a la carpeta predeterminada y le concatenamos la variable "nombreArchivo" para que se guarde con un nuevo nombre con la fecha y hora
                move_uploaded_file($tmpFoto, "img/" . $nombreArchivo);

                $sentencia = $pdo->prepare("SELECT foto FROM usuarios WHERE id=:id");
                //Obtenemos los valores de los txt
                $sentencia->bindParam(':id', $id);
                $sentencia->execute();
                $busqueda = $sentencia->fetch(PDO::FETCH_LAZY);

                if (isset($busqueda['foto'])) {
                    if (file_exists("img/" . $busqueda["foto"])) {
                        if ($busqueda['foto'] != "imagen.png") {
                            unlink("img/" . $busqueda["foto"]);
                        }
                    }
                }

                $sentencia = $pdo->prepare("UPDATE usuarios SET
                foto=:foto WHERE id=:id");

                $sentencia->bindParam(':foto', $nombreArchivo); //Nombre del padre 8
                $sentencia->bindParam(':id', $id); //Nombre de la madre 9
                $sentencia->execute(); //Ejecutamos la variable sentencia

            }
            //Mensajes para el administrador de Navegantes
            if (!$sentencia) {
            ?>
                <script>
                    //Si el usuario no se agrego enviamos el siguiente mensaje
                    Swal.fire(
                        'Ups.. Algo salió mal',
                        'Presiona OK para continuar',
                        'error'
                    ).then(function() {
                        window.location = "ActualizarNavegante.php";
                    });
                </script>
            <?php
            } else { ?>
                <script>
                    Swal.fire(
                        '¡Buen trabajo!',
                        'Perfil actualizado correctamente',
                        'success'
                    ).then(function() {
                        window.location = "administrarusuario.php";
                    });
                </script>
    <?php
            }
            break;
    }
    ?>
</body>

</html>