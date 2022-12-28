<?php

$departamento = "Navegantes";

//Asignamos el contenido de los inputs de texto en variables
//Validamos que no esten vacios y si lo estan no se coloca nada
$id = (isset($_POST['id'])) ? $_POST['id'] : ""; //Variable ID
$user = (isset($_POST['user'])) ? $_POST['user'] : ""; //Variable del correo o usuario
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : ""; //Variable de la contraseña
$foto = (isset($_FILES['foto']["name"])) ? $_FILES['foto'] : "";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : "";
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : "";
$fechaNac = (isset($_POST['fechaNac'])) ? $_POST['fechaNac'] : "";
$padre = (isset($_POST['padre'])) ? $_POST['padre'] : "";
$madre = (isset($_POST['madre'])) ? $_POST['madre'] : "";
$departamento = (isset($_POST['departamento'])) ? $_POST['departamento'] : "";


//Validamos los botones
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

/*Inicializamos el botón de agregar en verdadero
mientras que los de modificar, eliminar y cancelar los desactivamos*/
$accionAgregar = "";
$accionModificar = $accionEliminar = $accionCancelar = "Disabled";

//No mostramos el modal
$mostrarModal = false;

//Incluimos la conexion
include '../../templates/conexionPDO.php';

switch ($accion) {
    case 'btnAgregar':

        $sentencia = $pdo->prepare("INSERT INTO usuarios (user, pass, foto, nombre, direccion, telefono, fechaNac, padre, madre, departamento) 
        VALUES (:user, :pass, :foto, :nombre, :direccion, :telefono, :fechaNac, :padre, :madre, :departamento)");

        //Obtenemos los valores de los txt
        $sentencia->bindParam(':user', $user); //1
        $sentencia->bindParam(':pass', $pass); //2

        $fecha = new DateTime();
        $nombreArchivo = ($foto!="")?$fecha->getTimestamp()."_".$_FILES["foto"]["name"]:"imagen.png";

        $tmpFoto = $_FILES["foto"]["tmp_name"];

        if ($tmpFoto) {
            move_uploaded_file($tmpFoto, "../../usuarios/".$nombreArchivo);

        }

        $sentencia->bindParam(':foto', $nombreArchivo); //3
        $sentencia->bindParam(':nombre', $nombre); //4
        $sentencia->bindParam(':direccion', $direccion);//5
        $sentencia->bindParam(':telefono', $telefono); //6
        $sentencia->bindParam(':fechaNac', $fechaNac); //7
        $sentencia->bindParam(':padre', $padre); //8
        $sentencia->bindParam(':madre', $madre); //9
        $sentencia->bindParam(':departamento', $departamento); //10
        $sentencia->execute();
        
        header('Location: administrarusuario.php'); //Redireccionamos al inicio
        break;
}
