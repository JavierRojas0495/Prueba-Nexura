<?php

include_once 'conf.php';

class connection{
    private $server;
    private $user;
    private $pass;
    private $post;
    private $database;
    private $link;
    function __construct() {
        $this->setconnect();
        $this->connect();  
    }
    private function setconnect() {
      /*
        $this->server="127.0.0.1";
        $this->user="root";
        $this->pass="";
        $this->port="3306";
        $this->database="prueba_playtech";
    
    */
        $this->server=SERVER;
        $this->user=USER;
        $this->pass=PASSWORD;
        $this->port=PORT;
        $this->database=DATABASE;
      
    }
    
    private function connect() {
        $this->link=mysqli_connect( $this->server, $this->user, $this->pass, $this->database);
        if(!$this->link){
            die(mysqli_error($this->link));
        }     
    }
    public function getConnect() {
        return $this->link;
    }
    public function close() {
        mysqli_close($this->link);
    }
}
?>