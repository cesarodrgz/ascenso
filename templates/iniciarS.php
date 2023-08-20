<?php
//Incluimos la clase conexión para utilizar la base de datos
include 'conexion.php';

//Obtenemos los valores de los inputs
$correo = $_POST['user']; //input del correo que llamaremos usuario
$contra = $_POST['pass']; //input de la contraseña

/////////////////VALIDACIÓN DE LOS LOGIN/////////////////

/////////VALIDACIÓN NAVEGANTES/////////

//Consulta SQL que usaremos para buscar en la base de datos el usuario
$consulta = "SELECT user, pass, departamento FROM usuarios WHERE user = '" . $correo . "' and pass = '" . $contra . "' and departamento = 'Navegantes'";
$resultado = mysqli_query($enlace, $consulta);

//Obtenemos el resultados mediante las filas
$filas = mysqli_num_rows($resultado);

//Si el usuario existe lo manda al modulo correspondiente.
if ($filas > 0) {
    header("location:../modulosUsuarios/navegantes/navegantes.php");
} else {
    /////////VALIDACIÓN ADMIN NAVEGANTES/////////

    //Consulta SQL que usaremos para buscar en la base de datos el usuario
    $consulta = "SELECT user, pass, departamento FROM usuarios WHERE user = '" . $correo . "' and pass = '" . $contra . "' and departamento = 'administradorNav'";
    $resultado = mysqli_query($enlace, $consulta);

    //Obtenemos el resultados mediante las filas
    $filas = mysqli_num_rows($resultado);

    //Si el usuario existe lo manda al modulo correspondiente.
    if ($filas > 0) {
        header("location:../moduloAdmin/navegantes/opciones.php");
    } else {

        /////////VALIDACIÓN EXPLORADORES/////////

        //Consulta SQL que usaremos para buscar en la base de datos el usuario
        $consulta = "SELECT user, pass, departamento FROM usuarios WHERE user = '" . $correo . "' and pass = '" . $contra . "' and departamento = 'Exploradores'";
        $resultado = mysqli_query($enlace, $consulta);

        //Obtenemos el resultados mediante las filas
        $filas = mysqli_num_rows($resultado);

        //Si el usuario existe lo manda al modulo correspondiente.
        if ($filas > 0) {
            header("location:../modulosUsuarios/exploradores/exploradores.php");
        } else {
            /////////VALIDACIÓN ADMIN NAVEGANTES/////////

            //Consulta SQL que usaremos para buscar en la base de datos el usuario
            $consulta = "SELECT user, pass, departamento FROM usuarios WHERE user = '" . $correo . "' and pass = '" . $contra . "' and departamento = 'administradorEx'";
            $resultado = mysqli_query($enlace, $consulta);

            //Obtenemos el resultados mediante las filas
            $filas = mysqli_num_rows($resultado);

            //Si el usuario existe lo manda al modulo correspondiente.
            if ($filas > 0) {
                header("location:../moduloAdmin/exploradores/opciones.php");
            } else {
                /////////VALIDACIÓN ADMIN GENERAL/////////
                if ($correo == "admin-general@ldj.com" && $contra == "12345") {
                    header("location: ../moduloGen/index.php");
                } else {
                    header("location:baduser.php");
                }
            }
        }
    }
}





//Iniciamos una sesión (esta nos sirve para mantener uno o varios datos a la vez del usuario ingresado)
session_start();
//En este caso mantenemos el correo del usuario
$_SESSION['user'] = $_POST['user'];
