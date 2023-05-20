<?php

include_once '../model/Producto/ProductoModel.php';


Class GstProducto{

    private $gstProducto;
 	
 	function __construct(){
 		$this->modelProducto = new ProductoModel();
 	}

    public function postCrearProducto($datos){
        
        $prod_nom = $datos['prod_nombre'];
        $prod_ref = $datos['prod_ref'];
        $prod_prec = $datos['prod_prec'];
        $prod_peso = $datos['prod_peso'];
        $prod_cat = $datos['prod_cat'];
        $prod_stock = $datos['prod_stock'];
        $prod_ruta_img = $datos['url_img'];
        $prod_estado = 'A';
        $prod_fecha = date('Y-m-d H:i:s');

        try {
            $sql ="insert into producto values ('0','$prod_nom','$prod_ref',$prod_prec,$prod_peso,'$prod_cat',$prod_stock,'$prod_ruta_img','$prod_estado','$prod_fecha')";
            $resultado = $this->modelProducto->insertar($sql);
            return $resultado;
        }catch(Exception $e){
            echo "Error al insertar producto";
        }
        
    }

    public function consultarProductos(){
        $sql = "SELECT P.id_prod, P.prod_nombre, P.prod_referencia, P.prod_precio, C.nombre as categoria, P.prod_stock, P.prod_fecha_creacion FROM producto P INNER JOIN categorias C ON C.id = P.prod_categoria WHERE P.estado_producto = 'A' ";
        $datos = $this->modelProducto->consultarArray($sql);
        return $datos;
    }

    public function postEliminarProducto($id){
        try{
            $sql =" UPDATE producto SET estado_producto = 'I' WHERE id_prod = ".$id;
            $resultado = $this->modelProducto->editar($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Ocurrio un error";
        }

    }

    public function consultarProducto($id){

        $sql = " SELECT P.id_prod, P.prod_nombre, P.prod_referencia, P.prod_peso, P.prod_precio, C.id as categoria, P.prod_stock, P.ruta_img FROM producto P INNER JOIN categorias C ON C.id = P.prod_categoria WHERE P.id_prod = ".$id;
        $datos = $this->modelProducto->consultarArray($sql);
        return $datos;

    }

    public function updateProductoVenta($data){
        
        $id_prod = $data['id_prod'];
        $cant_prod = $data['cant_prod'];

        $producto = $this->consultarProducto($id_prod);
        $stock =  $producto[0]['prod_stock'];
        $stock = $stock - $cant_prod;
        
        try {
            $sql ="Update producto set prod_stock = $stock where id_prod = $id_prod";
            $resultado = $this->modelProducto->editar($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Error al insertar editarProducto";
            var_dump($e);
        }

    }


    public function postEditarProducto($datos){
        
        $id_prod = $datos['prod_id'];
        $prod_nom = $datos['prod_nombre'];
        $prod_ref = $datos['prod_ref'];
        $prod_prec = $datos['prod_prec'];
        $prod_peso = $datos['prod_peso'];
        $prod_cat = $datos['prod_cat'];
        $prod_stock = $datos['prod_stock'];
        $prod_ruta_img = $datos['url_img'];
        
        if($prod_ruta_img === "false"){
            $sql ="Update producto set prod_nombre = '$prod_nom', prod_referencia = '$prod_ref', prod_precio = $prod_prec, prod_peso = $prod_peso, prod_categoria = '$prod_cat', prod_stock = $prod_stock  where id_prod=".$id_prod;
        }else{
            $sql ="Update producto set prod_nombre = '$prod_nom', prod_referencia = '$prod_ref', prod_precio = $prod_prec, prod_peso = $prod_peso, prod_categoria = '$prod_cat', ruta_img= '$prod_ruta_img',  prod_stock = $prod_stock  where id_prod=".$id_prod;
        }
        try {
           $resultado = $this->modelProducto->editar($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Error al editar producto";
            var_dump($e);
        }
        
    }

    public function getCategorias(){
        
        $sql = " SELECT id,nombre FROM categorias";
        $datos = $this->modelProducto->consultarArray($sql);
        return $datos;
        
    }

}