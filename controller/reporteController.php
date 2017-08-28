<?php
require_once 'model/reportes/reporteModel.php';
require_once 'model/reportes/total.php';
require_once 'model/reportes/ordenes.php';
require_once 'model/reportes/factura.php';
require_once 'model/reportes/Reporte.php';
require_once 'model/reportes/StockProductos.php';
class reporteController {
    private $reportesModel;
    private $reportes;
    function __construct() {
        if(isset($_SESSION['usuario']) && $_SESSION['tipo']>=3){
            $this->reportesModel = new reporteModel();
            $this->reportes=new Reportes();
            $this->result=new StockProductos();
        }else{
            header("Location:index.php?c=login");
        }
    }
    public function obtenerReporte(){
        $rep= new Facturas();
        $rep=$this->reportesModel->contarFacturas();
        $this->reportes->setFacturas($rep->getFacturas());
        $rep= new Ordenes();
        $rep=$this->reportesModel->contarOrdenes();
        $this->reportes->setOrdenes($rep->getOrdenes());
        $rep= new Total();
        $rep=$this->reportesModel->obtenerTotal();
        $this->reportes->setTotal($rep->getTotal());
        $this->result=$this->reportesModel->stockProductos();
        require_once 'view/header.php';
        require_once 'view/reporte/reportesView.php';
        require_once 'view/footer.php';
    }
}