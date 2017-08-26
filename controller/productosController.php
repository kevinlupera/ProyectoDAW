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
}

