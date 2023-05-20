<?php
include_once '../model/Archivos/ArchivosModel.php';
include_once 'GstArchivos.php';

class ArchivosController{

    private $modelArchivos;
 	
 	
 	function __construct(){
 		$this->gstArchivos = new GstArchivos();
 	}

    public function subirNuevoArchivo(){

        include_once '../view/Archivos/Archivos/subirNuevoArchivo.php';
    }

    public function postRegistroArchivo(){

        $resultado = $this->gstArchivos->registrarNuevoArchivo($_POST);
        echo json_encode($resultado);
    }

    public function editarArchivo(){

        $archivo = $this->gstArchivos->consultarArchivoId($_GET['id']);
        include_once '../view/Archivos/Archivos/editarArchivo.php';
    }

    public function postEditarArchivo(){
        $resultado = $this->gstArchivos->editarArchivo($_GET);
        echo json_encode($resultado);
    }

    public function postEliminarArchivo(){
        $respuesta = $this->gstArchivos->eliminarArchivoId($_POST['id']);
        echo JSON_encode($respuesta);
        
    }
    public function listarArchivos(){
        $archivos = $this->gstArchivos->listarArchivos();
        include_once '../view/Archivos/Archivos/listarArchivos.php';
    }

    public function verDocumentoPDF(){
        
        $archivo = $this->gstArchivos->consultarArchivoId($_GET['id']);
        include_once '../view/Archivos/Archivos/verDocumentoPDF.php';
    }
    
}