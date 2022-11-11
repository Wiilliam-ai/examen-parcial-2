<?php 

class Museo{
    private $id_museo;
    private $nombre;
    private $direccion;
    private $ciudad;
    private $fecha;
    private $desripcion;
    private $estrellas;

    /**
     * Get the value of id_museo
     */ 
    public function getId_museo()
    {
        return $this->id_museo;
    }

    /**
     * Set the value of id_museo
     *
     * @return  self
     */ 
    public function setId_museo($id_museo)
    {
        $this->id_museo = $id_museo;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of desripcion
     */ 
    public function getDesripcion()
    {
        return $this->desripcion;
    }

    /**
     * Set the value of desripcion
     *
     * @return  self
     */ 
    public function setDesripcion($desripcion)
    {
        $this->desripcion = $desripcion;

        return $this;
    }

    /**
     * Get the value of estrellas
     */ 
    public function getEstrellas()
    {
        return $this->estrellas;
    }

    /**
     * Set the value of estrellas
     *
     * @return  self
     */ 
    public function setEstrellas($estrellas)
    {
        $this->estrellas = $estrellas;

        return $this;
    }
}