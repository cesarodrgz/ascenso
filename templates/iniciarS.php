<?php
//Incluimos la clase conexión para utilizar la base de datos
include 'conexion.php';

//Obtenemos los valores de los inputs
$correo = $_POST['user']; //input del correo que llamaremos usuario
$contra = $_POST['pass']; //input de la contraseña

//Consulta SQL que usaremos para buscar en la base de datos el usuario
$consulta = "SELECT user, pass, departamento FROM usuarios WHERE user = '" . $correo . "' and pass = '" . $contra . "' and departamento = 'Navegantes'";
$resultado = mysqli_query($enlace, $consulta);

//Obtenemos el resultados mediante las filas
$filas = mysqli_num_rows($resultado);

/////////////////VALIDACIÓN DE LOS LOGIN/////////////////

//Si existe un número mayor que cero, enviamos al usuario a la web de opciones
if ($filas > 0) {
    header("location:../modulosUsuarios/navegantes/navegantes.php");
    //Si el usuario no esta lo enviamos al index nuevamente, es decir el usuario no existe.
} elseif ($filas < 0) {
    header("location:index.php");
} else {
    /*Comprobamos que el correo y contraseña están o no 
    en la tabla de usuarios*/
    $consulta = "SELECT user, pass, departamento FROM usuarios WHERE user = '" . $correo . "' and pass = '" . $contra . "' and departamento = 'administradorNav'";
    $resultado = mysqli_query($enlace, $consulta);

    //Si hay un resultado lo mandamos al index administrativo sino al index general
    $filas = mysqli_num_rows($resultado);
    if ($filas > 0) {
        header("location:../moduloAdmin/navegantes/opciones.php");
    } elseif ($filas < 0) {
        header("location:index.php");
    } else {
        /*Comprobamos que el correo y contraseña están o no 
        en la tabla de usuarios*/
        $consulta = "SELECT user, pass, departamento FROM usuarios WHERE user = '" . $correo . "' and pass = '" . $contra . "' and departamento = 'administradorEx'";
        $resultado = mysqli_query($enlace, $consulta);

        //Si hay un resultado lo mandamos al index administrativo sino al index general
        $filas = mysqli_num_rows($resultado);
        if ($filas > 0) {
            header("location:../moduloAdmin/exploradores/opciones.php");
        } elseif ($filas < 0) {
            header("location:../index.php");
        } else {
            # code...
        }
    }
}

//Iniciamos una sesión (esta nos sirve para mantener uno o varios datos a la vez del usuario ingresado)
session_start();
//En este caso mantenemos el correo del usuario
$_SESSION['user'] = $_POST['user'];
