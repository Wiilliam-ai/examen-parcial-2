<?php
//Incluyo los archivos necesarios
require("./model/entity/Museo.php");
require("./controller/MuseoController.php");
//Instancio el controlador
$controller = new MuseoController();
//Ejecuto el método
include "./templates/tmplHeader.php";

    $cmd = "";
    if (isset($_GET["cmd"])) {
        $cmd = $_GET["cmd"];
    }

    if ($cmd == "eliminar") {
        # code...
        $controller->eliminar();

    }else if($cmd == "editar"){
        $controller->editar();  
        
    } else if($cmd == "registrar"){
        
        $controller->registrar();  
    }else{
        
        $controller->index();  
    }
        
include "./templates/tmplFooter.php";
?>