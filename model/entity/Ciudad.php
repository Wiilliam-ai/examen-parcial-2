<?php

class Ciudad{
    private $id_ciudad;
    private $nombre_ciudad;

    /**
     * Get the value of id_ciudad
     */ 
    public function getId_ciudad()
    {
        return $this->id_ciudad;
    }

    /**
     * Set the value of id_ciudad
     *
     * @return  self
     */ 
    public function setId_ciudad($id_ciudad)
    {
        $this->id_ciudad = $id_ciudad;

        return $this;
    }

    /**
     * Get the value of nombre_ciudad
     */ 
    public function getNombre_ciudad()
    {
        return $this->nombre_ciudad;
    }

    /**
     * Set the value of nombre_ciudad
     *
     * @return  self
     */ 
    public function setNombre_ciudad($nombre_ciudad)
    {
        $this->nombre_ciudad = $nombre_ciudad;

        return $this;
    }
}