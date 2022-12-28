<?php
//Variavle para guardar el nombre del servidor
$servidor = "localhost";
//Variable para guardar el usuario
$usuario = "root";
//Variable para guardar la clave del gestor de BD
$clave = "";
//Variable para guardar el nombre de la BD
$nombrebd = "exploradores";

//Variable para realizar la conección
$enlace = mysqli_connect($servidor, $usuario, $clave, $nombrebd);

//Si la conexión se realiza o no envia los siguientes mensajes
if ($enlace) {
    //echo "conectado";
} else {
    echo "error";
}
