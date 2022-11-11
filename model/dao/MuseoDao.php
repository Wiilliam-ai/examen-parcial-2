<?php

require "Conexion.php";

class MuseoDao{

    public $base;

    public function __construct(){
        $this->base = Conexion::conectar();
    }

    public function select($id = 0){
        if ($id>0){
            $sql="SELECT * FROM Museo WHERE id_museo=?";
            $tabla=$this->base->prepare($sql);
            $tabla->bindParam(1,$id);
            $tabla->execute();
            $resultado=$tabla->fetch(PDO::FETCH_OBJ);
        }else{
            $sql="SELECT * FROM Museo";
            $tabla=$this->base->query($sql);
            $tabla->execute();
            $resultado=$tabla->fetchAll(PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function insert($museo){
        $sql = "INSERT INTO museo(nombre_museo,direccion,id_ciudad,
                fecha_fundacion,descripcion,estrellas) 
                VALUES(?,?,?,?,?,?);";
        $tabla = $this->base->prepare($sql);
        $tabla->bindValue(1,$museo->getNombre());
        $tabla->bindValue(2,$museo->getDireccion());
        $tabla->bindValue(3,$museo->getCiudad());
        $tabla->bindValue(4,$museo->getFecha());
        $tabla->bindValue(5,$museo->getDesripcion());
        $tabla->bindValue(6,$museo->getEstrellas());
        $tabla->execute();
    }

    public function update($museo){
        $sql = "UPDATE museo SET nombre_museo=? ,direccion=? ,id_ciudad=? ,
                fecha_fundacion=? ,descripcion=? ,estrellas=?  WHERE id_museo=?";
        $tabla = $this->base->prepare($sql);
        $tabla->bindValue(1,$museo->getNombre());
        $tabla->bindValue(2,$museo->getDireccion());
        $tabla->bindValue(3,$museo->getCiudad());
        $tabla->bindValue(4,$museo->getFecha());
        $tabla->bindValue(5,$museo->getDesripcion());
        $tabla->bindValue(6,$museo->getEstrellas());
        $tabla->bindValue(7,$museo->getId_museo());
        $tabla->execute();
    }

    public function delete($id = 0){
        $sql ="DELETE FROM museo WHERE id_museo=?";
        $tabla = $this->base->prepare($sql);
        $tabla->bindParam(1,$id);
        $tabla->execute();
    }

}