<?php
include_once '../model/Evento/EventoModel.php';
include_once 'GstEvento.php';

include_once '../controller/Producto/GstProducto.php';

class EventoController{

    private $modelEvento;
 	private $gstProducto;
 	
 	function __construct(){
 		$this->gstEvento = new GstEvento();
        $this->gstProducto = new GstProducto();
 	}

    public function crearEvento(){
        
        $productos = $this->gstProducto->consultarProductos();
        include_once '../view/Evento/Evento/crearEvento.php';
    }

    public function postRegistrarEvento(){
        $resultado = $this->gstEvento->registrarEvento($_GET);
        echo json_encode($resultado);
    }

    public function listarEvento(){

        $evento = $this->gstEvento->getEventos();
        include_once '../view/Evento/Evento/listarEvento.php';
    }

    public function agregarArchivos(){

        $evento = $_GET['idEvent'];
        include_once '../view/Evento/Archivo/adicionarArchivos.php';
    }

    public function listarEventosInforme(){

        $evento = $this->gstEvento->getEventosInfo();
        include_once '../view/Evento/Evento/listarEventoInfo.php';
    }
    
}