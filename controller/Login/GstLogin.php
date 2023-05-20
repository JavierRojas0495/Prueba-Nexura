<?php

include_once '../model/Login/LoginModel.php';

Class GstLogin{

    private $gstLogin;
 	
 	function __construct(){
 		$this->modelLogin = new LoginModel();
 	}

    public function consultarCorreo($correo) {
        
        $sql = " SELECT ruta_img, email FROM usuario WHERE email = '$correo' ";
        $datos = $this->modelLogin->consultarArray($sql);
        return $datos;
    }

    public function login($data) {
        
        @session_start();
        $correo = $data['correo'];
        $pass = $data['password'];
        
        $sql = " SELECT id,rol,nombre,ruta_img FROM usuario WHERE email = '$correo' and password = '$pass' ";
        $datos = $this->modelLogin->consultarArray($sql);
        
        if($datos){
            foreach( $datos as $dato){

                $_SESSION['name']=$dato['nombre'];
                $_SESSION['rol']=$dato['rol'];
                $_SESSION['id']=$dato['id'];
                $_SESSION['img']=$dato['ruta_img'];
            }
            
        }else{
            unset($_SESSION);
            session_destroy();
            
        }
        return $datos;
    }


    public function logout(){

        unset($_SESSION);
        session_destroy();
    }
}