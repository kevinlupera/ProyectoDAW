<?php
//include("/modelo/Usuario.php");
require_once 'model/ordenes/ordenesModel.php';

class cestaController{
    private $ordenesModel;
    private $ordenes;
    
    function __construct() {
        $this->ordenesModel = new ordenesModel();
        
    }
    //accion por defecto
    public function consultar(){
        //llamar al modelo
        //$this->actividades=$this->actividadModel->Listar();
        //llamar a la vista
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
    
    
    
}
    


