<?php
//include("/modelo/Usuario.php");
require_once 'model/ordenes/ordenesModel.php';
require_once 'model/productos/productoModel.php';

class cestaController{
    private $ordenesModel;
    private $productoModel;
    private $ordenes;
    
    function __construct() {
        if(isset($_SESSION['usuario']) && $_SESSION['tipo']>=1){
        $this->ordenesModel = new ordenesModel();
        $this->productoModel=new productoModel();
        }else{
            header("Location:index.php");
        }
    }
    //accion por defecto
    public function consultar(){
        $usuario_id=$_SESSION['usuario_id'];
        $this->ordenes= $this->ordenesModel->obtenerOrdenesxUsuario($usuario_id);
        require_once 'view/header.php';
        require_once 'view/cesta/cestaView.php';
        require_once 'view/footer.php';
    }
    
    public function getOrdenxUser(){
        $usuario_id=$_SESSION['usuario_id'];
        $this->ordenes= $this->ordenesModel->obtenerOrdenesxUsuario($usuario_id);
        require_once 'view/header.php';
        require_once 'view/cesta/cestaView.php';
        require_once 'view/footer.php';
    }
    
    public function deleteOrden(){
        if(isset($_POST['del'])){
            $idorden=$_POST['idordenc'];
            $this->ordenes= $this->ordenesModel->deleteOrden($idorden);
            $this->getOrdenxUser();
        }
    }
    
    
    
}
    


