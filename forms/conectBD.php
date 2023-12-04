<?php
//Conexión a la base de datos destino
class Conexion
{
    public $servidor = 'localhost';
    public $usuario = 'ana';
    public $contrasena = 'anabananayosmar';
    public $bd = 'pruebas';
    public function conectar()
    {
        return mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->contrasena,
            $this->bd
        );
    }
}
?>