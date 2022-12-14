<?php
class conexion {

    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasena = "123";
    private $conexion;
    private $nombreBaseDatos = "album";

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            return "Falla Conexion Base de Datos <br/>".$e;
        }
    }

    public function ejecutarPruebaConexion($sql) { //  INSERTAR, BORRAR y ACTUALIZAR
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    public function consultarPruebaConexion($sql) { //  CONSULTAR DATOS
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    public function consultarLogin($sql) {  //  CONSULTA CONTANDO
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->columnCount();
    }

}
?>
