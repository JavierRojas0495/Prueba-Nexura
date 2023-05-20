<?php
//include_once '../../model/Login/LoginModel.php';
//include_once 'GstLogin.php';

include_once '../model/Login/LoginModel.php';
include_once 'GstLogin.php';

class LoginController{

    private $modelLogin;
 	
    function __construct(){
        $this->gstLogin = new GstLogin();
    }

    
    public function consultarCorreo(){
        $resultado = $this->gstLogin->consultarCorreo($_POST['email']);
        echo json_encode($resultado);
    }

    public function login(){

        $resultado = $this->gstLogin->login($_POST);
        echo json_encode($resultado);
    }

    public function logout(){
        $this->gstLogin->logout($_GET);
    }

}