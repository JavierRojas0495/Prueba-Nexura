<?php

include_once '../model/Archivos/ArchivosModel.php';


Class GstArchivos{

    private $gstArchivos;
 	
 	function __construct(){
 		$this->modelArchivos = new ArchivosModel();
 	}

	public function registrarNuevoArchivo($data){

		$nombre = $data['nom_arc'];
		$desc = $data['descripcion'];
		$rutaAr =$data['ruta'];

		try {
			$sql = "INSERT INTO archivos VALUES ('0','$nombre','$desc','$rutaAr')";
			//var_dump($sql);
        	$datos = $this->modelArchivos->eliminar($sql);
        	return $datos;
		}catch(Exception $e){
			echo "Error: ".$e->getMessage();
		}
	}

	public function editarArchivo($data){
		
		$id = $data['id'];
		$nombre = $data['nom_arc'];
		$desc = $data['descripcion'];
		$rutaAr =$data['ruta'];
		if($rutaAr){
			$sql = "UPDATE archivos SET descripcion = '$desc', ruta_archivo = '$rutaAr' , nombre = '$nombre' WHERE id = ".$id;
		}else{
			$sql = "UPDATE archivos SET descripcion = '$desc', nombre = '$nombre' WHERE id = ".$id;
		}
		try {
			$datos = $this->modelArchivos->editar($sql);
        	return $datos;
		}catch(Exception $e){
			echo "Error: ".$e->getMessage();
		}
	}

	public function listarArchivos(){

		$sql = "SELECT id,nombre,ruta_archivo as ruta FROM archivos";
        $datos = $this->modelArchivos->consultarArray($sql);
        return $datos;
	}

	public function consultarArchivoId($id) {
		$sql = "SELECT id,nombre,descripcion,ruta_archivo AS ruta FROM archivos WHERE id = ".$id;
        $datos = $this->modelArchivos->consultarArray($sql);
        return $datos;
	}

	public function eliminarArchivoId($id) {
		try {
			$sql = "DELETE FROM archivos WHERE id = ".$id;
			//var_dump($sql);
        	$datos = $this->modelArchivos->eliminar($sql);
        	return $datos;
		}catch(Exception $e){
			echo "Error: ".$e->getMessage();
		}
	}
}