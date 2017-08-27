<?php

require_once 'model/facturas/facturasModel.php';
require_once 'model/usuarios/personaModel.php';
require_once 'model/productos/productoModel.php';
class facturasController {
    private $facturasModel;
    private $personasModel;
    private $productoModel;
    private $facturas;
    private $detalles;
   
    
    
    function __construct() {
        if(isset($_SESSION['usuario']) && $_SESSION['tipo']>1){
            $this->facturasModel = new facturasModel();
            $this->personasModel=new PersonaModel();
            $this->productoModel=new productoModel();
        }else{
            header("Location:index.php?c=login");
        }
    }
    
    public function listarFacturas(){
        $this->facturas= $this->facturasModel->obtenerFacturas();
        require_once 'view/header.php';
        require_once 'view/facturacion/facturasView.php';
        require_once 'view/footer.php';
    }
    
    public function ListarDetalles(){
        $factura_id=$_REQUEST['p'];
        $this->detalles=$this->facturasModel->obtenerDetalles($factura_id);
        require_once 'view/header.php';
        require_once 'view/facturacion/detallesView.php';
        require_once 'view/footer.php';
    }
    
   

}
