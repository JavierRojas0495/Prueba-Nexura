<?php
include_once '../model/Ventas/VentasModel.php';
include_once 'GstVentas.php';

include_once '../controller/Producto/ProductoController.php';
include_once '../controller/Producto/GstProducto.php';

include_once '../controller/Usuario/UsuarioController.php';
include_once '../controller/Usuario/GstUsuario.php';

class VentasController{

    private $gstVentas;
    private $gstProducto;
    private $gstUsuario;
 	
 	function __construct(){
 		$this->gstVentas = new GstVentas();
        $this->gstProducto = new GstProducto();
        $this->gstUsuario = new GstUsuario();
 	}
     
     
    public function vistaVentaProducto(){
         
        $data = $this->gstProducto->consultarProducto($_REQUEST["idProd"]);
        $categorias = $this->gstProducto->getCategorias();        
        include_once '../view/Ventas/Ventas/ventaProducto.php';
    }

    public function postVentaProducto(){
        
        $data = $this->gstVentas->postVentaProducto($_REQUEST);
        //$this->UpdateProducto();
    }
        
    Public function listarVentasProductos(){
            
        $datos = $this->gstVentas->consultarVentasProductos();
        $prodMasStock = $this->gstVentas->productoMasStock();
        $prodMasVnt = $this->gstVentas->productoMasVendido();
        
        include_once '../view/Ventas/Ventas/listarVentasProductos.php';
    }
    
    Public function tiendaVirtual(){
    
        $datos = $this->gstVentas->consultarVentasProductos();
        include_once '../view/Ventas/Ventas/tiendaVirtual.php';
    }

    public function getProductId(){

        $datos = $this->gstVentas->getProductId($_GET['id_product']);
        echo json_encode($datos);
    }
    
    Public function registrarVentas(){
    
        $datos = $this->gstProducto->consultarProductos();
        include_once '../view/Ventas/Ventas/listarProductosVentas.php';
    }
    
    public function vistaVentasProducto(){
         
        $data = $this->gstProducto->consultarProducto($_REQUEST["idProd"]);
        $categorias = $this->gstProducto->getCategorias();
        $asesor = $this->gstUsuario->ConsultarUsuariosAsesores();
        include_once '../view/Ventas/Ventas/vistaVentasProducto.php';
    }

    public function postVentaProductoAsesor(){
        
        $datos = $this->gstVentas->postVentaProductoAsesor($_POST);
        echo json_encode($datos);
    }

    public function vistaCalcularComisiones(){

        $asesores = $this->gstUsuario->ConsultarUsuariosAsesores();
        include_once '../view/Ventas/Ventas/vistaCalcularComisiones.php';
    }

    public function postGenearVistaComisiones(){
        $resultados = $this->gstVentas->postGenerarComisiones($_GET);
        $tipo = $_GET['tipo'];
        include_once '../view/Ventas/Ventas/vistaTableComisiones.php';
    }

    public function agregarProductosCarrito() {

        $productos = $this->gstVentas->addProductCarrito($_GET);
        echo json_encode($productos);
    }
}