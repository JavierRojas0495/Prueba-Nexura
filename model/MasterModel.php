<?php

include_once '../Lib/conf/Connection.php';

class MasterModel extends connection{
    
    public function insertar($sql) {
        $respuesta= mysqli_query($this->getConnect(), $sql);
        return $respuesta;
    }
    public function eliminar($sql) {
        $respuesta= mysqli_query($this->getConnect(), $sql);
        return $respuesta;
    }
    public function editar($sql) {
        $respuesta= mysqli_query($this->getConnect(), $sql);
        return $respuesta;
    }
    public function consultar($sql) {
        $respuesta= mysqli_query($this->getConnect(), $sql);
        return $respuesta;
    }
    public function consultarArray($sql) {
        $respuesta= mysqli_query($this->getConnect(), $sql);
        $arreglo=array();
        if($respuesta){
            while ($row= mysqli_fetch_array($respuesta)){
                $arreglo[]=$row;
            }
        }
        return $arreglo;
    }
    
    public function autoIncrement($table,$field) {
        $sql="select max($field) from $table";
        $respuesta= $this->consultar($sql);
        $contador= mysqli_fetch_row($respuesta);
        return end($contador)+1;
    }
    
    public function lastInsertarId($table,$field) {
        $sql="select max($field) from $table";
        $respuesta= $this->consultar($sql);
        $contador= mysqli_fetch_row($respuesta);
        return end($contador);
    }
}
?>
