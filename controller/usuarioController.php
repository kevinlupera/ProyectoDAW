<?php
require_once 'model/usuarios/usuarioModel.php';

class usuarioController{
    private $usuarioModel;
    private $persona;
    function __construct() {
        if(isset($_SESSION['usuario']) && $_SESSION['tipo']>=1){
            $this->usuarioModel = new UsuarioModel();
         }else{
             header("Location:index.php");
         }
    }
    //accion por defecto
    public function consultar(){
        if($_SESSION['tipo']==4){
            $this->persona=$this->usuarioModel->Listar();
            //llamar a la vista
            require_once 'view/header.php';
            require_once 'view/usuarios/usuariosView.php';
            require_once 'view/footer.php';
        }else{
           header("Location:index.php");
        }
    }  
    public function registrar() {
        if (isset($_POST['botonRegistrar'])) {
            $usuario= new Usuario();
            $persona=new Persona();
            //Leer parametros
            $usuario->setUsuario_id($_REQUEST['idUsuario']);
            $usuario->setClave($_REQUEST['claveUsuario']);
            $persona->setNombre($_REQUEST['nombreUsuario']) ;
            $persona->setApellido($_REQUEST ["apellidoUsuario"]) ;
            $persona->setCedula($_REQUEST ["cedulaUsuario"]);
            $persona->setEmail($_REQUEST ["correo"]);
            $persona->setGenero($_REQUEST ["genero"]);
            $persona->setFecha_nacimiento($_REQUEST ["fechaNacimiento"]);
            if(isset($usuario) && !empty($usuario)&&isset($persona) && !empty($persona)){
                $usuario= $this->usuarioModel->registrarUsuario($usuario,$persona);   
             }
        } 
        require_once 'view/header.php';
        require_once 'view/usuarios/registroView.php';
        require_once 'view/footer.php';
    }
    public function buscar() {
        if($_SESSION['tipo']==4){
            require_once 'view/header.php';
            require_once 'view/usuarios/buscarView.php';
            require_once 'view/footer.php';
        }else{
            $this->persona=$this->usuarioModel->buscarPersonaxId( $_SESSION['persona_id']);
            require_once 'view/header.php';
            require_once 'view/usuarios/usuarioView.php';
            require_once 'view/footer.php';
        }
        
    }   
    
    public function buscarPersona(){
        $ced=$_REQUEST['cedulaBuscada'];
        $this->persona=$this->usuarioModel->buscarPersona($ced);
        require_once 'view/header.php';
        require_once 'view/usuarios/usuarioView.php';
        require_once 'view/footer.php';
    }
    //es llamada cuando seleccionamos el enlace de nueva actividad o editar actividad de de actividadesView.php
    // llama a la vista actividadEditarView.php
    public function Crud(){
        $usuario = new Usuario();
        $persona = new Persona();
        //si un id es enviado cargara los datos de la actividad correspondiente a ese id
        if(isset($_REQUEST['id'])){
            $a= $this->usuarioModel->obtenerPorId($_REQUEST['id']);   
            $usuario=$a[0];
            $persona=$a[1];
        }
        //Llamar a la vista flujo de ventanas
        require_once 'view/header.php';
        require_once 'view/usuarios/usuarioEditarView.php';
        require_once 'view/footer.php';
    }
    
    public function guardar(){
        $usuario= new Usuario();
        $persona=new Persona();
        //Leer parametros
        $usuario->setUsuario_id($_REQUEST["idUsuario"]);
        $usuario->setUsuario($_REQUEST["usuario"]);
        $usuario->setClave($_REQUEST["claveUsuario"]);
        $usuario->setUsu_estado($_REQUEST["usu_estado"]);
        $persona->setPersona_id($_REQUEST['persona_id']);
        $persona->setNombre($_REQUEST["nombreUsuario"]) ;
        $persona->setApellido($_REQUEST ["apellidoUsuario"]) ;
        $persona->setCedula($_REQUEST ["cedulaUsuario"]);
        $persona->setEmail($_REQUEST ["correo"]);
        $persona->setGenero($_REQUEST ["genero"]);
        $persona->setFecha_nacimiento($_REQUEST ["fechaNacimiento"]);
        if(isset($_REQUEST['idUsuario']) && !empty($_REQUEST['idUsuario'])){
            $usuario->setUsuario_id($_REQUEST['idUsuario']);
            $this->usuarioModel->actualizar($usuario,$persona);   
            header("Location:index.php?c=usuario&a=consultar");
        }
        
    }
    
    public function eliminar(){
        //si un id es enviado cargara los datos de la actividad correspondiente a ese id
        if(isset($_REQUEST['ide'])){
            $this->usuarioModel->eliminar($_REQUEST['ide']);   
        }
        //Llamar a la vista flujo de ventanas
        require_once 'view/header.php';
        header("Location:index.php?c=usuario&a=consultar");
        require_once 'view/footer.php';
    
        }
}
