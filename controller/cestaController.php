<?php
//include("/modelo/Usuario.php");
require_once 'model/';

class cestaController{
    
    function __construct() {
        //$this->actividadModel = new ActividadModel();
        //$this->parametroModel= new ParametroModel();
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
    
    public function obtenerOrdenesxUsuario($usuario_id){
        
    }
    
    
    
}
    


