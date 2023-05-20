<?php
include_once '../model/Producto/ProductoModel.php';
include_once 'GstProducto.php';

class ProductoController{

    private $modelProducto;
 	
 	
 	function __construct(){
 		$this->gstProducto = new GstProducto();
 	}
    
    public function crearProducto(){
        
        $categorias = $this->gstProducto->getCategorias();
        include_once '../view/Producto/Producto/crearProducto.php';
    }

    public function postCrearProducto(){

        $datos = $this->gstProducto->postCrearProducto($_POST);
        return JSON_encode($datos);
    }


    Public function listarProductos(){
        
        $datos = $this->gstProducto->consultarProductos();
        include_once '../view/Producto/Producto/listarProductos.php';
    }

    public function vistaEditarProducto(){
        $categorias = $this->gstProducto->getCategorias();
        $datos = $this->gstProducto->consultarProducto($_REQUEST['idProd']);
        include_once '../view/Producto/Producto/editarProducto.php';
    }

    public function postEditarProducto(){
        
        $datos = $this->gstProducto->postEditarProducto($_POST);
        return JSON_encode($datos);
    }
    
    public function postEliminarProducto(){
        
        $datos = $this->gstProducto->postEliminarProducto($_POST['id']);
        return JSON_encode($datos);
    }

    public function UpdateProducto(){
        $update = $this->gstProducto->updateProductoVenta($_REQUEST);
    }
    

}