<?php

class CiudadDao
{

    public $base;

    public function __construct()
    {
        $this->base = Conexion::conectar();
    }

    public function select()
    {
        $sql = "SELECT * FROM Ciudad";
        $tabla = $this->base->query($sql);
        $tabla->execute();
        $resultado = $tabla->fetchAll(PDO::FETCH_OBJ);

        return $resultado;
    }
}
