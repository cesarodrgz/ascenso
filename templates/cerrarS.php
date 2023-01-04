<?php
//Traemos la sesión que está iniciada
@session_start();
//Cerramos la sesión iniciada
session_destroy();
//Al destruir la sesión enviamos al usuario al index
header("Location: ../index.php");
