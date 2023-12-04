<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'auth.php';

$correo = $_POST['correo'];
$contrasena = $_POST['passwd'];

$Auth = new Auth();

if ($Auth->logear($correo, $contrasena)) {
    header("location:../museoV/principal.php");
} else {
    echo 'no se puedo ingresar';
}

?>