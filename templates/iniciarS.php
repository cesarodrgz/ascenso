<?php
//Creamos la conexión a la BBDD
$conexion = new mysqli("localhost", "root", "", "exploradores");
//Iniciamos la sesión
session_start();
/*Si cuando se presiona el botón de entrar los campos de usuario y contraseña no están vacíos
Se procede a realizar las validaciones siguientes:
*/
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        //Almacenamos el usuario
        $usuario = $_POST["usuario"];
        //Almacenamos la contraseña
        $password = $_POST["password"];
        //Verificamos si el usuario que ingresa es administrador del dept. de navegantes
        $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'administradorNav'");
        //Si el usuario es administrador de navegantes
        if ($datos = $sql->fetch_object()) {
            /*Guardamos el id en una variable de sesión
            Dicho ID corresponde a la búsqueda en la BD.*/
            $_SESSION["id"] = $datos->id;
            /*Guardamos el usuario en una variable de sesión
            Dicho usuario corresponde a la búsqueda en la BD.*/
            $_SESSION["user"] = $datos->user;
            /*Guardamos el nombre en una variable de sesión
            Dicho ID corresponde a la búsqueda en la BD.*/
            $_SESSION["nombre"] = $datos->nombre;
            //Se hace la redirección correspondiente
            header("location: moduloAdmin/navegantes/opciones.php");
        } else {
            //Verificamos si el usuario que ingresa es usuario del dept. de Navegantes
            $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'Navegantes'");
            //Si el usuario es usuario de navegantes
            if ($datos = $sql->fetch_object()) {
                /*Guardamos el id en una variable de sesión
                Dicho ID corresponde a la búsqueda en la BD.*/
                $_SESSION["id"] = $datos->id;
                /*Guardamos el usuario en una variable de sesión
                Dicho usuario corresponde a la búsqueda en la BD.*/
                $_SESSION["user"] = $datos->user;
                /*Guardamos el nombre en una variable de sesión
                Dicho nombre corresponde a la búsqueda en la BD.*/
                $_SESSION["nombre"] = $datos->nombre;
                //Se hace la redirección correspondiente
                header("location: modulosUsuarios/navegantes/navegantes.php");
            } else {
                //Verificamos si el usuario que ingresa es administrador del dept. de Exploradores
                $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'administradorEx'");
                //Si el usuario es administrador de Exploradores
                if ($datos = $sql->fetch_object()) {
                    /*Guardamos el id en una variable de sesión
                    Dicho ID corresponde a la búsqueda en la BD.*/
                    $_SESSION["id"] = $datos->id;
                    /*Guardamos el usuario en una variable de sesión
                    Dicho usuario corresponde a la búsqueda en la BD.*/
                    $_SESSION["user"] = $datos->user;
                    /*Guardamos el nombre en una variable de sesión
                    Dicho nombre corresponde a la búsqueda en la BD.*/
                    $_SESSION["nombre"] = $datos->nombre;
                    //Se hace la redirección correspondiente
                    header("location: moduloAdmin/exploradores/opciones.php");
                } else {
                    //Verificamos si el usuario que ingresa es usuario del dept. de Exploradores
                    $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'Exploradores'");
                    //Si el usuario es usuario de Exploradores
                    if ($datos = $sql->fetch_object()) {
                        /*Guardamos el id en una variable de sesión
                        Dicho ID corresponde a la búsqueda en la BD.*/
                        $_SESSION["id"] = $datos->id;
                        /*Guardamos el usuario en una variable de sesión
                        Dicho usuario corresponde a la búsqueda en la BD.*/
                        $_SESSION["user"] = $datos->user;
                        /*Guardamos el nombre en una variable de sesión
                        Dicho nombre corresponde a la búsqueda en la BD.*/
                        $_SESSION["nombre"] = $datos->nombre;
                        //Se hace la redirección correspondiente
                        header("location: modulosUsuarios/exploradores/exploradores.php");
                    } else {
                        //Verificamos si el usuario que ingresa es administrador del dept. de seguidores
                        $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'administradorSe'");
                        //Si el usuario es administrador de seguidores
                        if ($datos = $sql->fetch_object()) {
                            /*Guardamos el id en una variable de sesión
                            Dicho ID corresponde a la búsqueda en la BD.*/
                            $_SESSION["id"] = $datos->id;
                            /*Guardamos el usuario en una variable de sesión
                            Dicho usuario corresponde a la búsqueda en la BD.*/
                            $_SESSION["user"] = $datos->user;
                            /*Guardamos el nombre en una variable de sesión
                            Dicho nombre corresponde a la búsqueda en la BD.*/
                            $_SESSION["nombre"] = $datos->nombre;
                            //Se hace la redirección correspondiente
                            header("location: moduloAdmin/seguidores/index.php");
                        } else {
                            //Verificamos si el usuario que ingresa es un usuario del dept. de seguidores
                            $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'Seguidores'");
                            //Si el usuario es usuario de seguidores
                            if ($datos = $sql->fetch_object()) {
                                /*Guardamos el id en una variable de sesión
                                Dicho ID corresponde a la búsqueda en la BD.*/
                                $_SESSION["id"] = $datos->id;
                                /*Guardamos el usuario en una variable de sesión
                                Dicho usuario corresponde a la búsqueda en la BD.*/
                                $_SESSION["user"] = $datos->user;
                                /*Guardamos el nombre en una variable de sesión
                                Dicho nombre corresponde a la búsqueda en la BD.*/
                                $_SESSION["nombre"] = $datos->nombre;
                                //Se hace la redirección correspondiente
                                header("location: modulosUsuarios/seguidores/index.php");
                            } else {
                                //Verificamos si el usuario que ingresa es el administrador general
                                $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'administradorGe'");
                                //Si el usuario es el administrador general
                                if ($datos = $sql->fetch_object()) {
                                    /*Guardamos el id en una variable de sesión
                                    Dicho ID corresponde a la búsqueda en la BD.*/
                                    $_SESSION["id"] = $datos->id;
                                    /*Guardamos el usuario en una variable de sesión
                                    Dicho usuario corresponde a la búsqueda en la BD.*/
                                    $_SESSION["user"] = $datos->user;
                                    /*Guardamos el nombre en una variable de sesión
                                    Dicho nombre corresponde a la búsqueda en la BD.*/
                                    $_SESSION["nombre"] = $datos->nombre;
                                    //Se hace la redirección correspondiente
                                    header("location: moduloGen/index.php");
                                } else {
                                    //Verificamos si el usuario que ingresa es el administrador general
                                    $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'administradorPi'");
                                    //Si el usuario es el administrador general
                                    if ($datos = $sql->fetch_object()) {
                                        /*Guardamos el id en una variable de sesión
                                    Dicho ID corresponde a la búsqueda en la BD.*/
                                        $_SESSION["id"] = $datos->id;
                                        /*Guardamos el usuario en una variable de sesión
                                    Dicho usuario corresponde a la búsqueda en la BD.*/
                                        $_SESSION["user"] = $datos->user;
                                        /*Guardamos el nombre en una variable de sesión
                                    Dicho nombre corresponde a la búsqueda en la BD.*/
                                        $_SESSION["nombre"] = $datos->nombre;
                                        //Se hace la redirección correspondiente
                                        header("location: moduloAdmin/pioneros/index.php");
                                    } else {
                                        //Verificamos si el usuario que ingresa es el administrador general
                                        $sql = $conexion->query("SELECT * FROM usuarios WHERE user = '$usuario' and pass = '$password' and departamento = 'pioneros'");
                                        //Si el usuario es el administrador general
                                        if ($datos = $sql->fetch_object()) {
                                            /*Guardamos el id en una variable de sesión
                                    Dicho ID corresponde a la búsqueda en la BD.*/
                                            $_SESSION["id"] = $datos->id;
                                            /*Guardamos el usuario en una variable de sesión
                                    Dicho usuario corresponde a la búsqueda en la BD.*/
                                            $_SESSION["user"] = $datos->user;
                                            /*Guardamos el nombre en una variable de sesión
                                    Dicho nombre corresponde a la búsqueda en la BD.*/
                                            $_SESSION["nombre"] = $datos->nombre;
                                            //Se hace la redirección correspondiente
                                            header("location: modulosUsuarios/pioneros/index.php");
                                        } else {
                                            //Si los datos ingresados no son iguales a los de la BD se muestra el mensaje
                                            echo "<div class='alert alert-danger text-center'>Usuario o contraseña incorrectos</div>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    } else {
        //Si los campos quedan vacíos se muestra el siguiente mensaje
        echo "<div class='alert alert-warning'>Campos vacíos</div>";
    }
}
