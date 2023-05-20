<?php

include_once '../model/Ventas/VentasModel.php';


Class GstVentas{

    private $modelVentas;
 	
 	function __construct(){
 		$this->modelVentas = new VentasModel();
 	}

    public function postVentaProducto($data){

        $id_prod = $data['id_prod'];
        $prod_ref = $data['ref_prod'];
        $prod_prec = $data['prec_prod'];
        $cant_prod = $data['cant_prod'];

        $resultado = $this->consultarProductoTienda($id_prod);
        
        if($resultado){
            
            $id_vent = $resultado[0]['id_vent'];
            $cant_prod = $cant_prod + $resultado[0]['vnt_cant_prod'];
            $resultado = $this->updateProductoTienda($prod_ref,$prod_prec,$cant_prod,$id_vent);
            //echo "Editar Producto";
        }else{
            $resultado = $this->registrarNuevoProductoTienda($id_prod,$prod_ref,$prod_prec,$cant_prod);
            //echo "Producto Nuevo";
        }
        return $resultado;
    }

    public function registrarNuevoProductoTienda($id_prod,$prod_ref,$prod_prec,$cant_prod){
        
        try {
            $sql ="insert into ventas values ('0',$id_prod,'$prod_ref',$prod_prec,$cant_prod,'A')";
            $resultado = $this->modelVentas->insertar($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Error al insertar venta";
            var_dump($e);
        }

    }

    public function updateProductoTienda($prod_ref,$prod_prec,$cant_prod,$id_vent){
        
        try {
            $sql =" UPDATE ventas SET prod_ref = '$prod_ref', prod_prec = '$prod_prec', vnt_cant_prod = '$cant_prod' WHERE id_vent = ".$id_vent;
            $resultado = $this->modelVentas->editar($sql); 
            return $resultado;
        }catch(Exception $e){
            echo "Error al insertar venta";
            var_dump($e);
        }
    }

    public function consultarProductoTienda($id){

            $sql = "select id_vent, id_prod, prod_ref, vnt_cant_prod from ventas where id_prod = ".$id;
            $datos = $this->modelVentas->consultarArray($sql);
            return $datos;
    }


    public function consultarVentasProductos() {
        
        $sql = " SELECT VNT.id_prod, PR.prod_nombre, VNT.prod_ref, VNT.prod_prec, C.nombre as categoria , VNT.vnt_cant_prod, VNT.vnt_estado as estado, PR.ruta_img FROM producto PR INNER JOIN ventas VNT ON PR.id_prod = VNT.id_prod INNER JOIN categorias C ON PR.prod_categoria = C.id ORDER BY 6 desc ";
        $datos = $this->modelVentas->consultarArray($sql);
    
        return $datos;
    }
    
    public function productoMasStock() {

            $sql = " SELECT vnt.id_prod, pr.prod_nombre, sum(vnt.vnt_cant_prod) as vntTotal FROM producto pr INNER JOIN ventas vnt ON pr.id_prod = vnt.id_prod GROUP BY vnt.id_prod ORDER BY 3 desc limit 1 ";
            $datos = $this->modelVentas->consultarArray($sql);
            return $datos;
        
    }

    public function productoMasVendido(){

        $sql = " SELECT vnt.id_prod, pr.prod_nombre, sum(vnt.vnt_cant_prod) as vntTotal FROM producto pr INNER JOIN ventas vnt ON pr.id_prod = vnt.id_prod GROUP BY vnt.id_prod ORDER BY 3 asc limit 1 ";
        $datos = $this->modelVentas->consultarArray($sql);
        return $datos;
    }

    public function getProductId($id){
        $sql = " SELECT P.id_prod, P.ruta_img, P.prod_nombre, P.prod_referencia, P.prod_precio, V.vnt_cant_prod FROM producto P INNER JOIN ventas V ON P.id_prod = V.id_prod WHERE P.id_prod = $id AND vnt_estado = 'A' ";
        $datos = $this->modelVentas->consultarArray($sql);
        return $datos;

    }

    public function addProductCarrito($data){
        
        $idProd = $data['idProduct'];
        $cantProd = $data['cantProduct'];

        $sql = " SELECT vnt_cant_prod FROM ventas WHERE id_prod = ".$idProd;
        $datos = $this->modelVentas->consultarArray($sql);

        if($datos[0]['vnt_cant_prod'] < $cantProd){
            $respuesta = false;
        }else{
            
            if(!isset( $_SESSION['ProductsTienda'] )) {

                $_SESSION['ProductsTienda'] = true;
                $respuesta = $this->addUpdatedCarritoCompras($idProd,$cantProd);
            }else{
                
               $respuesta = $this->addUpdatedCarritoCompras($idProd,$cantProd);

            }                
        }
        return $respuesta;

    }

    public function addUpdatedCarritoCompras($id_prod,$cant){

        $sql = " SELECT prod_cantidad FROM productos_carrito_tienda WHERE id_prod =".$id_prod;
        $datos = $this->modelVentas->consultarArray($sql);
        
        if($datos){

            $sql = " SELECT vnt_cant_prod, max(vnt_cant_prod) as total FROM ventas WHERE id_prod = ".$id_prod;
            $cantDisponible = $this->modelVentas->consultarArray($sql);
            
            $cant = $datos[0]['prod_cantidad'] + $cant;

            if($cantDisponible[0]['vnt_cant_prod'] < $cant){
                $cant = $cantDisponible[0]['total'];
            }

            $sql = " UPDATE productos_carrito_tienda SET prod_cantidad = ".$cant." WHERE id_prod = ".$id_prod." AND id_usuario = ".$_SESSION['id'];
            $resultado = $this->modelVentas->editar($sql);

        }else{
            
            $id = $_SESSION["id"];
            $sql = " INSERT INTO productos_carrito_tienda VALUES( 0,$id_prod,$cant,$id)";
            $resultado = $this->modelVentas->insertar($sql);   
        }
        return $resultado;
    }
    
    public function postVentaProductoAsesor($data){

        $id_prod = $data['id_prod'];
        $prod_ref = $data['ref_prod'];
        $prod_prec = $data['prec_prod'];
        $cant_prod = $data['cant_prod'];
        $total_venta = $data['prec_venta'];
        $asesor = $data['asesor_id'];
        
        try {
            $sql ="insert into ventas_asesor values ('0',$id_prod,'$prod_ref',$prod_prec,$cant_prod,$total_venta,$asesor)";
            $resultado = $this->modelVentas->insertar($sql); 
        }catch(Exception $e){
            echo "Error al insertar venta";
            var_dump($e);
        }

        return $resultado;
    }

    public function postGenerarComisiones($data){

        
        $id_usuario = $data['id_usu'];
        $comision = $data['comision'];
        $tipo = $data['tipo'];

        $comision = $comision / 100;


        if($id_usuario == 0) {
            // TODOS
            if( $tipo == 0 ){
                // Venta por venta
                $sql = " SELECT VA.usuario_id, P.ruta_img, P.prod_nombre, P.prod_referencia, VA.prod_prec, VA.cant_prod, VA.total_venta, ( VA.total_venta* $comision ) as comision, U.nombre FROM ventas_asesor VA INNER JOIN producto P ON P.id_prod = VA.id_prod INNER JOIN usuario U ON U.id = VA.usuario_id ORDER BY 1 ";
            }else {
                // Todas la ventas juntas
                $sql = " SELECT VA.usuario_id, SUM(VA.total_venta) as totalventa, SUM(VA.total_venta*$comision) as comision, U.nombre FROM ventas_asesor VA INNER JOIN usuario U ON U.id = VA.usuario_id GROUP BY 1 ORDER BY 1 ";
            }
            
        }else {
            // Segun Id Usuario
            if($tipo == 0){
                // Venta por venta
                $sql = " SELECT P.ruta_img, P.prod_nombre, P.prod_referencia, VA.prod_prec, VA.cant_prod, VA.total_venta, (VA.total_venta*$comision) as comision, U.nombre FROM ventas_asesor VA INNER JOIN producto P ON P.id_prod = VA.id_prod INNER JOIN usuario U ON U.id = VA.usuario_id WHERE VA.usuario_id = $id_usuario ";
            }else {
                $sql = " SELECT VA.usuario_id, SUM(VA.total_venta) as totalventa, SUM(VA.total_venta*$comision) comision, U.nombre FROM ventas_asesor VA INNER JOIN usuario U ON U.id = VA.usuario_id WHERE VA.usuario_id = $id_usuario ORDER BY 1 ";

            }
        }
         
        try {
            $resultado = $this->modelVentas->consultarArray($sql); 
            
        }catch(Exception $e){
            echo "Error consultar";
            var_dump($e);
        }

        return $resultado;
    }        
    

}


