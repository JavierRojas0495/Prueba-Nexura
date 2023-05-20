<?php

include_once '../model/Asignatura/AsignaturaModel.php';


Class GstAsignatura{

    private $gstAsignatura;
 	
 	function __construct(){
 		$this->modelAsignatura = new AsignaturaModel();
 	}

     public function getAreas(){
        
        $sql = "select id,nombre from areas";
        $datos = $this->modelAsignatura->consultarArray($sql);
        return $datos;
    }

    public function postRegistrarAsignatura($data){
        
        $nombre = $data['nombre'];
        $area = $data['area'];
        $descripcion = $data['descripcion'];
        $creditos = $data['creditos'];
        $nivel = $data['nivel'];

        try{
            $sql =" INSERT INTO asignaturas VALUES ('','$nombre','$area','$descripcion',$creditos,'$nivel','A' )";
            $resultado = $this->modelAsignatura->insertar($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Ocurrio un error";
        }

    }

    public function getAsignaturas(){

        try{
            $sql =" SELECT A.id, A.nombre, Ar.nombre AS area,A.descripcion, A.creditos, A.nivel, A.estado FROM asignaturas A INNER JOIN areas Ar ON Ar.id = A.area_id WHERE A.estado = 'A' ";
            $resultado = $this->modelAsignatura->consultarArray($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Ocurrio un error";
        }

    }

    public function inabilitarAsignatura($id){
        
        try{
            $sql =" UPDATE asignaturas SET estado = 'I' WHERE id = ".$id;
            $resultado = $this->modelAsignatura->editar($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Ocurrio un error";
        }

    }

    public function getAsignaturaId($id){

        try{
            $sql =" SELECT id, nombre, area_id, descripcion, creditos, nivel, estado FROM asignaturas WHERE id = ".$id;
            $resultado = $this->modelAsignatura->consultarArray($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Ocurrio un error";
        }

    }

    public function postEditarAsignatura($data){
        
        $id = $data["id"];
        $nombre = $data['nombre'];
        $area = $data['area'];
        $descripcion = $data['descripcion'];
        $creditos = $data['creditos'];
        $nivel = $data['nivel'];
        $estado = $data['estado'];

        try{
            $sql =" UPDATE asignaturas SET nombre = '$nombre', area_id = '$area', descripcion = '$descripcion', creditos = '$creditos', nivel = '$nivel',  estado = '$estado' WHERE id = ".$id;
            $resultado = $this->modelAsignatura->editar($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Ocurrio un error";
        }

    }


}