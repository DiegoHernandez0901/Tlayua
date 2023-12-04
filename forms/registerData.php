<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'auth.php';

$usuario = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
$estudiante = $_POST['opcion'];

$Auth = new Auth();

if (isset($estudiante)) {
    $opcionSeleccionada = $estudiante;
    if ($opcionSeleccionada == 'si') {
        $tipoV = 1;
    } else if ($opcionSeleccionada == 'no') {
        $tipoV = 0;
    }

} else {
    echo 'No se seleccionó ninguna opción.';
}

if ($Auth->registrar($usuario, $apellido, $telefono, $correo, $tipoV, $contrasena)) {
    header("location:../login.php");
} else {
    echo 'no fue posible registrarse';
}


?>