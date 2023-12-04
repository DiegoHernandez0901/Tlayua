<?php

include 'conectBD.php';

class Auth extends Conexion
{
    public function registrar($usuario, $apellido, $telefono, $correo, $tipoV, $contrasena)
    {
        $conexion = parent::conectar();
        if (empty($apellido)) {
            echo 'es nulo, porque quien sabe';
        } else {
            $sql = 'INSERT INTO `visitantes` (`nombre`, `apellido`, `telefono`, `correo`, `estudiante`, `password`) VALUES (?, ?, ?, ?, ?, ?)';
            $query = $conexion->prepare($sql);
            $query->bind_param('ssssss', $usuario, $apellido, $telefono, $correo, $tipoV, $contrasena);
            return $query->execute();
        }
    }

    public function logear($correo, $contrasena)
    {
        $conexion = parent::conectar();
        $contrasenaExistente = '';
        $sql = "SELECT * FROM visitantes WHERE correo = '$correo' ";
        $respuesta = mysqli_query($conexion, $sql);
        $contrasenaExistente = mysqli_fetch_array($respuesta)['password'];

        if (password_verify($contrasena, $contrasenaExistente)) {
            $_SESSION['usuario'] = $correo;
            return true;
        } else {
            return false;
        }

    }
}
?>