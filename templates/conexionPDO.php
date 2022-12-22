<?php
//Clase Conexion
$servidor = "mysql:dbname=exploradores;host=localhost"; //Informacion del server
$usuario = "root"; //Usuario del server
$password = ""; //Contraseña del server

//Validacion de errores
try {
    //Si la conexion es exitosa nos muestra el mensaje
    //Tambien se configura que acepte caracteres acentuados
    $pdo = new PDO($servidor, $usuario, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    echo "Conectado a la DB";

} catch (PDOException $e) {
    //si la conexion no se realizo muestra el mensaje y concatena el error 
    echo "No conectado" . $e->getMessage();
}
