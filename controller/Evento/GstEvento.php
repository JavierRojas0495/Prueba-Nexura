<?php

include_once '../model/Evento/EventoModel.php';


Class GstEvento{

    private $gstEvento;
 	
 	function __construct(){
 		$this->modelEvento = new EventoModel();
 	}

	public function registrarEvento($data){
		$resultado = false;
		$objetivo = $data['objetivo'];
		$descripcion = $data['descripcion'];
		$moneda = $data['moneda'];
		$actividad = $data['actividad'];
		$presupuesto = $data['presupuesto'];
		$fechaInicial = $data['fechaInicial'];
		$horaInicial = $data['horaInicial'];
		$fechaFinal = $data['fechaFinal'];
		$horaFinal = $data['horaFinal'];
		$estado = "ACTIVO";
		$usuario = $_SESSION['id'];
		

		try {
			$sql = "INSERT INTO Evento VALUES ('0','$objetivo','$descripcion','$moneda',$actividad,$presupuesto,'$fechaInicial','$horaInicial','$fechaFinal','$horaFinal','$estado',$usuario)";
			$datos = $this->modelEvento->insertar($sql);
        	$resultado = true;
		}catch(Exception $e){
			echo "Error: ".$e->getMessage();
		}
		return $resultado;
	}

	public function getEventos(){

		$sql =" SELECT id_evento, objetivo_evento, moneda_evento, presupuesto_evento, estado_evento FROM Evento ";
		$resultado = $this->modelEvento->consultarArray($sql); 
		return $resultado;
        	
	}

	public function getEventosInfo(){

		$sql =" SELECT id_evento, objetivo_evento, P.prod_nombre, descripcion_evento, moneda_evento, presupuesto_evento, fechainicio_evento,
					horainicio_evento,fechafin_evento,horafin_evento, estado_evento, U.nombre
				FROM Evento E
				INNER JOIN usuario U ON U.id = E.id_usuario
				INNER JOIN producto P ON P.id_prod = E.actividad_evento";
		$resultado = $this->modelEvento->consultarArray($sql); 
		return $resultado;

	}
	
}