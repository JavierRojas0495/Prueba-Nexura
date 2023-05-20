<?php
include_once '../model/Usuario/UsuarioModel.php';
include_once 'GstUsuario.php';
class UsuarioController{


    function __construct(){
        $this->gstUsuario = new GstUsuario();
    }

    Public function listarUsuario(){
        
        $datos = $this->gstUsuario->ConsultarUsuarios();
        include_once '../view/Usuario/Usuario/listar.php';
    }

    public function crearUsuario(){
        
        $datos = $this->gstUsuario->getAreas();
        $roles = $this->gstUsuario->getRoles();
        $ciudad = $this->gstUsuario->getCiudad();
        include_once '../view/Usuario/Usuario/crear.php';
    }

    public function postCrearUsuario(){
        
        
        $datos = $this->gstUsuario->postRegistrarUsuario($_POST);
        echo JSON_encode($datos);
    }

    public function editarUsuario(){
        
        
        $datos = $this->gstUsuario->ConsultarUsuario($_GET['id']);
        $areas = $this->gstUsuario->getAreas();
        $roles = $this->gstUsuario->getRoles();
        $ciudad = $this->gstUsuario->getCiudad();
        include_once '../view/Usuario/Usuario/editar.php';
    }

    public function postEditarUsuario(){
        
        $datos = $this->gstUsuario->UpdateUsuario($_POST);
        echo JSON_encode($datos);
    }

    public function postEliminarUsuario(){
        
        $datos = $this->gstUsuario->eliminarUsuario($_POST['id']);
        echo JSON_encode($datos);
    }



}