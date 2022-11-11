<?php

require "model/dao/MuseoDao.php";
require "model/dao/CiudadDao.php";

class MuseoController{

    public function index(){
        $museoDao = new MuseoDao();
        $rowi = $museoDao->select();
        $rowset = $rowi;
        require("view/listarMuseo.php");
    }

    public function registrar(){
        
        $museoDao = new MuseoDao();
        $ciudadDao = new CiudadDao();
        $combo = $ciudadDao->select();
        $museo = new Museo();
        if ($_POST) {
            # code...
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $ciudad = $_POST["comboCiudad"];
            $fecha = $_POST["fecha"];
            $descripcion = $_POST["descripcion"];
            $estrellas = $_POST["estrellas"];
            
            $museo->setNombre($nombre);
            $museo->setDireccion($direccion);
            $museo->setCiudad($ciudad);
            $museo->setFecha($fecha);
            $museo->setDesripcion($descripcion);
            $museo->setEstrellas($estrellas);
            
            $museoDao->insert($museo);
            header("location: inicio");
        }
        
        require("view/registrarMuseo.php");
    }

    public function editar(){
        $museoDao = new MuseoDao();
        $museo = new Museo();
        $ciudadDao = new CiudadDao();
        $combo = $ciudadDao->select();
        $objMuseo = $museoDao->select($_GET["id"]);
        if ($_POST) {
            # code...
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $ciudad = $_POST["comboCiudad"];
            $fecha = $_POST["fecha"];
            $descripcion = $_POST["descripcion"];
            $estrellas = $_POST["estrellas"];
            
            $museo->setId_museo($id);
            $museo->setNombre($nombre);
            $museo->setDireccion($direccion);
            $museo->setCiudad($ciudad);
            $museo->setFecha($fecha);
            $museo->setDesripcion($descripcion);
            $museo->setEstrellas($estrellas);
            
            $museoDao->update($museo);
            header("location: ../inicio");
        }
        require("view/editarMuseo.php");
    }

    public function eliminar(){
        
        $museoDao = new MuseoDao();
        $id = "";
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $museoDao->delete($id);

        header("location: ../inicio");
    }

}