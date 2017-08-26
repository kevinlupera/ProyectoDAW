<?php
require_once 'model/productos/productoModel.php';
class productosController{
    private $productoModel;
    private $productos;
    
    function __construct() {
        $this->productoModel = new productoModel();
    }

    public function ListarProductos(){
        $this->productos=$this->productoModel->obtenerProductos();
        
        require_once 'view/header.php';
        require_once 'view/productos/productosView.php';
        require_once 'view/footer.php';
    }
    
    public function addToCesta(){
        
        $orden=new Orden();
        if(isset($_POST['addCest'])){
            $orden->setProducto_id($_POST['idproducto']);
            $orden->setUsuario_id($_POST['idusuario']);
            $orden->setPrecio($_POST['precio']);
            $orden->setCantidad($_POST['cantidad']);
            $orden->setTotal($_POST['precio']*$_POST['cantidad']);
            $this->productoModel->insertarProductos($orden);
        }
        require_once 'view/header.php';
        require_once 'view/productos/productosView.php';
        require_once 'view/footer.php';
    }
}

